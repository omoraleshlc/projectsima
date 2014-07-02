<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Cat Tipo Plan Celulars'=>array('default/CatalogoTelefonia'),
	$model->keyTS,
);

$this->menu=array(
	array('label'=>'List CatTipoPlanCelular', 'url'=>array('index')),
	array('label'=>'Create CatTipoPlanCelular', 'url'=>array('create')),
	array('label'=>'Update CatTipoPlanCelular', 'url'=>array('update', 'id'=>$model->keyTS)),
	array('label'=>'Delete CatTipoPlanCelular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTipoPlanCelular', 'url'=>array('admin')),
);
?>

<h1>View CatTipoPlanCelular #<?php echo $model->keyTS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTS',
		'descripcion',
	),
)); ?>
