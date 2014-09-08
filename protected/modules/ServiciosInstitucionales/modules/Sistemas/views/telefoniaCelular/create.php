<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('admin'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Telefonia Celular', 'url'=>array('admin')),
);
?>

<h1>Crear Equipo de Telefonía</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
