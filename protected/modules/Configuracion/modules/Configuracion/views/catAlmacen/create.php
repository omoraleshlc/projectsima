<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Cat Almacens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatAlmacen', 'url'=>array('index')),
	array('label'=>'Manage CatAlmacen', 'url'=>array('admin')),
);
?>

<h1>Create CatAlmacen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>