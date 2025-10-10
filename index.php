<?php

?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeedom - Bienvenue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="header-content">
            <img src="img/Jeedom-Start-logo.svg" alt="Jeedom Start Logo" class="logo">
            <div class="header-controls">
                <span class="header-title">Guides de démarrage Jeedom</span>
                <!-- <button id="theme-switcher" aria-label="Toggle light/dark theme">🌙</button> -->
            </div>
        </div>
    </header>

    <main>
        <section class="welcome-section">
            <div class="content-wrapper">
                <p class="intro-text">Bienvenue dans l'univers de la domotique avec Jeedom</p>
                    <div class="card-grid-index">
                       <div class="card">
                        <div class="card-content">
                            <a href="bien-debuter.html" style="text-decoration: none;"> <h2>Avant de débuter sur Jeedom</h2></a>
                        </div>
                       
                    </div>
                </div>
                <h1>Choisissez votre Box</h1>
                <div class="card-grid-index">
                    <div class="card">
                        <div class="card-content">
                            <h2>Jeedom <br>Smart Z-Wave</h2>
                        </div>
                        <a href="box-smart.html">
                            <img src="img/jeedom-smart/pack-jeedom-smart-z-wave.png" alt="Jeedom Smart Z-Wave">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h2>Jeedom <br>Smart EnOcean</h2>
                        </div>
                        <a href="box-smart.html">
                            <img src="img/jeedom-smart/pack-jeedom-smart-z-wave.png" alt="Jeedom Smart EnOcean">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h2>Jeedom <br>Smart</h2>
                        </div>
                        <a href="box-smart-sans-antenne.html">
                            <img src="img/jeedom-smart/pack-jeedom-smart-z-wave-sans-antenne.png" alt="Jeedom Smart">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h2>Jeedom <br>Atlas</h2>
                        </div>
                        <a href="box-atlas.html">
                            <img src="img/jeedom-atlas/pack-jeedom-atlas.png" alt="Jeedom Atlas">
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h2>Jeedom <br>Luna</h2>
                        </div>
                        <a href="box-luna.html">
                            <img src="img/jeedom-luna/pack-jeedom-luna.png" alt="Jeedom Luna">
                        </a>
                    </div>
                </div>

            </div>
        </section>

        
    </main>

    <button id="back-to-top" title="Retour en haut">⬆️</button>

    <script src="script.js"></script>
</body>
</html>