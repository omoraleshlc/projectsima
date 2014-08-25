<?php
/* @var $this EquipoComputoController */
/* @var $data EquipoComputo */
?>

<div class="view tetris-thumbnail <?php echo !isset($data->codigo)?'hidden-print':'' ?>">
	<a href="<?php echo Yii::app()->baseUrl.'/index.php?r=ServiciosInstitucionales/Sistemas/telefoniaCelular/update&id='.$data->keyCTC; ?>">
		<div style="border: solid 1px LightGray ;">
		<span class="visible-print-block" style="text-align:center;"><b>Hospital La Carlota</b><br/>&nbsp;</span>
			<?php if(isset($data->codigo)) {
					$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
						'data' => $data->codigo,
						'subfolderVar' => true,
						'matrixPointSize' => 5,
					));
				}else
					echo '<br />Sin codigo asignado<br />';
			?>
			<br />
			<b><?php echo CHtml::link(CHtml::encode($data->codigo),array('telefoniaCelular/update','id'=>$data->keyCTC)); ?></b>
		</div>
	</a>
	
	<span class="hidden-print"><?php echo CHtml::encode($data->departamento); ?> - <?php echo CHtml::encode($data->descripcionUbicacion); ?> </span>
	<br />
	<br />

</div>


