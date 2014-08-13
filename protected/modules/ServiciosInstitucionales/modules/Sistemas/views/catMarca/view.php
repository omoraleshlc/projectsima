<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Catálogo de Equipos'=>array('default/CatalogoEquipos'),
	$model->keyMA,
);

$this->menu=array(
	array('label'=>'Crear Marca', 'url'=>array('create')),
	array('label'=>'Actualizar Marca', 'url'=>array('update', 'id'=>$model->keyMA)),
	array('label'=>'Borrar Marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catálogo de Equipos', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Ver Marca #<?php echo $model->keyMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMA',
		'descripcion',
	),
)); ?>
