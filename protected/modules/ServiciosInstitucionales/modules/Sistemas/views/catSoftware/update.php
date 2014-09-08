<?php
/* @var $this CatSoftwareController */
/* @var $model CatSoftware */

$this->breadcrumbs=array(
	'Catálogo d Equipo'=>array('default/CatalogoEquipos'),
	$model->keySW=>array('view','id'=>$model->keySW),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Software', 'url'=>array('create')),
	array('label'=>'Ver Software', 'url'=>array('view', 'id'=>$model->keySW)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Software <?php echo $model->keySW; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
