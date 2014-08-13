<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes de Soportes'=>array('admin'),
	$model->keySOP=>array('view','id'=>$model->keySOP),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Ordenes de Soporte', 'url'=>array('create')),
	array('label'=>'Ver Ordenes de Soporte', 'url'=>array('view', 'id'=>$model->keySOP)),
	array('label'=>'Lista de OrdenesSoporte', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesSoporte <?php echo $model->keySOP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<br/><br/>

<div>
	<?php
		$observaciones = new ObservacionesOrdenSoporte();
		$observaciones = $observaciones::model();
		$observaciones->keySOP=$model->keySOP;
		$this->renderPartial('/observacionesOrdenSoporte/adminList',array(
			'model'=>$observaciones,
		));
	?>
</div>
