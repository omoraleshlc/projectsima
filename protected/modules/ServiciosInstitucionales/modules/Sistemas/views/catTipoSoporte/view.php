<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Cat Tipo Soportes'=>array('default/CatalogoEquipos'),
	$model->keyTS,
);

$this->menu=array(
	array('label'=>'List CatTipoSoporte', 'url'=>array('index')),
	array('label'=>'Create CatTipoSoporte', 'url'=>array('create')),
	array('label'=>'Update CatTipoSoporte', 'url'=>array('update', 'id'=>$model->keyTS)),
	array('label'=>'Delete CatTipoSoporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTipoSoporte', 'url'=>array('admin')),
);
?>

<h1>View CatTipoSoporte #<?php echo $model->keyTS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTS',
		'descripcion',
	),
)); ?>
