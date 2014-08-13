<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes de Soportes'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Ordenes de Soporte', 'url'=>array('admin')),
);
?>

<h1>Crear Orden de Soporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
