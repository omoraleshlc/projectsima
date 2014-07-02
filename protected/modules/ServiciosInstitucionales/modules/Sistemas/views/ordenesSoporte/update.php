<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	$model->keySOP=>array('view','id'=>$model->keySOP),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesSoporte', 'url'=>array('index')),
	array('label'=>'Create OrdenesSoporte', 'url'=>array('create')),
	array('label'=>'View OrdenesSoporte', 'url'=>array('view', 'id'=>$model->keySOP)),
	array('label'=>'Manage OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesSoporte <?php echo $model->keySOP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
