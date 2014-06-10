<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Cat Tipo Procesadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CatTipoProcesador', 'url'=>array('index')),
	array('label'=>'Manage CatTipoProcesador', 'url'=>array('admin')),
);
?>

<h1>Create CatTipoProcesador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>