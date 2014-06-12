<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Cat Sistema Operativos'=>array('index'),
	$model->keyOS=>array('view','id'=>$model->keyOS),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatSistemaOperativo', 'url'=>array('index')),
	array('label'=>'Create CatSistemaOperativo', 'url'=>array('create')),
	array('label'=>'View CatSistemaOperativo', 'url'=>array('view', 'id'=>$model->keyOS)),
	array('label'=>'Manage CatSistemaOperativo', 'url'=>array('admin')),
);
?>

<h1>Update CatSistemaOperativo <?php echo $model->keyOS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>