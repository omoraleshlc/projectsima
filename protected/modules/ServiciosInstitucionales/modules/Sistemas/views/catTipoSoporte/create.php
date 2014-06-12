<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Cat Tipo Soportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTipoSoporte', 'url'=>array('index')),
	array('label'=>'Manage CatTipoSoporte', 'url'=>array('admin')),
);
?>

<h1>Create CatTipoSoporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>