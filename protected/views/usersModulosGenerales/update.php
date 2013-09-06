<?php
/* @var $this UsersModulosGeneralesController */
/* @var $model UsersModulosGenerales */

$this->breadcrumbs=array(
	'Users Modulos Generales'=>array('index'),
	$model->keyMG=>array('view','id'=>$model->keyMG),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersModulosGenerales', 'url'=>array('index')),
	array('label'=>'Create UsersModulosGenerales', 'url'=>array('create')),
	array('label'=>'View UsersModulosGenerales', 'url'=>array('view', 'id'=>$model->keyMG)),
	array('label'=>'Manage UsersModulosGenerales', 'url'=>array('admin')),
);
?>

<h1>Actualizar <?php echo $model->keyMG; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>