<?php
/* @var $this UsuariosSimaController */
/* @var $model UsuariosSima */

$this->breadcrumbs=array(
	'Usuarios Sima'=>array('index'),
	$model->folio,
);

$this->menu=array(
	array('label'=>'List UsuariosSima', 'url'=>array('index')),
	array('label'=>'Create UsuariosSima', 'url'=>array('create')),
	array('label'=>'Update UsuariosSima', 'url'=>array('update', 'id'=>$model->folio)),
	array('label'=>'Delete UsuariosSima', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuariosSima', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario Sima #<?php echo $model->folio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folio',
		'usuario',
		'passwd',
		'nombre',
		'aPaterno',
		'aMaterno',
		'llave',
		'ejercicio',
		'fecha',
		'medico',
		'tipoUsuario',
		'status',
		'fechaIngreso',
		'fechaSalida',
		'horaIngreso',
		'horaSalida',
		'entidad',
		'email',
		'language',
		'ip',
		'roles',
		'almacenSoporteDefault',
	),
)); ?>
