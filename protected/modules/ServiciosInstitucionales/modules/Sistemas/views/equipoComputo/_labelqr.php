<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computo'=>array('admin'),
	$model->keyIE,
);
?>
<script>
	window.print();
</script>
<div class="hidden-print">
	<h1>Etiqueta de Equipo de Cómputo #<?php echo $model->keyIE; ?></h1>
	<h2><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:
		<?php echo CHtml::link(CHtml::encode($model->codigo), array('view', 'id'=>$model->keyIE)); ?></h2>
</div>
<div class="view tetris-thumbnail <?php echo !isset($model->codigo)?'hidden-print':'' ?>">
	<div class="graybox" style="border: solid 1px LightGray;">
		<span class="visible-print-block" style="text-align:center;"><b>Hospital La Carlota</b></span>
		<span class="visible-print-block" style="text-align:center; zoom:0.7">Código de equipo</span><br/>
		<?php if(isset($model->codigo)) {
				$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				'data' => $model->codigo,
				'subfolderVar' => true,
				'matrixPointSize' => 5,
			));
			}else{
				echo '<br />Sin codigo asignado<br />';
			}
		?>
		<br />
		<b><?php echo CHtml::link(CHtml::encode($model->codigo),array('equipoComputo/update','id'=>$model->keyIE), array('style'=>'zoom:1.3;')); ?></b>
	</div>
</div>
<div class="row buttons hidden-print" style="clear:both">
	<?php echo CHtml::button('Regresar', array('submit' => array('equipoComputo/view','id'=>$model->keyIE))); ?>
	<input type="button" value="Imprimir" onclick="window.print();return false;" />
</div>

