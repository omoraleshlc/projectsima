<?php
require_once 'signature-to-image.php';
/* @var $this OrdenesSoporteController */
/* @var $data OrdenesSoporte */
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery.signaturepad.js');
$cs->registerScriptFile($baseUrl.'/js/json2.min.js');
$cs->registerCssFile($baseUrl.'/css/jquery.signaturepad.css');

?>

<?php
/* @var $this DefaultController */

if(isset($_POST['output']) ){
	$json = $_POST['output'];
	$img = sigJsonToImage($json, array('imageSize'=>array(930, 100)));
	imagepng($img, 'protected/firmas/signature.png');
	imagedestroy($img);/**/
}


Yii::app()->clientScript->registerScript('comprimir', "
		$(document).ready(function () {
				var options = {
					defaultAction : 'drawIt',
					lineTop : '70',
					errorMessageDraw: 'Firme, por favor.',
					errorMessage: 'Formulario inválido'	
				};
				$('.sigPad').signaturePad(options);
			
		});
		
	");
?>

<script>

</script>

<div style="margin: auto; width: 80%">
<form method="post" action="" class="sigPad" id="signature_form">
  <label for="name">Escribe tu nombre</label>
  <input type="text" name="name" id="name" class="name">
  <p class="typeItDesc">Revisa tu firma</p>
  <p class="drawItDesc">Dibuja tu firma</p>
  <ul class="sigNav">
    <li class="typeIt"><a href="#type-it" class="current">Escribir</a></li>
    <li class="drawIt"><a href="#draw-it">Dibujar</a></li>
    <li class="clearButton"><a href="#clear">Limpiar</a></li>
  </ul>
  <div class="sig sigWrapper">
    <div class="typed"></div>
    <canvas class="pad" width="930" height="100"></canvas>
    <input type="hidden" id="output" name="output" class="output" onchange="alert('hi')">
  </div>
  <button type="submit">Acepto el trabajo realizado de esta orden de soporte.</button>
</form>
	
</div>
