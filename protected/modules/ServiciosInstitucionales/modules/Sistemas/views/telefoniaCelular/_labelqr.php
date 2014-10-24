<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo de Telefonía'=>array('admin'),
	$model->keyCTC,
);
?>
<script>
	window.print();
</script>
<div class="hidden-print">
	<h1>Etiqueta de Equipo de Telefonía #<?php echo $model->keyCTC; ?></h1>
	<h2><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:
		<?php echo CHtml::link(CHtml::encode($model->codigo), array('view', 'id'=>$model->keyCTC)); ?></h2>
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
		<b><?php echo CHtml::link(CHtml::encode($model->codigo),array('telefoniaCelular/update','id'=>$model->keyCTC), array('style'=>'zoom:1.3;')); ?></b>
	</div>
</div>
<div class="row buttons hidden-print" style="clear:both">
	<?php echo CHtml::button('Regresar', array('submit' => array('telefoniaCelular/view','id'=>$model->keyCTC))); ?>
	<input type="button" value="Imprimir" onclick="window.print();return false;" />
</div>

