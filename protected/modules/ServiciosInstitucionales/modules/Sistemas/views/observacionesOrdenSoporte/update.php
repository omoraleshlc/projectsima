<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */

if (isset($_GET['OrdenSoporteId']))
	$breadurl=array('OrdenesSoporte/view','id'=>$_GET['OrdenSoporteId'],'#'=>'observaciones-orden-soporte-grid' );
else
	$breadurl=array('index');

$this->breadcrumbs=array(
	'Observaciones'=>$breadurl,
	$model->keyS=>array('view','id'=>$model->keyS, 'OrdenSoporteId'=>$_GET['OrdenSoporteId']),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObservacionesOrdenSoporte', 'url'=>array('index')),
	array('label'=>'Create ObservacionesOrdenSoporte', 'url'=>array('create')),
	array('label'=>'View ObservacionesOrdenSoporte', 'url'=>array('view', 'id'=>$model->keyS)),
	array('label'=>'Manage ObservacionesOrdenSoporte', 'url'=>array('admin')),
);
?>

<h1>Actualizar Observaciones <?php echo $model->keyS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
