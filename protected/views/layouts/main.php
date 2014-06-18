<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/localfixes.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<?php echo Yii::app()->bootstrap->init();?>
<body>

<div class="wrapper" id="page">

	<?php $this->widget('bootstrap.widgets.TbNavbar',array(
		'type'=>'inverse',
		'fixed'=>'false',
		'brand' => 'SIMA V3',
		'brandUrl' =>Yii::app()->createUrl('site/index'),
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'items'=>array(
				
				
					array('label'=>'Sistemas itemtemp', 'url'=>'#',
		             	'visible'=>!Yii::app()->user->isGuest,
		             	'items'=>array(
						      array('label'=>'Catálogo de equipos',
									'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoEquipos')),
		                 array('label'=>'Catálogo de telefonía',
		                 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoTelefonia')),
		                 array('label'=>'Inventario de Equipo',
		                 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/equipoComputo/admin')),
		                 array('label'=>'Inventario de Telefonía',
		                 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/telefoniaCelular/admin')),
		                 array('label'=>'Impresión de etiquetas',
		                 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/printLabels')),
		             )),//end dropdown
				
				
					array('label'=>'Configuracion', 'url'=>'#',
		             	'visible'=>!Yii::app()->user->isGuest,
		             	'items'=>array(
						      array('label'=>'Usuarios'
									, 'url'=>Yii::app()->user->ui->userManagementAdminUrl),
		                 array('label'=>'Sistema', 'url'=>'#'),
		             )),//end dropdown
				
				
				),
			),
			array(
		         'class'=>'bootstrap.widgets.TbMenu',
		         'htmlOptions'=>array('class'=>'pull-right'),
		         'items'=>array(
		             array('label'=>'Usuario: '.Yii::app()->user->name, 'url'=>'#',
		             	'visible'=>!Yii::app()->user->isGuest,
		             	'items'=>array(
		                 array('label'=>'Mis permisos', 'url'=>'#'),
		                 array('label'=>'Mi cuenta', 'url'=>'#'),
		                 '---',
		                 array('label'=>'Salir', 'url'=>Yii::app()->createUrl('cruge/ui/logout')),
		             )),
		         	array('label'=>'Acceder', 'url'=>Yii::app()->createUrl('cruge/ui/login'), 'visible'=>Yii::app()->user->isGuest),
		         ),
		     ),
		),
	)); ?>

	<div class="container">
		<!--div class="navbar-header" id="header">
			<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		</div><!-- header -->
	
		
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>

	</div>
	
	<div id="footer" class="footer">
		Copyright &copy; <?php echo date('Y'); ?> by hospital La Carlota. All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
</body>
</html>
