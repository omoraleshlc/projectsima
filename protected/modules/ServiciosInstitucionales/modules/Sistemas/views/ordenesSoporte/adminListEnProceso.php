<?php
$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soporteenproceso-grid',
	'dataProvider'=>$model,
	//'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'keySOP',
			'htmlOptions' => array('style' => 'width: 5%; text-align: center;'),
		),
		'codigo',
		'observaciones',
		array(
			'header' => 'Tipo de soporte',
			'value' => "(new CatTipoSoporte)->findByPk(\$data->keyTS)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeDropDownList($model->model,'keyTS',CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion' ), array('prompt'=>'')),
		),
		'descripcionAlmacen',
		'usuarioEjecutor',
		array(
			'name' => 'fecha',
			'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
		),
		'fechaInicio',
		
		
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
					  'onclick' => 'js:document.getElementById("idorden").src="'.$vare.'"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
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

