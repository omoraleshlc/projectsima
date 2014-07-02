<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Cat Marcas'=>array('default/CatalogoEquipos'),
	$model->keyMA,
);

$this->menu=array(
	array('label'=>'List CatMarca', 'url'=>array('index')),
	array('label'=>'Create CatMarca', 'url'=>array('create')),
	array('label'=>'Update CatMarca', 'url'=>array('update', 'id'=>$model->keyMA)),
	array('label'=>'Delete CatMarca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyMA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatMarca', 'url'=>array('admin')),
);
?>

<h1>View CatMarca #<?php echo $model->keyMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyMA',
		'descripcion',
	),
)); ?>
