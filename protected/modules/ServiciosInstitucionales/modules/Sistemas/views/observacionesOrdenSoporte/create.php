<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */

if (isset($_GET['OrdenSoporteId']))
	$breadurl=array('OrdenesSoporte/view','id'=>$_GET['OrdenSoporteId'],'#'=>'observaciones-orden-soporte-grid' );
else
	$breadurl=array('index');

$this->breadcrumbs=array(
	'Observaciones'=>$breadurl,
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Observaciones de Orden de Soporte', 'url'=>array('admin')),
);
?>

<h1>Crear Observaciones de Orden de Soporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
