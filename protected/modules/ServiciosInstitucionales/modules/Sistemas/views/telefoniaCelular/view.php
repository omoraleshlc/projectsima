<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('index'),
	$model->keyCTC,
);

$this->menu=array(
	array('label'=>'List TelefoniaCelular', 'url'=>array('index')),
	array('label'=>'Create TelefoniaCelular', 'url'=>array('create')),
	array('label'=>'Update TelefoniaCelular', 'url'=>array('update', 'id'=>$model->keyCTC)),
	array('label'=>'Delete TelefoniaCelular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyCTC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TelefoniaCelular', 'url'=>array('admin')),
);
?>

<h1>Ver Equipo de Telefonía #<?php echo $model->keyCTC; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyCTC',
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
