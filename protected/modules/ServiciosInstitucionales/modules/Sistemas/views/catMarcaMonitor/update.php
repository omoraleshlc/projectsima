<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyMAM=>array('view','id'=>$model->keyMAM),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Marca de Monitor', 'url'=>array('create')),
	array('label'=>'Ver Marca de Monitor', 'url'=>array('view', 'id'=>$model->keyMAM)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Marca de Monitor <?php echo $model->keyMAM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
