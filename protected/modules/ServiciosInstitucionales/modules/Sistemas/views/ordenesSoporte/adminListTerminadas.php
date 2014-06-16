
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soporte-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'keySOP',
			'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
		),
		array(
			'name' => 'fecha',
			'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
		),
		array(
			'name' => 'fechaFinal',
			'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyTS',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('ordenesSoporte/updateEditable', array('model'=>'ordenesSoporte', 'field'=>'keyTS')),
				'source'    => $this->createUrl('ordenesSoporte/getTipoSoporteList'),
				'placement' => 'left',
			)
		),	
		'descripcionAlmacen',
		'codigo',
		'observaciones',
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'status',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('OrdenesSoporte/updateEditable', array('model'=>'OrdenesSoporte', 'field'=>'status')),
				'source'    => Editable::source(array('pending' => 'Pendiente', 'done' => 'Terminada', 'ontransit' => 'En proceso')),
				'placement' => 'left',
			)
		),
		/*
		'entidadSolicitud',
		'almacen',
		'registro',
		'descripcionSoporte',
		'usuario',
		'hora',
		'entidad',
		'solicitud',
		'descripcionTS',
		'usuarioEjecutor',
		'fechaFinal',
		'almacenSoporte',
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
		'url' =>$this->createUrl('OrdenesSoporte/create', array('model'=>'OrdenesSoporte')),)); ?>
</div>

