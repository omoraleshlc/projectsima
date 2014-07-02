<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List TelefoniaCelular', 'url'=>array('index')),
	array('label'=>'Manage TelefoniaCelular', 'url'=>array('admin')),
);
?>

<h1>Crear equipo de telefonía</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
