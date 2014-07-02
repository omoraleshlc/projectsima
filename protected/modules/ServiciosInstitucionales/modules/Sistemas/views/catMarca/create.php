<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Cat Marcas'=>array('default/CatalogoTelefonia'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatMarca', 'url'=>array('index')),
	array('label'=>'Manage CatMarca', 'url'=>array('admin')),
);
?>

<h1>Create CatMarca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
