<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->keyP=>array('view','id'=>$model->keyP),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->keyP)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proveedor <?php echo $model->keyP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
