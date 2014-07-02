<?php
/* @var $this CatSoftwareController */
/* @var $model CatSoftware */

$this->breadcrumbs=array(
	'Cat Softwares'=>array('default/CatalogoEquipos'),
	$model->keySW=>array('view','id'=>$model->keySW),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatSoftware', 'url'=>array('index')),
	array('label'=>'Create CatSoftware', 'url'=>array('create')),
	array('label'=>'View CatSoftware', 'url'=>array('view', 'id'=>$model->keySW)),
	array('label'=>'Manage CatSoftware', 'url'=>array('admin')),
);
?>

<h1>Update CatSoftware <?php echo $model->keySW; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
