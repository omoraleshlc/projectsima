<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */

if (isset($_GET['OrdenSoporteId']))
	$breadurl=array('OrdenesSoporte/view','id'=>$_GET['OrdenSoporteId'],'#'=>'observaciones-orden-soporte-grid' );
else
	$breadurl=array('index');

$this->breadcrumbs=array(
	'Observaciones'=>$breadurl,
	$model->keyS,
);

$this->menu=array(
	array('label'=>'Crear Observaciones de Orden de Soporte', 'url'=>array('create')),
	array('label'=>'Actualizar Observaciones de Orden de Soporte', 'url'=>array('update', 'id'=>$model->keyS)),
	array('label'=>'Borrar Observaciones de Orden de Soporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyS),'confirm'=>'¿Seguro que quiere borrar este elemento?')),
	array('label'=>'Lista de Observaciones de Orden de Soporte', 'url'=>array('admin')),
);
?>

<h1>Observaciones #<?php echo $model->keyS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'descripcion',
		'usuario',
		'fecha',
		'hora',
		'entidad',
	),
)); ?>
