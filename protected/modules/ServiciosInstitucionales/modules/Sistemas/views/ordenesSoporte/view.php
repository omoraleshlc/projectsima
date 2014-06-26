<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	$model->keySOP,
);

$this->menu=array(
	array('label'=>'List OrdenesSoporte', 'url'=>array('index')),
	array('label'=>'Create OrdenesSoporte', 'url'=>array('create')),
	array('label'=>'Update OrdenesSoporte', 'url'=>array('update', 'id'=>$model->keySOP)),
	array('label'=>'Delete OrdenesSoporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keySOP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>View OrdenesSoporte #<?php echo $model->keySOP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keySOP',
		'entidadSolicitud',
		'codigo',
		'almacen',
		'keyTS',
		'registro',
		'nombre',
		'descripcionSoporte',
		'descripcionAlmacen',
		'usuario',
		'fecha',
		'hora',
		'entidad',
		'solicitud',
		'descripcionTS',
		'status',
		'observaciones',
		'usuarioEjecutor',
		'fechaInicio',
		'fechaFinal',
		'almacenSoporte',
	),
)); ?>
