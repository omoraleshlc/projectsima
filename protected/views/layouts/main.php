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

        <?php echo Yii::app()->bootstrap->init(); ?>
        <body>

                <style>
                        .mostrar{
                                display: block !important;
                        }
                </style>

                <?php
                Yii::app()->clientScript->registerScript('menu', "
	$('.sistemasitem').click(function(){
		if ($('.btn-navbar').css('display') == 'block'){
			$('#boat').parent().parent().addClass('mostrar');
			$('#boat').parent().parent().addClass('mostrar');
			$('#warmachine').parent().parent().addClass('mostrar');
		}
	});
        
        $('.configitem').click(function(){
		if ($('.btn-navbar').css('display') == 'block'){
			$('#boatc').parent().parent().addClass('mostrar');
			$('#boatc').parent().parent().addClass('mostrar');
			$('#warmachinec').parent().parent().addClass('mostrar');
		}
	});
        
        $('.configiitem').click(function(){
		if ($('.btn-navbar').css('display') == 'block'){
			$('#boatci').parent().parent().addClass('mostrar');
			$('#boatci').parent().parent().addClass('mostrar');
			$('#warmachineci').parent().parent().addClass('mostrar');
		}
	});

");
                ?>
                <div class="wrapper" id="page">

<?php
$this->widget('bootstrap.widgets.TbNavbar', array(
    'type' => 'inverse',
    'fixed' => 'false',
    'brand' => 'SIMA V3',
    'brandUrl' => Yii::app()->createUrl('site/index'),
    'collapse' => true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                array('label' => 'Contabilidad', 'url' => '#',
                    'visible' => !Yii::app()->user->isGuest,
                    'items' => array(
                        array('label' => 'Proveedores',
                            'url' => Yii::app()->createUrl('Compras/proveedor/admin')),
                    )), //end dropdown
                array('label' => 'Departamentos', 'url' => '#',
                    'visible' => !Yii::app()->user->isGuest,
                    'items' => array(
                        array('label' => 'Sistemas', 'url' => '#',
                            'visible' => !Yii::app()->user->isGuest and (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver') or Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionBasica')),
                            'linkOptions' => array('class' => 'sistemasitem', 'id' => 'boat'),
                            'items' => array(
                                array('label' => 'Catálogo de equipos',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoEquipos'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver')),
                                    'linkOptions' => array('id' => 'warmachine'),
                                ),
                                array('label' => 'Catálogo de telefonía',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoTelefonia'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver')),
                                ),
                                array('label' => 'Catálogo de soporte',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/CatalogoSoporte'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionBasica')),
                                ),
                                array('label' => 'Inventario de equipos',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/equipoComputo/admin'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver')),
                                ),
                                array('label' => 'Inventario de telefonía',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/telefoniaCelular/admin'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver')),
                                ),
                                array('label' => 'Impresión de etiquetas',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/default/printLabels'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_sistemasCatalogos_ver')),
                                ),
                                array('label' => 'Escaneo de etiquetas',
                                    'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/ordenesSoporte/scan'),
                                    'visible' => (Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionBasica')),
                                ),
                            ),
                        ),
                        array('label' => 'Soporte',
                            'url' => Yii::app()->createUrl('ServiciosInstitucionales/Sistemas/OrdenesSoporte/admin&tab=Pendientes'),
                            'visible' => (Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionBasica')),
                        ),
                    )
                ), //end dropdown
                array('label' => 'Configuracion', 'url' => '#',
                    'visible' => (Yii::app()->user->isSuperAdmin or Yii::app()->user->checkAccess('sysadmin')),
                    'items' => array(
                        array('label' => 'Usuarios', 'url' => '#',
                            'visible' => (Yii::app()->user->isSuperAdmin or Yii::app()->user->checkAccess('sysadmin')),
                            'linkOptions' => array('class' => 'configitem', 'id' => 'boatc'),
                            'items' => array(
                                array('label' => 'Usuarios',
                                    'url' => Yii::app()->user->ui->userManagementAdminUrl,
                                    'linkOptions' => array('id' => 'warmachinec'),),
                                array('label' => 'Usuarios V2',
                                    'url' => Yii::app()->createUrl('Configuracion/Usuarios/UsuariosSima/admin')),
                            )),
                        array('label' => 'Sistema', 'url' => '#',
                            'visible' => (Yii::app()->user->isSuperAdmin or Yii::app()->user->checkAccess('sysadmin')),
                            'linkOptions' => array('class' => 'configiitem', 'id' => 'boatci'),
                            'items' => array(
                                array('label' => 'Almacenes',
                                    'url' => Yii::app()->createUrl('Configuracion/Sistema/CatAlmacen/admin'),
                                    'linkOptions' => array('id' => 'warmachineci'),),
                                array('label' => 'Entidades',
                                    'url' => Yii::app()->createUrl('Configuracion/Sistema/CatEntidad/admin')),
                            )),
                    )), //end dropdown
            ),
        ),
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => 'Usuario: ' . Yii::app()->user->name, 'url' => '#',
                    'visible' => !Yii::app()->user->isGuest,
                    'items' => array(
                        array('label' => 'Mis permisos', 'url' => '#'),
                        array('label' => 'Mi cuenta', 'url' => '#'),
                        '---',
                        array('label' => 'Salir', 'url' => Yii::app()->createUrl('cruge/ui/logout')),
                    )),
                array('label' => 'Acceder', 'url' => Yii::app()->createUrl('cruge/ui/login'), 'visible' => Yii::app()->user->isGuest),
            ),
        ),
    ),
));
?>

                        <div class="container">
                                <!--div class="navbar-header" id="header">
                                        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
                                </div><!-- header -->


                        <?php if (isset($this->breadcrumbs)): ?>
                                <?php
                                $this->widget('zii.widgets.CBreadcrumbs', array(
                                    'links' => $this->breadcrumbs,
                                ));
                                ?><!-- breadcrumbs -->
<?php endif ?>

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
