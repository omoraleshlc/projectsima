<?php
/* @var $this CatTipoPlanCelularController */
/* @var $model CatTipoPlanCelular */

$this->breadcrumbs=array(
	'Cat Tipo Plan Celulars'=>array('default/CatalogoTelefonia'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTipoPlanCelular', 'url'=>array('index')),
	array('label'=>'Create CatTipoPlanCelular', 'url'=>array('create')),
	array('label'=>'View CatTipoPlanCelular', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Manage CatTipoPlanCelular', 'url'=>array('admin')),
);
?>

<h1>Update CatTipoPlanCelular <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
