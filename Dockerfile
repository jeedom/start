FROM debian:13-slim

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y --no-install-recommends \
        apache2 \
        ca-certificates \
        libapache2-mod-php \
        php-cli \
        php-curl \
        php-mbstring \
        php-zip \
    && a2enmod remoteip headers \
    && printf 'ServerName localhost\n' > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername \
    && rm -rf /var/lib/apt/lists/*

ENV APACHE_RUN_USER=www-data \
    APACHE_RUN_GROUP=www-data \
    APACHE_LOCK_DIR=/var/lock/apache2 \
    APACHE_LOG_DIR=/var/log/apache2 \
    APACHE_PID_FILE=/var/run/apache2/apache2.pid

COPY --chown=root:root . /var/www/html

# Le checkout Semaphore peut avoir une umask restrictive : fixer les droits
# du site dans l'image, indépendamment des permissions du contexte de build.
RUN rm -f /var/www/html/index.html \
    && find /var/www/html -type d -exec chmod 0755 {} + \
    && find /var/www/html -type f -exec chmod 0644 {} + \
    && runuser -u www-data -- test -r /var/www/html/index.php \
    && runuser -u www-data -- find /var/www/html -type f -name '*.php' -exec php -l {} + \
    && apache2ctl -t

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
