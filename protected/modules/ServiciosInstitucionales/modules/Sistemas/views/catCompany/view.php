<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Cat Companies'=>array('default/CatalogoTelefonia'),
	$model->keyTS,
);

$this->menu=array(
	array('label'=>'List CatCompany', 'url'=>array('index')),
	array('label'=>'Create CatCompany', 'url'=>array('create')),
	array('label'=>'Update CatCompany', 'url'=>array('update', 'id'=>$model->keyTS)),
	array('label'=>'Delete CatCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatCompany', 'url'=>array('admin')),
);
?>

<h1>Ver Compañía #<?php echo $model->keyTS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTS',
		'descripcion',
	),
)); ?>
