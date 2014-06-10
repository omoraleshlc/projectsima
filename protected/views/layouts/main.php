<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<?php echo Yii::app()->bootstrap->init();?>
<body>

<div class="container" id="page">

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'type'=>'inverse',
	'brand' => 'SIMA V3',
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
                    array('label'=>'Salir', 'url'=>array('/site/logout')),
                )),
            	array('label'=>'Acceder', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            ),
        ),
	),
)); ?>


	<div class="navbar-header" id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
	
	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation" style="height: 100%">
        <?php $this->widget('bootstrap.widgets.TbMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('cruge/ui/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('cruge/ui/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Usuarios', 'url'=>array('/usuarios/admin')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				/*array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl),*/
				array('label'=>'cat equipo', 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoEquipos')),
				array('label'=>'cat tel', 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoTelefonia')),
				array('label'=>'equipo computo', 'url'=>Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/equipoComputo/admin')),
				
			),'htmlOptions'=>array('class'=>'nav navbar-nav'), 
		)); ?>
      <!--ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.getbootstrap.com" onclick="_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Expo']);">Expo</a></li>
        <li><a href="http://blog.getbootstrap.com" onclick="_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Blog']);">Blog</a></li>
      </ul-->
    </nav>

		
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by hospital La Carlota. All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
</body>
</html>
