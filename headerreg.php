<?
require_once "model/start.php";
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ППОС ЛГТУ</title>

        <link href="<?=auto_version('/css/styles.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="<?=auto_version('/css/jquery.mCustomScrollbar.css');?>" />
        <link rel="shortcut icon" type="img/x-icon" href="/favicon.ico">
    </head>
    <body style="border:1px;">
        <script type="text/javascript" src="<?=auto_version('/js/jquery-2.2.4.js');?>"></script> 
        <script type="text/javascript" src="<?=auto_version('/js/help.js');?>"></script> 
        <script src="<?=auto_version('/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
        <script src="<?=auto_version('/js/js-webshim/minified/polyfiller.js');?>"></script>
        <script>
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
            $.webshims.formcfg = {
                en: {
                    dFormat: '-',
                    dateSigns: '-',
                    patterns: {
                        d: "dd-mm-yy"
                    }
                }
            };
        </script>
	<header id="masthead" class="site-header navbar-fixed-top">
		<div class="container-fluid">
			<div class="row" style="max-width:1024px;margin:auto; height: 63px">
				<div class="logo navbar-brand">
					<img src="/images/header-logo.png" style="width:60px;">
				</div><!-- end logo -->
				<nav id="primary-navigation" class="site-navigation" role="navigation" style="height:1px;">
					<ul class="menu">
					  <li><a onclick="window.history.back();" style="cursor: pointer;">Вернуться</a></li>
					</ul>
				</nav><!-- primary-navigation -->
			</div><!-- end row -->
		</div><!-- end container-fluid -->
	</header><!-- end #masthead -->
	<section class="home-service">
		<div class="container">
			<div class="row">