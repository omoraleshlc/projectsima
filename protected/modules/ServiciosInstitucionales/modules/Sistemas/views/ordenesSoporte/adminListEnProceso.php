<?php
$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soporteenproceso-grid',
	'dataProvider'=>$model,
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
		'fechaInicio',
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
		'usuarioEjecutor',
		'codigo',
		'observaciones',
		
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{begin}',
			'header' => 'Terminar',
			'buttons' => array(
				'begin' => array( //the name {reply} must be same
					'label' => 'Iniciar', // text label of the button
					'url' => 'Yii::app()->controller->createUrl("ordenesSoporte/activarOrden", array("model"=>"ordenesSoporte", "field"=>"$data->keySOP"))',
					'icon'=>'play',
					'htmlOptions'=>array('href'=>'dfsf'),
				),	
			),
		),
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{obser}',
			'header' => 'Obsevaciones',
			'buttons' => array(
				'obser' => array(
					'label' => 'Agregar',
					'icon'=>'plus',
					'url' => '$data->keySOP', 
					'options' => array(
					  'onclick' => 'js:document.getElementById("idorden").src="'.$vare.'"+"&OrdenSoporteId="+$(this).attr("href");return false;',
					  'data-target'=>'#myModal', 'data-toggle'=>'modal',
					  'type'=>"submit"
					),
				),	
			),
		),
		
		/*array(
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
		'url' =>$this->createUrl('OrdenesSoporte/create', array('model'=>'OrdenesSoporte')),)); ?>
</div>

