<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyOS,
);

$this->menu=array(
	array('label'=>'Crear Sistema Operativo', 'url'=>array('create')),
	array('label'=>'Actualizar Sistema Operativo', 'url'=>array('update', 'id'=>$model->keyOS)),
	array('label'=>'Borrar Sistema Operativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyOS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catpalogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Ver Sistema Operativo #<?php echo $model->keyOS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyOS',
		'descripcion',
	),
)); ?>
