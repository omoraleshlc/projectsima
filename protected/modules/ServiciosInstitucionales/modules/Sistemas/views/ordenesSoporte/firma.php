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

if(isset($_POST['output']) && isset($model)){
	$json = $_POST['output'];
	$img = sigJsonToImage($json, array('imageSize'=>array(930, 100)));
	$imgurl= 'protected/firmas/signature'.$model->keySOP.'.png';
	imagepng($img, $imgurl);
	imagedestroy($img);/**/
	Yii::app()->user->setFlash('success', "Firma guardada");
	$this->redirect(array('ordenesSoporte/activarOrden', 'field'=>$model->keySOP ));
	//$this->redirect('index.php?r=ServiciosInstitucionales/Sistemas/ordenesSoporte/admin');
	
}


Yii::app()->clientScript->registerScript('comprimir', "
		$(document).ready(function () {
				var options = {
					defaultAction : 'drawIt',
					lineTop : '70',
					errorMessageDraw: 'Firme, por favor.',
					errorMessage: 'Formulario inválido',
					validateFields: false,	
				};
				$('.sigPad').signaturePad(options);
			
		});
		
	");
?>

<script>

</script>
<h1>Firmar orden #<?php echo $model->keySOP; ?></h1>
<?php echo $model->observaciones; ?>
<div style="margin: auto; width: 80%">
<form method="post" action="" class="sigPad" id="signature_form">
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
