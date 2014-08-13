<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyTS,
);

$this->menu=array(
	array('label'=>'Crear Compañía', 'url'=>array('create')),
	array('label'=>'Actualizar Compañía', 'url'=>array('update', 'id'=>$model->keyTS)),
	array('label'=>'Borrar Compañía', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
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
