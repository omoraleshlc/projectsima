
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soportependientes-grid',
	'dataProvider'=>$model->search(),
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
		'nombre',
		'codigo',
		'observaciones',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{begin}',
			'header' => 'Iniciar',
			'buttons' => array(
				'begin' => array( //the name {reply} must be same
					'label' => 'Iniciar', // text label of the button
					'url' => 'Yii::app()->controller->createUrl("ordenesSoporte/activarOrden", array("model"=>"ordenesSoporte", "field"=>"$data->keySOP"))',
					'icon'=>'play',
					'htmlOptions'=>array('href'=>'dfsf'),
				),	
			),
		),
		/*array(
			'class' => 'editable.EditableColumn',
			'name' => 'status',
			'header'=>'adsd',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('OrdenesSoporte/updateStatus', array('model'=>'OrdenesSoporte', 'field'=>'status', 'status'=>'status',)),
				'params'   => array('id' => '$data->keySOP'),
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

