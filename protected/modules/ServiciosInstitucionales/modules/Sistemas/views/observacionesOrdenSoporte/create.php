<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */

if (isset($_GET['OrdenSoporteId']))
	$breadurl=array('OrdenesSoporte/view','id'=>$_GET['OrdenSoporteId'],'#'=>'observaciones-orden-soporte-grid' );
else
	$breadurl=array('index');

$this->breadcrumbs=array(
	'Observaciones'=>$breadurl,
	'Create',
);

$this->menu=array(
	array('label'=>'List ObservacionesOrdenSoporte', 'url'=>array('index')),
	array('label'=>'Manage ObservacionesOrdenSoporte', 'url'=>array('admin')),
);
?>

<h1>Crear Observaciones de Orden de Soporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
