<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedores'=>array('admin'),
	$model->keyP,
);

$this->menu=array(
	array('label'=>'Crear Nuevo Proveedor', 'url'=>array('create')),
	array('label'=>'Actualizar Proveedor', 'url'=>array('update', 'id'=>$model->keyP)),
	array('label'=>'Borrar Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Proveedores', 'url'=>array('admin')),
);
?>

<h1>Ver Proveedor #<?php echo $model->keyP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyP',
		'id_proveedor',
		'razonSocial',
		'ciudad',
		'estado',
		'cp',
		'telefono',
		'telefono1',
		'rfc',
		'calle',
		'colonia',
		'usuario',
		'fecha',
		'hora',
		'status',
		'tipoPersona',
		'curp',
		'ctaContable',
		'copiaCedula',
		'copiaActa',
		'copiaHacienda',
		'comprobanteDomicilio',
		'retenciones',
		'tipoProveedor',
		'procedenciaProveedor',
		'entidad',
		'id_fiscal',
		'codigoPostal',
		'limite1',
		'limite2',
		'limite3',
		'limite4',
	),
)); ?>
