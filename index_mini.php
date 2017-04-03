<?php
header('content-type: text/html; charset=utf-8');

$locale = "fr_FR.UTF-8";
if (isSet($_GET["locale"])) {
	$locale = $_GET["locale"];
}

putenv("LC_MESSAGES=$locale");
setlocale(LC_MESSAGES, $locale);
bindtextdomain("index", "./locale");
textdomain("index");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jeedom - <?=_("Guides de Démarrage");?></title>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <script src="3rdparty/jquery/jquery.min.js"></script>
        <script src="3rdparty/bootstrap/bootstrap.min.js"></script>
        <script src="3rdparty/jquery.steps/jquery.steps.min.js"></script>
        <link href="css/flag-icon.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="3rdparty/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="3rdparty/jquery.steps/jquery.steps.css" rel="stylesheet">
        <link href="3rdparty/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    	<div class="row">
    		<div class="col-md-4"><h2>
    			&nbsp; &nbsp; <a href="index.php" class="btn btn-sm btn-info"> Guide de démarrage Smart</a> 
    		</h2></div>
  			<div class="col-md-1"><img alt="Jeedom" src="img/logo.png" style="width: 70px;"></div>
  			<div class="col-md-4"><h2><?=_("Guides de Démarrage");?></h2></div>
  			<div class="col-md-3"><h2>
  			<a href="index_mini.php?locale=fr_FR.UTF-8" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-fr"></span> Français</a> &nbsp; <a href="index_mini.php?locale=en_US.UTF-8" class="btn btn-sm btn-info"><span class="flag-icon flag-icon-gb"></span> English</a>
  			</h2></div>
    	</div>
    	<div class="row" style="background: #96c927;">
    	<h2><center><span style="color: white;"><?=_("Quel pack possédez-vous ?");?></span></center></h2>
    	</div>
    	<div class="row" style="background: #96c927;">
	    	<br><br>
	    	<div class="col-md-1"></div>
	    	<div class="col-md-5">
    			<div class="thumbnail">
    				<img alt="mini+" src="img/pack-zwave.jpg" style="width: 200px;">
    				<div class="caption"><center><b>Pack Jeedom Mini+ Z-Wave</b><br><a href="base_mini.php?locale=<?php echo $locale; ?>&type=base" class="btn btn-primary"><?=_("Accéder au guide");?></a></center></div>
    			</div>
    		</div>
    		<div class="col-md-5">
    			<div class="thumbnail">
    				<img alt="sd-card" src="img/pack-zwave-rfxcom.jpg" style="width: 200px;">
    				<div class="caption"><center><b>Pack Jeedom Mini+ Z-Wave + Rfxcom</b><br><a href="base_mini.php?locale=<?php echo $locale; ?>&type=rfxcom" class="btn btn-primary"><?=_("Accéder au guide");?></a></center></div>
    			</div>
    		</div>
    		<div class="col-md-1"></div>
    	</div><div class="row" style="background: #96c927;">
    		<div class="col-md-1"></div>
    		<div class="col-md-5">
    			<div class="thumbnail">
    				<img alt="power-supply" src="img/pack-enocean.jpg"  style="width: 200px;">
    				<div class="caption"><center><b>Pack Jeedom Mini+ Enocean</b><br><a href="base_mini.php?locale=<?php echo $locale; ?>&type=enocean" class="btn btn-primary"><?=_("Accéder au guide");?></a></center></div>
    			</div>
    		</div>
    		<div class="col-md-5">
    			<div class="thumbnail">
    				<img alt="power-supply" src="img/pack-enocean-rfxcom.jpg"  style="width: 200px;">
    				<div class="caption"><center><b>Pack Jeedom Mini+ Enocean + Rfxcom</b><br><a href="base_mini.php?locale=<?php echo $locale; ?>&type=enocean_rfxcom" class="btn btn-primary"><?=_("Accéder au guide");?></a></center></div>
    			</div>
    		</div>
    		<div class="col-md-1"></div>
	    </div>
	</body>
