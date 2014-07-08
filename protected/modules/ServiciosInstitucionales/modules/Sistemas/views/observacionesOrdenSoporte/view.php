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
	array('label'=>'List ObservacionesOrdenSoporte', 'url'=>array('index')),
	array('label'=>'Create ObservacionesOrdenSoporte', 'url'=>array('create')),
	array('label'=>'Update ObservacionesOrdenSoporte', 'url'=>array('update', 'id'=>$model->keyS)),
	array('label'=>'Delete ObservacionesOrdenSoporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ObservacionesOrdenSoporte', 'url'=>array('admin')),
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
