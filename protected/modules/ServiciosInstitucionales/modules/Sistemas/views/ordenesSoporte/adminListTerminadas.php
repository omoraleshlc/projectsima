<?php
$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soporteterminadas-grid',
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
		array(
			'name' => 'Tiempo',
			'header' => 'Tiempo de terminacion',
			'value' =>'empty($data->fechaInicio)?\'\':date_diff(new DateTime($data->fechaInicio), new DateTime($data->fechaFinal))->format("%d días, %h horas, %i minutos.")'
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
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{obser}',
			'header' => 'Obsevaciones',
			'buttons' => array(
				'obser' => array(
					'label' => 'Agregar',
					'icon'=>'plus',
					'url' => '$data->keySOP', 
					'options' => array(
					  'onclick' => 'js:document.getElementById("idorden").src="'.$vare.'"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
					  'data-target'=>'#myModal', 'data-toggle'=>'modal',
					  'type'=>"submit"
					),
				),	
			),
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

