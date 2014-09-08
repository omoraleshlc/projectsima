<?php
/* @var $this CatMarcaCelularController */
/* @var $model CatMarcaCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Telefonía', 'url'=>array('admin')),
);
?>

<h1>Crear Marca de Celular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
