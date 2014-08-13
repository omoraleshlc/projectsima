<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Cat Tipo Procesadors'=>array('default/CatalogoEquipos'),
	$model->keyTP,
);

$this->menu=array(
	array('label'=>'List CatTipoProcesador', 'url'=>array('index')),
	array('label'=>'Create CatTipoProcesador', 'url'=>array('create')),
	array('label'=>'Update CatTipoProcesador', 'url'=>array('update', 'id'=>$model->keyTP)),
	array('label'=>'Delete CatTipoProcesador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTipoProcesador', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Procesador #<?php echo $model->keyTP; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTP',
		'descripcion',
	),
)); ?>
