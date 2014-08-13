<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	'Create',
);

$this->menu=array(
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Crear Tipo de Plan de Celular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
