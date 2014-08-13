<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Catálogo de Equipos'=>array('default/CatalogoEquipos'),
	$model->keyMA=>array('view','id'=>$model->keyMA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Marca', 'url'=>array('create')),
	array('label'=>'Ver Marca', 'url'=>array('view', 'id'=>$model->keyMA)),
	array('label'=>'Catálogo de Equipos', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Marca <?php echo $model->keyMA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
