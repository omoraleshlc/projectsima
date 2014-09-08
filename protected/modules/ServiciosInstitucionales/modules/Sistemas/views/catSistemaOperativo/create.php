<?php
/* @var $this CatSistemaOperativoController */
/* @var $model CatSistemaOperativo */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Catálogo de Equipo', 'url'=>array('default/CatalogoEquipos')),
);
?>

<h1>Crear Sistema Operativo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
