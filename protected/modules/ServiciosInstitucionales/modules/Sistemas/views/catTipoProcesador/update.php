<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Cat Tipo Procesadors'=>array('index'),
	$model->keyTP=>array('view','id'=>$model->keyTP),
	'Update',
);

$this->menu=array(
	array('label'=>'List CatTipoProcesador', 'url'=>array('index')),
	array('label'=>'Create CatTipoProcesador', 'url'=>array('create')),
	array('label'=>'View CatTipoProcesador', 'url'=>array('view', 'id'=>$model->keyTP)),
	array('label'=>'Manage CatTipoProcesador', 'url'=>array('admin')),
);
?>

<h1>Update CatTipoProcesador <?php echo $model->keyTP; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>