<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyTP=>array('view','id'=>$model->keyTP),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Procesador', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Procesador', 'url'=>array('view', 'id'=>$model->keyTP)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Tipo de Procesador <?php echo $model->keyTP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
