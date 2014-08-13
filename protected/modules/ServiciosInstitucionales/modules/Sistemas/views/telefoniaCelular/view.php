<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('admin'),
	$model->keyCTC,
);

$this->menu=array(
	array('label'=>'Crear Equipo de TelefoniaCelular', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo de Telefonia Celular', 'url'=>array('update', 'id'=>$model->keyCTC)),
	array('label'=>'Borrar Equipo de Telefonia Celular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyCTC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Telefonia de Celular', 'url'=>array('admin')),
);
?>

<h1>Ver Equipo de Telefonía #<?php echo $model->keyCTC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyCTC',
		'codigo',
		'precioEquipo',
		'cantidadAutorizada',
		'costoRenta',
		'fechaContratacion',
		'plazoForzoso',
		'keySW',
		'modelo',
		'chip',
		'imei',
		'keyMA',
		'usuarioCelular',
		'descripcionUbicacion',
		'almacen',
		'codigoEntidad',
		'usuario',
		'fecha',
		'hora',
		'entidad',
		'ruta',
		'nTelefonico',
		'registro',
		'solicitud',
		'fechaInicial',
		'fechaFinal',
		'minutos',
		'red',
		'sms',
		'internet',
		'roaming',
		'plan',
		'moduloAdicional',
		'company',
	),
)); ?>
