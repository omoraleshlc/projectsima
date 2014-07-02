<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Cat Marca Monitors'=>array('default/CatalogoEquipos'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatMarcaMonitor', 'url'=>array('index')),
	array('label'=>'Manage CatMarcaMonitor', 'url'=>array('admin')),
);
?>

<h1>Create CatMarcaMonitor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
