<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyTE,
);

$this->menu=array(
	array('label'=>'Crear Tipo de Equipo', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Equipo', 'url'=>array('update', 'id'=>$model->keyTE)),
	array('label'=>'Borrar Tipo de Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Ver tipo de Equipo #<?php echo $model->keyTE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTE',
		'descripcion',
	),
)); ?>
