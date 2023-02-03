<?php
header( 'content-type: text/html; charset=utf-8' );
$type=$_GET['type'];
$locale = "fr_FR.UTF-8";
if (isSet($_GET["locale"])) $locale = $_GET["locale"];
putenv("LC_MESSAGES=$locale");
setlocale(LC_MESSAGES, $locale);
bindtextdomain("enocean", "./locale");
textdomain("enocean");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jeedom - <?= _("Guide Enocean");?></title>
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
  			<div class="col-md-4"><h2><?= _("Guide Enocean");?></h2></div>
  			<div class="col-md-3"><h2>
          <!--
  			<a href="enocean.php?locale=fr_FR.UTF-8&type=<?= $type;?>" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-fr"></span> Français</a> &nbsp; <a href="enocean.php?locale=en_US.UTF-8&type=<?= $type;?>" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-gb"></span> English</a>
        -->
        </h2></div>
    	</div>
    	<div class="row" align="center">
	    	<div class="col-xs-2"></div>
	    	<div class="col-md-12" align="center">
		        <div id="wizard">

		        	<h1><?= _("Désinstallation du plugin Z-Wave");?></h1>
				    <div>
				    	<h4><?= _("Par défaut, les boxs Jeedom sont configurées Z-Wave. Si vous n'utilisez pas le protocole Z-Wave, vous devez supprimer le plugin :");?></h4>
				    	<div class="row">
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 1 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/menu-plugins.jpg"><img alt="menu-plugins" src="img/menu-plugins.jpg" style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Cliquez sur le menu <span class='label label-info'>Général</span> puis <span class='label label-info'>Plugins</span>.");?></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 2 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/plugin-zwave.jpg"><img alt="plugin-zwave" src="img/plugin-zwave.jpg"  style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Cliquez sur l'icone Z-Wave.");?></center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 3 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/delete-zwave.jpg"><img alt="delete-zwave" src="img/delete-zwave.jpg"  style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Cliquez sur le bouton <span class='label label-info'>Supprimer</span.");?></center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>

				    <h1><?= _("Installation du plugin Enocean");?></h1>
				    <div>
				    	<div class="row">
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 1 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/button-market.jpg"><img alt="router" src="img/button-market.jpg"  style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Cliquez sur le bouton <span class='label label-info'>Market</span>.");?><br>&nbsp; </center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 2 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/plugin-enocean.jpg"><img alt="ethernet" src="img/plugin-enocean.jpg"  style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Recherchez le plugin Enocean puis cliquez dessus.");?> <br>&nbsp; </center></div>
				    			</div>
				    		</div>
				    		<div class="col-md-4">
				    			<h2><?= _("Etape 3 :");?></h2>
				    			<div class="thumbnail">
				    				<a data-toggle="lightbox" href="img/install-enocean.jpg"><img alt="power" src="img/install-enocean.jpg"  style="width: 200px;"></a>
				    				<div class="caption"><center><?= _("Cliquez ensuite sur <span class='label label-info'>Installer Stable</span> afin d'installer le plugin Enocean.");?></center></div>
				    			</div>
				    		</div>
				    	</div>
				    </div>


					<?php
					if($_GET['type']=='enocean'){
					?>
					<h1><?= _("Premiers pas avec la box Jeedom");?></h1>
		    		<div>
					<center><h2><?= _("Félicitations !");?></h2></center>
				    	<div class="row">
				    		<div class="col-md-3"></div>
				    		<div class="col-md-6">
				    			<div class="thumbnail flexThumb">
				    				<img alt="done" src="img/check.jpg"  style="width: 300px;">
				    				<div class="caption"><center><?=_("Votre Box Jeedom est désormais totalement opérationnelle.");?><br><br><?=_("Afin de profiter des dernières nouveautés, nous vous conseillons de mettre à jour votre Jeedom.");?><br><?=_("Nous vous invitons à consulter<br> ");?> <a href="https://www.jeedom.com/doc/" target="_blank" class="btn btn-primary" role="button"><i class="fa fa-book"></i> <?=_("la documentation complète");?> </a> <br><?=_("notamment la catégorie Premiers pas, afin d'optimiser l'utilisation de votre box Jeedom.");?></center></div>
				    			</div>
				    		</div>
				    	</div>
					</div>
					<?php }else if($_GET['type']=='enocean_rfxcom'){
					?>
					<h1><?= _("Configuration du RfxCom");?></h1>
		    		<div>
					<center><h2>Félicitations !</h2></center>
				    	<div class="row">
				    		<div class="col-md-3"></div>
				    		<div class="col-md-6">
				    			<div class="thumbnail">
				    				<img alt="router" src="img/check.jpg"  style="width: 300px;">
				    				<div class="caption"><center><?= _("La configuration de votre équipement Enocean est désormais effectuée.");?><br><br><?= _("Nous vous invitons à consulter ");?> <a href="rfxcom.php?locale=<?= $locale;?>" class="btn btn-primary" role="button"><i class="fa fa-book"></i> <?= _("Le guide de configuration RfxCom");?></a></center></div>
				    			</div>
				    		</div>
				    	</div>
					</div>
					<?php } ?>
		        </div>
	        </div>
        </div>
		<style>
		@media only screen and (max-width : 600px) {
				.testMedia{
				display:flex;
				flex-direction:column;
				}
		}

   .divThumb{
	 width: 20%;
	 min-height:20%;
	}

	.divThumb4{
	 width: 20%;
	 min-height:20%;
	}



	.flexThumb{
		width: 100%;
		height:100%;
		border-radius:20px;
	}

	.flexThumbColumn{
		display:flex;
		flex-direction:column;
		justify-content:center;
		width:80%;
		height:100%;
		border-radius:20px;
	}
</style>
        <script>
            $("#wizard").steps({
                headerTag: "h1",
                bodyTag: "div",
                transitionEffect: "slideLeft",
                labels: {
			        cancel: '<?= _("Annuler");?>',
			        current: '<?= _("Etape en cours");?>',
			        pagination: '<?= _("Pagination");?>',
			        finish: '<?= _("Fin");?>',
			        next: '<?= _("Suivant");?>',
			        previous: '<?= _("Précédent");?>',
			        loading: '<?= _("Chargement");?>'
			    }
            });
        </script>
    </body>
</html>
