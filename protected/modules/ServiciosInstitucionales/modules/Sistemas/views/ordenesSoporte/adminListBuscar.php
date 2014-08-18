
<?php

$vare2=$this->createUrl('ObservacionesOrdenSoporte/viewPopup');
$lista=CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion');
$lista=CMap::mergeArray(array('' => 'Seleccione'),CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion'));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soportebuscar-grid',
	'dataProvider'=>$model->searchOperador(),
	'filter'=>$model,
	'enablePagination' => $pagination,
	'columns'=>array(
		array(
			'name' => 'keySOP',
			'headerHtmlOptions' => array('style' => 'width: 5%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
			'filter'=>"<i class='icon-search'></i>&nbsp;&nbsp;".CHtml::activeTextField($model, 'keySOP', 
                 array('style'=>'width:55%')),
        	'filterHtmlOptions' => array('colspan' => '2'),
		),
		array(
			'header'=>'Fecha',
			'type'=>'HTML',
			'value' => "'Reporte:<br/>'.\$data->fecha.'<br/><b>Inicio:<br/>'.\$data->fecha.'</b><br/>Terminación:<br/>'.\$data->fecha",
			'htmlOptions' => array('style' => 'font-size: 10px'),
			'filterHtmlOptions' => array('style' => 'display:none;'),
		),
		array(
			'name' => 'codigo',
			'headerHtmlOptions' => array('style' => 'width: 8%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
			'filter'=>CHtml::activeTextField($model, 'observaciones', 
                 array('style'=>'width:80%')),
		),
		array(
			'name' => 'observaciones',
			'headerHtmlOptions' => array('style' => 'width: 25%;'),
			'filter'=>CHtml::activeTextField($model, 'observaciones', 
                 array('style'=>'width:95%')),
		),
		array(
			'header'=>'Tipo soporte',
			'name' => 'keyTS',
			'value' => "(CatTipoSoporte::model()->findByPk(\$data->keyTS))!==null?CatTipoSoporte::model()->findByPk(\$data->keyTS)->descripcion:''",
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
			'filter'=>CHtml::activeDropDownList($model,'keyTS', $lista),
		),	
		array(
			'name' => 'descripcionAlmacen',
			'headerHtmlOptions' => array('style' => 'width: 15%;'),
			'filter'=>CHtml::activeTextField($model, 'descripcionAlmacen', 
                 array('style'=>'width:91%')),
		),
		array(
			'name' => 'nombre',
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeTextField($model, 'nombre', 
                 array('style'=>'width:88%')),
		),
		array(
			'name' => 'usuarioEjecutor',
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
			'filter'=>CHtml::activeTextField($model, 'usuarioEjecutor', 
                 array('style'=>'width:88%')),
		),
		array(
			'header'=>'Status',
			'value' => "\$data->status=='pending'?'Pendiente':(\$data->status=='ontransit'?'En proceso':'Terminada')",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{verobser}',
			'header' => 'Obsevaciones',
			'buttons' => array(
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
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Buscar',
    'size'=>'small', // null, 'large', 'small' or 'mini'
)); 
		?>
</div>

