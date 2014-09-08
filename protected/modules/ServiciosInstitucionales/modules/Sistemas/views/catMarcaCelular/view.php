<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyMA,
);

$this->menu=array(
	array('label'=>'Crear Marca de Celular', 'url'=>array('create')),
	array('label'=>'Actualizar Marca de Celular', 'url'=>array('update', 'id'=>$model->keyMA)),
	array('label'=>'Borrar Marca de Celular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Ver Marca de Celular #<?php echo $model->keyMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMA',
		'descripcion',
	),
)); ?>
