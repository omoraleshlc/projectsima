<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Cat Entidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatEntidad', 'url'=>array('index')),
	array('label'=>'Manage CatEntidad', 'url'=>array('admin')),
);
?>

<h1>Create CatEntidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>