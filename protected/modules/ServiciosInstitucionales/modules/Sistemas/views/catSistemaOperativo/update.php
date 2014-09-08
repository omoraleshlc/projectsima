<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	$model->keyOS=>array('view','id'=>$model->keyOS),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Crear Sistema Operativo', 'url'=>array('create')),
	array('label'=>'Ver Sistema Operativo', 'url'=>array('view', 'id'=>$model->keyOS)),
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Actualizar Sistema Operativo <?php echo $model->keyOS; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
