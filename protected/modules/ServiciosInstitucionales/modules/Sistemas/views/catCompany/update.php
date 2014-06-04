<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Cat Companies'=>array('index'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatCompany', 'url'=>array('index')),
	array('label'=>'Create CatCompany', 'url'=>array('create')),
	array('label'=>'View CatCompany', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Manage CatCompany', 'url'=>array('admin')),
);
?>

<h1>Update CatCompany <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>