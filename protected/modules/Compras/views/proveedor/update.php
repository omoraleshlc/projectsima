<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('admin'),
	$model->keyP=>array('view','id'=>$model->keyP),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
	array('label'=>'Ver Proveedor', 'url'=>array('view', 'id'=>$model->keyP)),
	array('label'=>'Lista de Proveedores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Proveedor <?php echo $model->keyP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
