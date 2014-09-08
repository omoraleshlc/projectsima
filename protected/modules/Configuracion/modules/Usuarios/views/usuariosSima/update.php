<?php
/* @var $this UsuariosSimaController */
/* @var $model UsuariosSima */

$this->breadcrumbs=array(
	'Usuarios Sima'=>array('index'),
	$model->folio=>array('view','id'=>$model->folio),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuariosSima', 'url'=>array('index')),
	array('label'=>'Create UsuariosSima', 'url'=>array('create')),
	array('label'=>'View UsuariosSima', 'url'=>array('view', 'id'=>$model->folio)),
	array('label'=>'Manage UsuariosSima', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuarios Sima <?php echo $model->folio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
