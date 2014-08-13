<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyTP,
);

$this->menu=array(
	array('label'=>'Crear Tipo de Procesador', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Procesador', 'url'=>array('update', 'id'=>$model->keyTP)),
	array('label'=>'Borrar Tipo de Procesador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Ver Tipo de Procesador #<?php echo $model->keyTP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTP',
		'descripcion',
	),
)); ?>
