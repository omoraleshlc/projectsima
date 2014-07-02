<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Cat Marca Celulars'=>array('default/CatalogoTelefonia'),
	$model->keyMA,
);

$this->menu=array(
	array('label'=>'List CatMarcaCelular', 'url'=>array('index')),
	array('label'=>'Create CatMarcaCelular', 'url'=>array('create')),
	array('label'=>'Update CatMarcaCelular', 'url'=>array('update', 'id'=>$model->keyMA)),
	array('label'=>'Delete CatMarcaCelular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMarcaCelular', 'url'=>array('admin')),
);
?>

<h1>View CatMarcaCelular #<?php echo $model->keyMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMA',
		'descripcion',
	),
)); ?>
