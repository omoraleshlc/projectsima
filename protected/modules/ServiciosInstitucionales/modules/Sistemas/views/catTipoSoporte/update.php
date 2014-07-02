<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Cat Tipo Soportes'=>array('default/CatalogoEquipos'),
	$model->keyTS=>array('view','id'=>$model->keyTS),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTipoSoporte', 'url'=>array('index')),
	array('label'=>'Create CatTipoSoporte', 'url'=>array('create')),
	array('label'=>'View CatTipoSoporte', 'url'=>array('view', 'id'=>$model->keyTS)),
	array('label'=>'Manage CatTipoSoporte', 'url'=>array('admin')),
);
?>

<h1>Update CatTipoSoporte <?php echo $model->keyTS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
