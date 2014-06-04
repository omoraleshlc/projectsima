<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Cat Marca Celulars'=>array('index'),
	$model->keyMA=>array('view','id'=>$model->keyMA),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMarcaCelular', 'url'=>array('index')),
	array('label'=>'Create CatMarcaCelular', 'url'=>array('create')),
	array('label'=>'View CatMarcaCelular', 'url'=>array('view', 'id'=>$model->keyMA)),
	array('label'=>'Manage CatMarcaCelular', 'url'=>array('admin')),
);
?>

<h1>Update CatMarcaCelular <?php echo $model->keyMA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>