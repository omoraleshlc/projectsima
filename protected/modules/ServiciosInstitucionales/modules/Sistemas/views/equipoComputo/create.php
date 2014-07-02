<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computos'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List EquipoComputo', 'url'=>array('index')),
	array('label'=>'Manage EquipoComputo', 'url'=>array('admin')),
);
?>

<h1>Crear Equipo de Computo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
