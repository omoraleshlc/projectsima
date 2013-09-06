<?php
/* @var $this UsersModulosGeneralesController */
/* @var $model UsersModulosGenerales */

$this->breadcrumbs=array(
	'Users Modulos Generales'=>array('index'),
	$model->keyMG,
);

$this->menu=array(
	array('label'=>'List UsersModulosGenerales', 'url'=>array('index')),
	array('label'=>'Create UsersModulosGenerales', 'url'=>array('create')),
	array('label'=>'Update UsersModulosGenerales', 'url'=>array('update', 'id'=>$model->keyMG)),
	array('label'=>'Delete UsersModulosGenerales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMG),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersModulosGenerales', 'url'=>array('admin')),
);
?>

<h1>View UsersModulosGenerales #<?php echo $model->keyMG; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMG',
		'descripcion',
		'entidad',
	),
)); ?>
