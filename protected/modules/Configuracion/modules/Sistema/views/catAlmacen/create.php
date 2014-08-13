<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Almacenes', 'url'=>array('admin')),
);
?>

<h1>Create CatAlmacen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
