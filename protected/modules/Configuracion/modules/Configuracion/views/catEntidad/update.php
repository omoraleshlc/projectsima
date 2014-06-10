<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */

$this->breadcrumbs=array(
	'Cat Entidads'=>array('index'),
	$model->keyEntidades=>array('view','id'=>$model->keyEntidades),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatEntidad', 'url'=>array('index')),
	array('label'=>'Create CatEntidad', 'url'=>array('create')),
	array('label'=>'View CatEntidad', 'url'=>array('view', 'id'=>$model->keyEntidades)),
	array('label'=>'Manage CatEntidad', 'url'=>array('admin')),
);
?>

<h1>Update CatEntidad <?php echo $model->keyEntidades; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>