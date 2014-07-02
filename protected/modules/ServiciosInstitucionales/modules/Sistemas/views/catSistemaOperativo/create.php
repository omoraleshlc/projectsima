<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Cat Sistema Operativos'=>array('default/CatalogoEquipos'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatSistemaOperativo', 'url'=>array('index')),
	array('label'=>'Manage CatSistemaOperativo', 'url'=>array('admin')),
);
?>

<h1>Create CatSistemaOperativo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
