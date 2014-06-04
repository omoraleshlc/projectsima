<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Cat Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatCompany', 'url'=>array('index')),
	array('label'=>'Manage CatCompany', 'url'=>array('admin')),
);
?>

<h1>Create CatCompany</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>