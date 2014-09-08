<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyRSA=>array('view','id'=>$model->keyRSA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Soporte', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Soporte', 'url'=>array('view', 'id'=>$model->keyRSA)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Tipo de Soporte <?php echo $model->keyRSA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
