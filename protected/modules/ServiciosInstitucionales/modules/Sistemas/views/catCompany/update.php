<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Compañía', 'url'=>array('create')),
	array('label'=>'Ver Compañía', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Actualizar Compañía <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
