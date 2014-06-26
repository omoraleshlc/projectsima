<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Cat Almacens'=>array('index'),
	$model->keyAlmacenes,
);

$this->menu=array(
	array('label'=>'List CatAlmacen', 'url'=>array('index')),
	array('label'=>'Create CatAlmacen', 'url'=>array('create')),
	array('label'=>'Update CatAlmacen', 'url'=>array('update', 'id'=>$model->keyAlmacenes)),
	array('label'=>'Delete CatAlmacen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyAlmacenes),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CatAlmacen', 'url'=>array('admin')),
);
?>

<h1>View CatAlmacen #<?php echo $model->keyAlmacenes; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'keyAlmacenes',
		'almacenConsumo',
		'almacen',
		'descripcion',
		'tieneCuartos',
		'ctaContable',
		'fecha1',
		'usuario',
		'ID_CCOSTO',
		'modulo',
		'activo',
		'stock',
		'miniAlmacen',
		'almacenPadre',
		'id_medico',
		'entidad',
		'medico',
		'ventas',
		'altaPaciente',
		'altaEspecial',
		'cargosDirectos',
		'numConsultorio',
		'transacciones',
		'contieneReferidos',
		'contieneEmpleados',
		'compras',
		'ventasDirectas',
		'modificarPrecios',
		'cierreCuenta',
		'registroUrgencias',
		'credenciales',
		'medicamentosSueltos',
		'centroDistribucion',
		'permiteDevoluciones',
		'almacenCargo',
		'reporteSurtir',
		'statusCitas',
		'cambiarDescripcion',
		'gpoProducto',
		'puntoVenta',
		'actualizaPrecios',
		'especialidad',
		'maquila',
		'farmacia',
		'beneficencia',
		'manejaexpedientes',
		'listaexpedientes',
		'almacenExistencias',
		'precioEspecial',
		'tipoBeneficencia',
		'porcenajePE',
		'horaPE',
		'llenadoEspecial',
		'porcentajePE',
		'ventaBotiquinExternos',
		'imprimeTicket',
		'statusExistencias',
	),
)); ?>
