<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('admin'),
	$model->keyCTC=>array('view','id'=>$model->keyCTC),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Equipo de Telefonia Celular', 'url'=>array('create')),
	array('label'=>'Ver Equipo de Telefonia Celular', 'url'=>array('view', 'id'=>$model->keyCTC)),
	array('label'=>'Lista de Telefonia Celular', 'url'=>array('admin')),
);
?>

<h1>Actualizar Equipo de Telefonía <?php echo $model->keyCTC; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
