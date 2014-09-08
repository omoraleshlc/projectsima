<?php
/* @var $this UsuariosSimaController */
/* @var $model UsuariosSima */

$this->breadcrumbs=array(
	'Usuarios Sima'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuariosSima', 'url'=>array('index')),
	array('label'=>'Manage UsuariosSima', 'url'=>array('admin')),
);
?>

<h1>Crear Usuarios Sima</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
