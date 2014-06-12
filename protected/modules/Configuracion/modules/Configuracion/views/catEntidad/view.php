<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Cat Entidads'=>array('index'),
	$model->keyEntidades,
);

$this->menu=array(
	array('label'=>'List CatEntidad', 'url'=>array('index')),
	array('label'=>'Create CatEntidad', 'url'=>array('create')),
	array('label'=>'Update CatEntidad', 'url'=>array('update', 'id'=>$model->keyEntidades)),
	array('label'=>'Delete CatEntidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyEntidades),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatEntidad', 'url'=>array('admin')),
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
