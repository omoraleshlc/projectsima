<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Cat Tipo Equipos'=>array('index'),
	$model->keyTE,
);

$this->menu=array(
	array('label'=>'List CatTipoEquipo', 'url'=>array('index')),
	array('label'=>'Create CatTipoEquipo', 'url'=>array('create')),
	array('label'=>'Update CatTipoEquipo', 'url'=>array('update', 'id'=>$model->keyTE)),
	array('label'=>'Delete CatTipoEquipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyTE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatTipoEquipo', 'url'=>array('admin')),
);
?>

<h1>View CatTipoEquipo #<?php echo $model->keyTE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyTE',
		'descripcion',
	),
)); ?>
