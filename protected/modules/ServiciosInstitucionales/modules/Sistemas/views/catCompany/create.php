<?php
/* @var $this CatCompanyController */
/* @var $model CatCompany */

$this->breadcrumbs=array(
	'Catálogo de Telefonía'=>array('default/CatalogoTelefonia'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Telefonía', 'url'=>array('default/CatalogoTelefonia')),
);
?>

<h1>Crear Compañía</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
