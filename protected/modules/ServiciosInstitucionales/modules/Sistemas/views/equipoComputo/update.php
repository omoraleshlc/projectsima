<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computo'=>array('admin'),
	$model->keyIE=>array('view','id'=>$model->keyIE),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Equipo de Computo', 'url'=>array('create')),
	array('label'=>'Ver Equipo de Computo', 'url'=>array('view', 'id'=>$model->keyIE)),
	array('label'=>'Lista de Equipo de Computo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Equipo de Cómputo #<?php echo $model->keyIE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
