<?php
/* @var $this CatSoftwareController */
/* @var $model CatSoftware */

$this->breadcrumbs=array(
	'Cat Softwares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatSoftware', 'url'=>array('index')),
	array('label'=>'Manage CatSoftware', 'url'=>array('admin')),
);
?>

<h1>Create CatSoftware</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>