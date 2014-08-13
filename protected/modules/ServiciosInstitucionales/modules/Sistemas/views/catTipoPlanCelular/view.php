<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyTS,
);

$this->menu=array(
	array('label'=>'Crear Tipo de Plan de Celular', 'url'=>array('create')),
	array('label'=>'Actualziar Tipo de Plan de Celular', 'url'=>array('update', 'id'=>$model->keyTS)),
	array('label'=>'Borrar Tipo de Plan de Celular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Ver Tipo de Plan de Celular #<?php echo $model->keyTS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTS',
		'descripcion',
	),
)); ?>
