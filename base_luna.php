<?php
header('content-type: text/html; charset=utf-8');
$type = $_GET['type'];
$locale = "fr_FR.UTF-8";
if (isSet($_GET["locale"])) {
	$locale = $_GET["locale"];
}

putenv("LC_MESSAGES=$locale");
setlocale(LC_MESSAGES, $locale);
bindtextdomain("base", "./locale");
textdomain("base");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jeedom - <?=_("Guide de Démarrage");?></title>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <script src="3rdparty/jquery/jquery.min.js"></script>
        <script src="3rdparty/bootstrap/bootstrap.min.js"></script>
        <script src="3rdparty/jquery.steps/jquery.steps.min.js"></script>
        <script src="3rdparty/ekko-lightbox/ekko-lightbox.min.js"></script>
        <link href="3rdparty/ekko-lightbox/ekko-lightbox.min.css" rel="stylesheet">
        <link href="css/flag-icon.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="3rdparty/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="3rdparty/jquery.steps/jquery.steps.css" rel="stylesheet">
        <link href="3rdparty/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script>
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		    event.preventDefault();
		    $(this).ekkoLightbox();
		});
        </script>
    </head>
    <body>
    	<div class="row">
    		<div class="col-md-1"></div>
    		<div class="col-md-3"><h2><a href="index.php?locale=fr_FR.UTF-8" class="btn btn-sm btn-info"><span class="fa fa-th-large"></span> Retour au menu</a></div>
  			<div class="col-md-1"><img alt="Jeedom" src="img/logo.png" style="width: 70px;"></div>
  			<div class="col-md-4"><h2><?=_("Guide de Démarrage");?></h2></div>
  			<div class="col-md-3"><h2>
  			<a href="base.php?locale=fr_FR.UTF-8&type=<?=$type;?>" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-fr"></span> Français</a> &nbsp; <a href="base_luna.php?locale=en_US.UTF-8&type=<?=$type;?>" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-gb"></span> English</a>
  			</h2></div>
    	</div>
    	<div class="row" align="center">
	    	<div class="col-xs-2"></div>
	    	<div class="col-md-12" align="center">
		        <div id="wizard">

		        	<h1><?=_("Déballage");?></h1>
				    <div>
				    	<h2><?=_("Contenu de la boite :");?></h2>
				    	<div class="row">
				    		<div class="col-md-3">
				    			<div class="thumbnail">
				    				<img alt="Luna" src="img/luna.png" style="width: 100px;">
				    				<div class="caption"><center>Jeedom Luna</center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-3">
				    			<div class="thumbnail">
				    				<img alt="sd-card" src="img/support-mural.jpg" style="width: 100px;">
				    				<div class="caption"><center><?=_("Support Mural");?></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-3">
				    			<div class="thumbnail">
				    				<img alt="power-supply" src="img/power-supply_luna.jpg"  style="width: 100px;">
				    				<div class="caption"><center><?=_("Alimentation");?></center></div>
				    			</div>
				    		</div>
								<div class="col-md-3">
									<div class="thumbnail">
										<img alt="power-supply" src="img/ethernet-cable-luna.jpg"  style="width: 100px;">
										<div class="caption"><center><?=_("Cable Ethernet");?></center></div>
									</div>
								</div>
				    	</div>
				    	<h2><?=_("Ce dont vous avez besoin :");?></h2>
				    	<div class="row">
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="router" src="img/router.jpg"  style="width: 100px;">
				    				<div class="caption"><center><?=_("Routeur / box internet");?></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="internet" src="img/internet.jpg"  style="width: 100px;">
				    				<div class="caption"><center><?=_("Connexion Internet");?></center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>

				    <h1><?=_("Branchements");?></h1>
				    <div>
				    	<div class="row">
				    		<div class="col-md-6">
				    			<h2><?=_("Etape 1 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/connect-router.jpg"><img alt="router" src="img/connect-router.jpg"  style="height:181px; width: 250px;"></a>
				    				<div class="caption"><center><?=_("Connectez le cable Ethernet à votre routeur");?></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-6">
				    			<h2><?=_("Etape 2 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/connect-power-ethernet-luna.jpg"><img alt="power" src="img/connect-power-ethernet-luna.jpg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("Connectez le câble réseau puis l'alimentation à votre box Jeedom");?></center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>

				    <h1><?=_("Inscription au Market");?></h1>
				    <div>
				    	<div class="row">
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 1 :");?></h2>
				    			<div class="thumbnail">
				    				<a href="https://market.jeedom.com" target="_blank"><img alt="market-logo" src="img/logo-MARKET.svg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("Rendez-vous sur le Market Jeedom afin d'enregistrer votre Service Pack.");?><br><?=_("Vous avez du recevoir votre code Service Pack par email.");?> <br><a class="btn btn-primary btn-xs" href="https://market.jeedom.com" target="_blank"><i class="fa fa-share-square-o"></i>&nbsp;<?=_("Aller sur le Market");?></a></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 2 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/connect-market.jpg"><img alt="connect" src="img/connect-market.jpg"  style="width: 250px;height: 117px;"></a>
				    				<div class="caption"><center><?=_("Si vous disposez déjà d'un compte sur le Market, cliquez sur <span class='label label-info'>Se Connecter</span>. Sinon cliquez sur <span class='label label-info'>S'enregistrer</span>.");?><br><br>&nbsp;</center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 3 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/service-pack.jpg"><img alt="service_pack" src="img/service-pack.jpg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("Après votre connexion, cliquez sur votre <span class='label label-info'>pseudo</span> puis sur <span class='label label-info'>Profil</span>.");?><br> <?=_("Cliquez ensuite sur l'onglet <span class='label label-info'>Mes Services</span> et inscrire ici le code Service Pack reçu par Email dans la partie <span class='label label-info'>J'ai un Code</span>.");?><br>&nbsp;</center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>

				    <h1><?=_("Recherche de la box sur le réseau");?></h1>
				    <div>
							 <div class="row">
								 <div class="col-md-12">
									 Vous pouvez accéder à votre Jeedom directement à l'adresse : http://jeedomluna.local <br /><center>
										  <a class="btn btn-primary btn-xs" href="http://jeedomluna.local" target="_blank"><i class="fa fa-share-square-o"></i>&nbsp;<?=_("Aller sur http://jeedomluna.local");?></a>
									 </center>
								 </div>
								 <br />
								 Si cela ne fonctionne pas, vous pouvez suivre les étapes suivantes :
							 </div>
					    <div class="row">
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 1 :");?></h2>
				    			<div class="thumbnail">
				    				<a href="https://market.jeedom.com" target="_blank"><img alt="market-logo" src="img/logo-MARKET.svg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("Connectez-vous sur le Market Jeedom.");?><br> <br><a class="btn btn-primary btn-xs" href="https://market.jeedom.com" target="_blank"><i class="fa fa-share-square-o"></i>&nbsp;<?=_("Aller sur le Market");?></a></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 2 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/search-market.jpg"><img alt="search-market" src="img/search-market.jpg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("Cliquez sur <span class='label label-info'>Jeedom sur mon réseau</span>.");?><br>&nbsp;</center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?=_("Etape 3 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/find-market.jpg"><img alt="result-finder" src="img/find-market.jpg"  style="width: 250px;"></a>
				    				<div class="caption"><center><?=_("La liste des Jeedoms apparait, cliquez sur l'URL afin d'ouvrir l'interface.");?><br>&nbsp;</center></div>
				    			</div>
				    		</div>
				    	</div>
				 	</div>

				    <h1><?=_("Connexion à la box Jeedom");?></h1>
					<div>
				    	<div class="row">
				    		<div class="col-md-4">
				    			<h2><?=_("Connexion :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/connect-jeedom.jpg"><img alt="connect-jeedom" src="img/connect-jeedom.jpg"  style="width: 250px;height: 170px;"></a>
				    				<div class="caption"><center><?=_("Lors de la 1ère connexion les codes d'accès par défaut sont :");?><br> Login: <b>admin</b> <br> <?=_("Mot de passe :");?> <b>admin</b><br><br>&nbsp;</center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
					<?php
if ($_GET['type'] == 'base') {
	?>
					<h1><?=_("Premiers pas avec la box Jeedom");?></h1>
		    		<div>
					<center><h2><?=_("Félicitation !");?></h2></center>
				    	<div class="row">
				    		<div class="col-md-3"></div>
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="done" src="img/check.jpg"  style="width: 300px;">
				    				<div class="caption"><center><?=_("Votre Box Jeedom est désormais totalement opérationnelle.");?><br><br><?=_("Afin de profiter des dernières nouveautés, nous vous conseillons de mettre à jour votre Jeedom.");?><br><?=_("Nous vous invitons à consulter<br> ");?> <a href="https://www.jeedom.com/doc/" target="_blank" class="btn btn-primary" role="button"><i class="fa fa-book"></i> <?=_("la documentation complète");?> </a> <br><?=_("notamment la catégorie Premiers pas, afin d'optimiser l'utilisation de votre box Jeedom.");?></center></div>
				    			</div>
				    		</div>
				    	</div>
					</div>
					<?php } else if ($_GET['type'] == 'rfxcom') {
	?>
					<h1><?=_("Configuration du RfxCom");?></h1>
		    		<div>
					<center><h2>Félicitation !</h2></center>
				    	<div class="row">
				    		<div class="col-md-3"></div>
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="router" src="img/check.jpg"  style="width: 300px;">
				    				<div class="caption"><center><?=_("La configuration de base de votre Box Jeedom est désormais effectuée.");?><br><br><?=_("Nous vous invitons à consulter ");?> <a href="rfxcom.php?locale=<?=$locale;?>&type=<?=$type;?>" class="btn btn-primary" role="button"><i class="fa fa-book"></i> <?=_("Le guide de configuration RfxCom");?></a></center></div>
				    			</div>
				    		</div>
				    	</div>
					</div>
					<?php } else if ($_GET['type'] == 'enocean' || $_GET['type'] == 'enocean_rfxcom') {
	?>
					<h1><?=_("Configuration Enocean");?></h1>
		    		<div>
					<center><h2>Félicitation !</h2></center>
				    	<div class="row">
				    		<div class="col-md-3"></div>
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="router" src="img/check.jpg"  style="width: 300px;">
				    				<div class="caption"><center><?=_("La configuration de base de votre Box Jeedom est désormais effectuée.");?><br><br><?=_("Nous vous invitons à consulter ");?> <a href="enocean.php?locale=<?=$locale;?>&type=<?=$type;?>" class="btn btn-primary" role="button"><i class="fa fa-book"></i> <?=_("Le guide de configuration Enocean");?></a></center></div>
				    			</div>
				    		</div>
				    	</div>
					</div>
					<?php }
?>
		        </div>
	        </div>
        </div>
        <script>
            $("#wizard").steps({
                headerTag: "h1",
                bodyTag: "div",
                transitionEffect: "slideLeft",
                labels: {
			        cancel: '<?=_("Annuler");?>',
			        current: '<?=_("Etape en cours");?>',
			        pagination: '<?=_("Pagination");?>',
			        finish: '<?=_("Fin");?>',
			        next: '<?=_("Suivant");?>',
			        previous: '<?=_("Précédent");?>',
			        loading: '<?=_("Chargement");?>'
			    }
            });
        </script>
    </body>
</html>
