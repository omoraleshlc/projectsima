<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computo'=>array('index'),
	$model->keyIE,
);

$this->menu=array(
	array('label'=>'List EquipoComputo', 'url'=>array('index')),
	array('label'=>'Create EquipoComputo', 'url'=>array('create')),
	array('label'=>'Update EquipoComputo', 'url'=>array('update', 'id'=>$model->keyIE)),
	array('label'=>'Delete EquipoComputo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyIE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EquipoComputo', 'url'=>array('admin')),
);
?>

<h1>Ver Equipo de Computo #<?php echo $model->keyIE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyIE',
		'codigo',
		'registro',
		'departamento',
		'keyTE',
		'keyMA',
		'motherboard',
		'drives',
		'harddisk',
		'memoriaRam',
		'keyMAM',
		'descripcionUbicacion',
		'monitor',
		'usuario',
		'fecha',
		'hora',
		'entidad',
		'status',
		'solicitud',
		'descripcionEntidad',
		'descripcionAlmacen',
		'tipoProcesador',
		'velocidadProcesador',
		'keyP',
	),
)); ?>
