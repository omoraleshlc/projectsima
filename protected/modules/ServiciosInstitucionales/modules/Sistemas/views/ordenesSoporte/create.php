<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrdenesSoporte', 'url'=>array('index')),
	array('label'=>'Manage OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>Create OrdenesSoporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
