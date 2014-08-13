<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo de Computo'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Equipo Computo', 'url'=>array('admin')),
);
?>

<h1>Crear Equipo de Cómputo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
