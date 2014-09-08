<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyMA=>array('view','id'=>$model->keyMA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Marca de Celular', 'url'=>array('create')),
	array('label'=>'Ver Marca de Celular', 'url'=>array('view', 'id'=>$model->keyMA)),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Actualizar Marca de Celular <?php echo $model->keyMA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
