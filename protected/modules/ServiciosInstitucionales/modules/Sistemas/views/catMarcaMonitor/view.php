<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Cat Marca Monitors'=>array('default/CatalogoEquipos'),
	$model->keyMAM,
);

$this->menu=array(
	array('label'=>'List CatMarcaMonitor', 'url'=>array('index')),
	array('label'=>'Create CatMarcaMonitor', 'url'=>array('create')),
	array('label'=>'Update CatMarcaMonitor', 'url'=>array('update', 'id'=>$model->keyMAM)),
	array('label'=>'Delete CatMarcaMonitor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMAM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMarcaMonitor', 'url'=>array('admin')),
);
?>

<h1>View CatMarcaMonitor #<?php echo $model->keyMAM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMAM',
		'descripcion',
	),
)); ?>
