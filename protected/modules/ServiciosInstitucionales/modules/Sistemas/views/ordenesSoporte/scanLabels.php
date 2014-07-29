<style>
	.items td {
		font-size: medium !important;
		padding: 0.5em !important;
	}
</style>
<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */
$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	'Escanear codigo de barras',
);
?>
<div style="text-align: center;">
	<h1>Escanear código de barras</h1>
<?php
	foreach(Yii::app()->user->getFlashes() as $key => $message) {
		echo '<div class="alert alert-warning" role="alert">' . $message . '</div>';
	}
?>

	<img src="" id="picture" style="border:1px solid silver; height: 200px; max-width: 500px; width: 70%" />
	<br/>
	<p id="textbit">&nbsp;</p>
	<input id="Take-Picture" type="file" accept="image/*;capture=camera" style="
    zoom: 1.5;"/>
	<!--input type="text" name="barcode" id="barcode"-->
		
	
<br/>

<?php
if (isset($listaOrdenes)){


	$vare=$this->createUrl('ObservacionesOrdenSoporte/createPopup');
	$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'ordenes-soporteenproceso-grid',
		'dataProvider'=>$listaOrdenes,
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
				'name' => 'codigo',
				'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
			),
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
			'header'=>'Status',
			'value' => "\$data->status=='pending'?'Pendiente':\$data->status=='ontransit'?'En proceso':'Terminada'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
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
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	));
	}
?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
		'url' =>$this->createUrl('OrdenesSoporte/create', array('model'=>'OrdenesSoporte')),)); ?>
</div>














<br/>
<?php
echo CHtml::beginForm();
echo CHtml::textField('codigo', '',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:60%; zoom:1.5','pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}', 'placeholder'=>'Codigo'
		)); ?>
<br/>
<?php echo CHtml::textField('id', '',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:60%; zoom:1.5','pattern'=> '[0-9]{1,4}', 'placeholder'=>'Id'
		)); ?>
<br/>
<br/>



<?php
	echo CHTML::button('Aceptar',  array('submit' => $this->createUrl("OrdenesSoporte/activarOrden"), 'style'=>'zoom:1.5',));
	
	echo CHtml::endForm();
?>	
	
	
	<br/><br/>
	
</div>	
		
		
		
<script src="protected/modules/ServiciosInstitucionales/modules/Sistemas/views/ordenesSoporte/DecoderWorker.js"></script>

<script type="text/javascript">
	var takePicture = document.querySelector("#Take-Picture"),
	showPicture = document.querySelector("#picture");
	Result = document.querySelector("#textbit");
	Canvas = document.createElement("canvas");
	Canvas.width=640;
	Canvas.height=480;
	var resultArray = [];
	ctx = Canvas.getContext("2d");
	var workerCount = 0;
	function receiveMessage(e) {
		if(e.data.success === "log") {
			console.log(e.data.result);
			return;
		}
		if(e.data.finished) {
			workerCount--;
			if(workerCount) {
				if(resultArray.length == 0) {
					DecodeWorker.postMessage({ImageData: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, Width: Canvas.width, Height: Canvas.height, cmd: "flip"});
				} else {
					workerCount--;
				}
			}
		}
		if(e.data.success){
			var tempArray = e.data.result;
			for(var i = 0; i < tempArray.length; i++) {
				if(resultArray.indexOf(tempArray[i]) == -1) {
					resultArray.push(tempArray[i]);
				}
			}
			document.querySelector("#codigo").value=e.data.code;
			Result.innerHTML=resultArray.join("<br />");
		}else{
			if(resultArray.length === 0 && workerCount === 0) {
				Result.innerHTML="Decoding failed.";
			}
		}
	}
	var DecodeWorker = new Worker("protected/modules/ServiciosInstitucionales/modules/Sistemas/views/ordenesSoporte/DecoderWorker.js");
	DecodeWorker.onmessage = receiveMessage;
	if(takePicture && showPicture) {
		takePicture.onchange = function (event) {
			var files = event.target.files
			if (files && files.length > 0) {
				file = files[0];
				try {
					var URL = window.URL || window.webkitURL;
					var imgURL = URL.createObjectURL(file);
					showPicture.src = imgURL;
					URL.revokeObjectURL(imgURL);
					DecodeBar()
				}
				catch (e) {
					try {
						var fileReader = new FileReader();
						fileReader.onload = function (event) {
							showPicture.src = event.target.result;
						};
						fileReader.readAsDataURL(file);
						DecodeBar()
					}
					catch (e) {
						Result.innerHTML = "Neither createObjectURL or FileReader are supported";
					}
				}
			}
		};
	}
	function DecodeBar(){
		Result.innerHTML="";
		showPicture.onload = function(){
			ctx.drawImage(showPicture,0,0,Canvas.width,Canvas.height);
			resultArray = [];
			workerCount = 2;
			DecodeWorker.postMessage({ImageData: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, Width: Canvas.width, Height: Canvas.height, cmd: "normal"});
		}
	}
</script>
