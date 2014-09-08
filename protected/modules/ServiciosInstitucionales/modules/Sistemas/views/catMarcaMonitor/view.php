<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyMAM,
);

$this->menu=array(
	array('label'=>'Crear Marca de Monitor', 'url'=>array('create')),
	array('label'=>'Actualizar Marca de Monitor', 'url'=>array('update', 'id'=>$model->keyMAM)),
	array('label'=>'Borrar Marca de Monitor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMAM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Ver Marca de Monitor #<?php echo $model->keyMAM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMAM',
		'descripcion',
	),
)); ?>
