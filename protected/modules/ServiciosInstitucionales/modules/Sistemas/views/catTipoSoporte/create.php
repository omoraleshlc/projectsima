<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Ordenes de soporte'=>array('ordenesSoporte/admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Crear Tipo de Soporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
