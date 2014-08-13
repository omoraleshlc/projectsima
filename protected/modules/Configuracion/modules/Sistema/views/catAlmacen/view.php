<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */

$this->breadcrumbs=array(
	'Almacenes'=>array('admin'),
	$model->keyAlmacenes,
);

$this->menu=array(
	array('label'=>'Crear Almacén', 'url'=>array('create')),
	array('label'=>'Actualizar Almacén', 'url'=>array('update', 'id'=>$model->keyAlmacenes)),
	array('label'=>'Borrar Almacén', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyAlmacenes),'confirm'=>'¿Esta seguro de que quiere borrar este elemento?')),
	array('label'=>'Lista de Almacenes', 'url'=>array('admin')),
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
