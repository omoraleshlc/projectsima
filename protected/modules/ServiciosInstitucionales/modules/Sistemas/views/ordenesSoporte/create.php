<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List OrdenesSoporte', 'url'=>array('index')),
	array('label'=>'Manage OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>Crear Ordene soporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
