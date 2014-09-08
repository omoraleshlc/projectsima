<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Crear Tipo de Equipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
