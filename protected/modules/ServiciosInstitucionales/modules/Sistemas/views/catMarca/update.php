<?php
/* @var $this CatMarcaController */
/* @var $model CatMarca */

$this->breadcrumbs=array(
	'Cat Marcas'=>array('default/CatalogoEquipos'),
	$model->keyMA=>array('view','id'=>$model->keyMA),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatMarca', 'url'=>array('index')),
	array('label'=>'Create CatMarca', 'url'=>array('create')),
	array('label'=>'View CatMarca', 'url'=>array('view', 'id'=>$model->keyMA)),
	array('label'=>'Manage CatMarca', 'url'=>array('admin')),
);
?>

<h1>Update CatMarca <?php echo $model->keyMA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
