<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Entidades'=>array('admin'),
	$model->keyEntidades,
);

$this->menu=array(
	array('label'=>'Crear Entidad', 'url'=>array('create')),
	array('label'=>'Actualizar Entidad', 'url'=>array('update', 'id'=>$model->keyEntidades)),
	array('label'=>'Borrar Entidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyEntidades),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Entidades', 'url'=>array('admin')),
);
?>

<h1>View CatEntidad #<?php echo $model->keyEntidades; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyEntidades',
		'codigoEntidad',
		'descripcionEntidad',
		'status',
		'fechaApertura',
		'prefijoEfectivo',
		'prefijoCxC',
		'digitosFactura',
		'rutaRecibo',
		'rutaReciboPaquete',
		'statusExistencias',
		'direccion',
		'cp',
		'telefono',
		'url',
		'id_ccosto',
		'version',
	),
)); ?>
