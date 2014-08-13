<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Cat Tipo Equipos'=>array('default/CatalogoEquipos'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTipoEquipo', 'url'=>array('index')),
	array('label'=>'Manage CatTipoEquipo', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Equipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
