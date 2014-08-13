<?php
/* @var $this CatSoftwareController */
/* @var $model CatSoftware */

$this->breadcrumbs=array(
	'Cat Softwares'=>array('default/CatalogoEquipos'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatSoftware', 'url'=>array('index')),
	array('label'=>'Manage CatSoftware', 'url'=>array('admin')),
);
?>

<h1>Crear Software</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
