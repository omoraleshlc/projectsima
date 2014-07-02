<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Cat Tipo Plan Celulars'=>array('default/CatalogoTelefonia'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTipoPlanCelular', 'url'=>array('index')),
	array('label'=>'Manage CatTipoPlanCelular', 'url'=>array('admin')),
);
?>

<h1>Create CatTipoPlanCelular</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
