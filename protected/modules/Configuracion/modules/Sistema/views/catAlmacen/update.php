<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('admin'),
	$model->keyAlmacenes=>array('view','id'=>$model->keyAlmacenes),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Almacén', 'url'=>array('create')),
	array('label'=>'Ver Almacén', 'url'=>array('view', 'id'=>$model->keyAlmacenes)),
	array('label'=>'Lista de Almacenes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Almacén <?php echo $model->keyAlmacenes; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
