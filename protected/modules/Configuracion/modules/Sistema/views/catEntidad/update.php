<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Entidades'=>array('admin'),
	$model->keyEntidades=>array('view','id'=>$model->keyEntidades),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Entidades', 'url'=>array('create')),
	array('label'=>'Ver Entindades', 'url'=>array('view', 'id'=>$model->keyEntidades)),
	array('label'=>'Lista de Entidades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Entidad <?php echo $model->keyEntidades; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
