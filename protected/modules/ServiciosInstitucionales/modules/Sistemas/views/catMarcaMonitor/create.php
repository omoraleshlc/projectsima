<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Crear Marca de Monitor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
