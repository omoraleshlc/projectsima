<?php
/* @var $this UsersModulosGeneralesController */
/* @var $model UsersModulosGenerales */

$this->breadcrumbs=array(
	'Users Modulos Generales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista ', 'url'=>array('index')),
	array('label'=>'Editar', 'url'=>array('admin')),
);
?>

  
    <h1>Módulos Generales</h1>
    <p>Catálogo</p>
    
    

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>