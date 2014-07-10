
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ordenes-soportebuscar-grid',
	'dataProvider'=>$model->searchOperador(),
	'filter'=>$model,
	'enablePagination' => $pagination,
	'columns'=>array(
		array(
			'name' => 'keySOP',
			'headerHtmlOptions' => array('style' => 'width: 5%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		array(
			'header'=>'Fecha',
			'type'=>'HTML',
			'value' => "'Reporte:<br/>'.\$data->fecha.'<br/><b>Inicio:<br/>'.\$data->fecha.'</b><br/>Terminación:<br/>'.\$data->fecha",
			'htmlOptions' => array('style' => 'font-size: 10px'),
		),
		array(
			'name' => 'fecha',
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
			'filter'=>CHtml::activeTextField($model, 'fecha', 
                 array('placeholder'=>'buscar')),
		),
		array(
			'header'=>'Tipo soporte',
			'value' => "catTipoSoporte()::model(\$data->status)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
		),	
		array(
			'name' => 'descripcionAlmacen',
			'headerHtmlOptions' => array('style' => 'width: 15%;'),
		),
		array(
			'name' => 'nombre',
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
		),
		array(
			'name' => 'usuarioEjecutor',
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
		),
		array(
			'name' => 'observaciones',
			'headerHtmlOptions' => array('style' => 'width: 25%;'),
		),
		array(
			'name' => 'codigo',
			'headerHtmlOptions' => array('style' => 'width: 8%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		array(
			'header'=>'Status',
			'value' => "\$data->status=='pending'?'Pendiente':\$data->status=='ontransit'?'En proceso':'Terminada'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
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

