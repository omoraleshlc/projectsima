<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Cat Sistema Operativos'=>array('index'),
	$model->keyOS,
);

$this->menu=array(
	array('label'=>'List CatSistemaOperativo', 'url'=>array('index')),
	array('label'=>'Create CatSistemaOperativo', 'url'=>array('create')),
	array('label'=>'Update CatSistemaOperativo', 'url'=>array('update', 'id'=>$model->keyOS)),
	array('label'=>'Delete CatSistemaOperativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyOS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatSistemaOperativo', 'url'=>array('admin')),
);
?>

<h1>View CatSistemaOperativo #<?php echo $model->keyOS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyOS',
		'descripcion',
	),
)); ?>
