
<?php
$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
$vare2=$this->createUrl('ObservacionesOrdenSoporte/viewPopup');

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soportependientes-grid',
	'dataProvider'=>$model,
	'columns'=>array(
		array(
			'name' => 'keySOP',
			'htmlOptions' => array('style' => 'width: 5%; text-align: center;'),
		),
		'codigo',
		'observaciones',
		'nombre',
		array(
			'header' => 'Tipo de soporte',
			'value' => "(new CatTipoSoporte)->findByPk(\$data->keyTS)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeDropDownList($model->model,'keyTS',CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion' ), array('prompt'=>'')),
		),
		'descripcionAlmacen',
		array(
			'name' => 'fecha',
			'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
		),
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
		
		
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{obser}{verobser}',
			'header' => 'Obsevaciones',
			'buttons' => array(
				'obser' => array( //the name {reply} must be same
					'label' => 'Agregar', // text label of the button
					'icon'=>'plus',
					'url' => '$data->keySOP', 
					'options' => array(
					  'onclick' => 'js:document.getElementById("idorden").src="'.$vare.'"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
					  'data-target'=>'#myModal', 'data-toggle'=>'modal',
					  'type'=>"submit"
					),
				),	
				
				'verobser' => array( //the name {reply} must be same
					'label' => 'Agregar', // text label of the button
					'icon'=>'list',
					'url' => '$data->keySOP', 
					'options' => array(
					  'onclick' => 'js:document.getElementById("idorden").src="'.$vare2.'"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
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

