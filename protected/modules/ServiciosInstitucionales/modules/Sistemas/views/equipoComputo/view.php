<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computo'=>array('admin'),
	$model->keyIE,
);

$this->menu=array(
	array('label'=>'Crear Equipo de Computo', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo de Computo', 'url'=>array('update', 'id'=>$model->keyIE)),
	array('label'=>'Borrar Equipo de Computo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyIE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Equipo de Computo', 'url'=>array('admin')),
);
?>

<h1>Ver Equipo de Cómputo #<?php echo $model->keyIE; ?></h1>

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
