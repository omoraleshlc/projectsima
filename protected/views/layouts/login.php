<?php /* @var $this Controller */ ?>
<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--<link href="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/bootstrap/assets/css/bootstrap.css" rel="stylesheet"-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/localfixes.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<?php echo Yii::app()->bootstrap->init();?>
<body>

	<div class="container" id="page">
		<div class="row" style="margin-left: auto ; margin-right: auto ; width: 500px; padding: 50px 15px;">
		
			<div class="col-xs-6 col-md-offset-4" style="text-align: left;">
				<div style="width: 380px">

					<div id="imgLogoLogin">
						<!--img id="imLogo" border="0" name="imLogo" src="css/caduceus.jpg"-->
					</div>


					<div style="float: right; width: 250px; padding-top: 25px;">
						<h1><?php 	echo Yii::app()->name; ?></h1>

						<p>Sistema Integral Medico Administrativo</p>
					</div>
	
					<div style="clear:both">
						<!--img id="imLogo" border="0" name="imLogo" src="css/caduceus.jpg"-->
					</div>
				</div>


				<div class="form" style="-moz-border-radius: 15px; border-radius: 15px; border:1px solid silver; padding:10px 35px; width: 65%;">
					<?php echo $content; ?>
				</div>
		
			</div>
		
		</div>
		<div class="row">
			<div class="bs-docs-footer-links muted" id="footer">
				<ul>
					<li>Copyright &copy; <?php echo date('Y'); ?> by hospital La Carlota</li>
					<li>All Rights Reserved.</li>
					<li><?php echo Yii::powered(); ?></li>
				</ul>
			</div><!-- footer -->
		</div>
	</div><!-- page -->

</body>
</html>
