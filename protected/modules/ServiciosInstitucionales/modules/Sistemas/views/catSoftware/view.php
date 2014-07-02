<?php
/* @var $this CatSoftwareController */
/* @var $model CatSoftware */

$this->breadcrumbs=array(
	'Cat Softwares'=>array('default/CatalogoEquipos'),
	$model->keySW,
);

$this->menu=array(
	array('label'=>'List CatSoftware', 'url'=>array('index')),
	array('label'=>'Create CatSoftware', 'url'=>array('create')),
	array('label'=>'Update CatSoftware', 'url'=>array('update', 'id'=>$model->keySW)),
	array('label'=>'Delete CatSoftware', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keySW),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatSoftware', 'url'=>array('admin')),
);
?>

<h1>View CatSoftware #<?php echo $model->keySW; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keySW',
		'descripcion',
	),
)); ?>
