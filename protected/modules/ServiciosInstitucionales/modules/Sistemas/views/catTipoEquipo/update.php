<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Cat Tipo Equipos'=>array('default/CatalogoEquipos'),
	$model->keyTE=>array('view','id'=>$model->keyTE),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTipoEquipo', 'url'=>array('index')),
	array('label'=>'Create CatTipoEquipo', 'url'=>array('create')),
	array('label'=>'View CatTipoEquipo', 'url'=>array('view', 'id'=>$model->keyTE)),
	array('label'=>'Manage CatTipoEquipo', 'url'=>array('admin')),
);
?>

<h1>Update CatTipoEquipo <?php echo $model->keyTE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
