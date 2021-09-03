FROM debian:11

WORKDIR /var/www/html

RUN apt-get update
RUN apt install -y php
RUN apt install -y php-curl
RUN apt install -y php-zip
RUN apt install -y php-mbstring
RUN apt install -y apache2
RUN apt install -y libapache2-mod-php
RUN a2enmod remoteip

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2/apache2.pid
ENV APACHE_SERVER_NAME localhost

ADD . /var/www/html
RUN rm -f /var/www/html/index.html

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
