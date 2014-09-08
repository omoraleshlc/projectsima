<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyTE=>array('view','id'=>$model->keyTE),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Equipo', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Equipo', 'url'=>array('view', 'id'=>$model->keyTE)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Tipo de Equipo <?php echo $model->keyTE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
