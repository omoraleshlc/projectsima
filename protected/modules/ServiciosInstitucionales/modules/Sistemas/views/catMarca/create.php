<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Catálogos de Equipos'=>array('default/CatalogoEquipo'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogos de Equipos', 'url'=>array('default/CatalogoEquipo')),
);
?>

<h1>Crear Marca</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
