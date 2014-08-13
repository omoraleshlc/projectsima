<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model Observaciones de Orden de Soporte */

if (isset($_GET['OrdenSoporteId']))
	$breadurl=array('OrdenesSoporte/view','id'=>$_GET['OrdenSoporteId'],'#'=>'observaciones-orden-soporte-grid' );
else
	$breadurl=array('index');

$this->breadcrumbs=array(
	'Observaciones'=>$breadurl,
	$model->keyS=>array('view','id'=>$model->keyS, 'OrdenSoporteId'=>$_GET['OrdenSoporteId']),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Observaciones de Orden de Soporte', 'url'=>array('create')),
	array('label'=>'Ver Observaciones de Orden de Soporte', 'url'=>array('view', 'id'=>$model->keyS)),
	array('label'=>'Lista de Observaciones de Orden de Soporte', 'url'=>array('admin')),
);
?>

<h1>Actualizar Observaciones <?php echo $model->keyS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
