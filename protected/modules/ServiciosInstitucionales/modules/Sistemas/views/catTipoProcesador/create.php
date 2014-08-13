<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Equipos', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Crear Tipo de Procesador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
