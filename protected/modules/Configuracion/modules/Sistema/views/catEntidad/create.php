<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Entidades'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Entidades', 'url'=>array('admin')),
);
?>

<h1>Crear Entidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
