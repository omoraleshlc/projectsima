<h1>Equipo de Cómputo</h1>

<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('EquipoComputo/create', array('model'=>'EquipoComputo')),)); ?>
</div>
<?php
$model2 = new CatTipoEquipo;

function thirdbestdog($data, $blergh, $generate){
    if ($generate){
	/**/$imgurl= 'protected/uploads/lbl'.$data->codigo.'.png';
    
    $im=imagecreatefrompng('images/lbl.png');
    
    //qrcode
	$qrimg = imagecreatefrompng('protected/uploads/'.$data->codigo.'.png');
	
	$estampa = imagecreatefrompng('images/hlclogo1.png');
	
	// Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
	$margen_dcho = 165;//centered
	$margen_inf = 13;
	$sx = imagesx($estampa);
	$sy = imagesy($estampa);
    $ratio=1.6;
    $dw = imagesx($estampa)/$ratio;
    $dh = imagesy($estampa)/$ratio;
    
    // Copiar la imagen de la estampa sobre nuestra foto usando los índices de márgen y el
	// ancho de la foto para calcular la posición de la estampa.
    imagecopyresized($im, $estampa, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf,
        0, 0, $dw, $dh, imagesx($estampa), imagesy($estampa));

    
    // Establecer los márgenes para la estampa y obtener el alto/ancho de la imagen de la estampa
    $margen_dcho = 20;
	$margen_inf = 20;
	$sx = imagesx($qrimg);
	$sy = imagesy($qrimg);
    $ratio=1.1;
    $dw = imagesx($qrimg)*$ratio;
    $dh = imagesy($qrimg)*$ratio;
	// Copiar la imagen de la estampa sobre nuestra foto usando los índices de márgen y el
	// ancho de la foto para calcular la posición de la estampa. 
	imagecopyresized($im, $qrimg, imagesx($im) - $sx - $margen_dcho, imagesy($im) - $sy - $margen_inf,
        0, 0,$dw, $dh, imagesx($qrimg), imagesy($qrimg));

    //write text
    $black = imagecolorallocate($im, 0, 0, 0);
    imagettftext($im, 15, 0, 40, $dh-11, $black, "images/Ubuntu-M.ttf",substr($data->codigo,0, 4)); //centered +27
    imagettftext($im, 15, 0, 20, $dh+10, $black, "images/Ubuntu-M.ttf",substr($data->codigo,4));
    imagettftext($im, 11, 0, 40, $dh-100, $black, "images/Ubuntu-M.ttf","H L C");
    
	// Imprimir y liberar memoria
	header('Content-type: image/png');
	imagepng($im,$imgurl);
	imagedestroy($im);
	
    /**/
    
    }
    
return
    '<div class="graybox" style="border: solid 1px LightGray; width: 260px; padding: 5px; background:white;">'.
    "<div style='display:inline-block; width: 120px;text-align: center;font-size: medium;font-weight: bold;vertical-align: middle'>".
    "<img src='images/logoCarlota.jpg'>".
    "<br>".
    $data->codigo."<br></div>".
    "<div style='display:inline-block; width: 120px; padding: 10px;text-align: right;'>".
    (isset($data->codigo)?$blergh->widget('application.extensions.qrcode.QRCodeGenerator',array(
				'data' => $data->codigo,
				'subfolderVar' => true,
				'matrixPointSize' => 5,
			), true):'no image')."</div></div>";
}

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equipo-computo-grid',
	'dataProvider'=>$model,
	'columns'=>array(
        array(
			'name' => 'QR Code',
			'type'=>'raw',
            'value'=>"thirdbestdog(\$data, \$this->grid->controller, 0)
	",
		),
		array(
			'name' => 'codigo',
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		array(
			'name' => 'departamento',
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			//'filter'=>CHtml::activeTextField($model, 'departamento', 
            //     array('style'=>'width:88%')),
		),
		array(
			'name' => 'descripcionUbicacion',
			'headerHtmlOptions' => array('style' => 'width: 30%;'),
			//'filter'=>CHtml::activeTextField($model, 'descripcionUbicacion', 
            //     array('style'=>'width:88%')),
		),
		
		array(
			'header' => 'Tipo de equipo',
			'value' => "\$data->keyTE!='0'?(new CatTipoEquipo)->findByPk(\$data->keyTE)->descripcion:'-'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			//'filter'=>CHtml::activeDropDownList($model,'keyTE',CHtml::listData(CatTipoEquipo::model()->findAll(), 'keyTE', 'descripcion' ), array('prompt'=>'')),
		),
		array(
			'header' => 'Marca',
			'value' => "\$data->keyMA=='0'?'-':(new CatMarca)->findByPk(\$data->keyMA)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			//'filter'=>CHtml::activeDropDownList($model,'keyMA',CHtml::listData( CatMarca::model()->findAll(), 'keyMA', 'descripcion' ), array('prompt'=>'')),
		),
		array(
			'header' => 'Proveedor',
			'value' => "\$data->keyP?((new Proveedor)->findByPk(\$data->keyP)->razonSocial):'-'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			//'filter'=>CHtml::activeDropDownList($model,'keyP',CHtml::listData(Proveedor::model()->findAll('tipoProveedor="sistemas" order by razonSocial'), 'keyP', 'razonSocial' ), array('prompt'=>'')),
		),
		array(
			'header'=>'Status',
			'value' => "\$data->status=='A'?'Activo':'Inactivo'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
		/*
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'motherboard',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'motherboard')),
		'placement' => 'left',
			)
		),		
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'drives',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'drives')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'harddisk',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'harddisk')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'memoriaRam',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'memoriaRam')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyMAM',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'keyMAM')),
		'placement' => 'left',
			)
		),				array(
			'class' => 'editable.EditableColumn',
			'name' => 'monitor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'monitor')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'usuario')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'fecha')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'hora')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'entidad')),
		'placement' => 'left',
			)
		),				array(
			'class' => 'editable.EditableColumn',
			'name' => 'solicitud',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'solicitud')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionEntidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'descripcionEntidad')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionAlmacen',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'descripcionAlmacen')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoProcesador',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'tipoProcesador')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'velocidadProcesador',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'velocidadProcesador')),
		'placement' => 'left',
			)
		),		*/
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
		'url' =>$this->createUrl('EquipoComputo/create', array('model'=>'EquipoComputo')),)); ?>
</div>

