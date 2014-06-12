<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('index'),
	$model->keyCTC=>array('view','id'=>$model->keyCTC),
	'Actializar',
);

$this->menu=array(
	array('label'=>'List TelefoniaCelular', 'url'=>array('index')),
	array('label'=>'Create TelefoniaCelular', 'url'=>array('create')),
	array('label'=>'View TelefoniaCelular', 'url'=>array('view', 'id'=>$model->keyCTC)),
	array('label'=>'Manage TelefoniaCelular', 'url'=>array('admin')),
);
?>

<h1>Actualizar Equipo de Telefonía <?php echo $model->keyCTC; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
