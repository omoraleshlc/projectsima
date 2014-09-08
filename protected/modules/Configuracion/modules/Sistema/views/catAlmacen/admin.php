<h1>Almacenes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-almacen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyAlmacenes',
		'almacenConsumo',
		'almacen',
		'descripcion',
		'tieneCuartos',
		'ctaContable',
		/*
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
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatAlmacen/create', array('model'=>'CatAlmacen')),)); ?>
</div>

