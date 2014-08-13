<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Cat Marca Celulars'=>array('default/CatalogoTelefonia'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatMarcaCelular', 'url'=>array('index')),
	array('label'=>'Manage CatMarcaCelular', 'url'=>array('admin')),
);
?>

<h1>Crear Marca de Celular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
