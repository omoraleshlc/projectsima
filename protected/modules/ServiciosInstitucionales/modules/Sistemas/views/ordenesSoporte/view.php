<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes de Soporte'=>array('admin'),
	$model->keySOP,
);

$this->menu=array(
	array('label'=>'Crear Ordenes de Soporte', 'url'=>array('create')),
	array('label'=>'Actualizar Ordenes de Soporte', 'url'=>array('update', 'id'=>$model->keySOP)),
	array('label'=>'Borrar Ordenes de Soporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keySOP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Ordenes de Soporte', 'url'=>array('admin')),
);
?>

<h1>Ver Ordene de Soporte #<?php echo $model->keySOP; ?></h1>

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

<br/>
<br/>
<div>
	<?php
		$observaciones = new ObservacionesOrdenSoporte();
		$observaciones = $observaciones::model();
		$observaciones->keySOP=$model->keySOP;
		$this->renderPartial('/observacionesOrdenSoporte/adminList',array(
			'model'=>$observaciones,
		));
	?>
</div>
