<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Cat Almacens'=>array('index'),
	$model->keyAlmacenes=>array('view','id'=>$model->keyAlmacenes),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatAlmacen', 'url'=>array('index')),
	array('label'=>'Create CatAlmacen', 'url'=>array('create')),
	array('label'=>'View CatAlmacen', 'url'=>array('view', 'id'=>$model->keyAlmacenes)),
	array('label'=>'Manage CatAlmacen', 'url'=>array('admin')),
);
?>

<h1>Update CatAlmacen <?php echo $model->keyAlmacenes; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>