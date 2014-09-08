<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Tipo de Plan de Celular', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Plan de Celular', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Actualizar Tipo de Plan de Celular <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
