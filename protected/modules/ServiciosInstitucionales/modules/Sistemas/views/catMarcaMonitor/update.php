<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Cat Marca Monitors'=>array('default/CatalogoEquipos'),
	$model->keyMAM=>array('view','id'=>$model->keyMAM),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMarcaMonitor', 'url'=>array('index')),
	array('label'=>'Create CatMarcaMonitor', 'url'=>array('create')),
	array('label'=>'View CatMarcaMonitor', 'url'=>array('view', 'id'=>$model->keyMAM)),
	array('label'=>'Manage CatMarcaMonitor', 'url'=>array('admin')),
);
?>

<h1>Update CatMarcaMonitor <?php echo $model->keyMAM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
