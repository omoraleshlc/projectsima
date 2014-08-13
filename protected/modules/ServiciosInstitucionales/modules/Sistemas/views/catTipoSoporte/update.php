<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Soporte', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Soporte', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Tipo de Soporte <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
