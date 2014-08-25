<?php
/* @var $this EquipoComputoController */
/* @var $data EquipoComputo */
?>

<div class="view tetris-thumbnail <?php echo !isset($data->codigo)?'hidden-print':'' ?>">
	<a href="<?php echo Yii::app()->baseUrl.'/index.php?r=ServiciosInstitucionales/Sistemas/equipoComputo/update&id='.$data->keyIE; ?>">
		<div style="border: solid 1px LightGray ;">
		<span class="visible-print-block" style="text-align:center; text-decoration: none;"><b>Hospital La Carlota</b><br/>&nbsp;</span>
			<?php if(isset($data->codigo)) {
					$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
						'data' => $data->codigo,
						'subfolderVar' => true,
						'matrixPointSize' => 5,
					));
				}else
					echo '<br />Sin codigo asignado<br />';
			?>
			
			<?php
			
			/*$this->widget('application.extensions.qrcode.QRCode', array(
            'content' => 'http://google.com/VH0001', // qrcode data content
            'filename' => 'qrcode.png', // image name (make sure it should be .png)
            'width' => '150', // qrcode image height 
            'height' => '150', // qrcode image width 
            'encoding' => 'UTF-8', // qrcode encoding method 
            'correction' => 'H', // error correction level (L,M,Q,H)
            'watermark' => 'No' // set Yes if you want watermark image in Qrcode else 'No'. for 'Yes', you need to set watermark image $stamp in QRCode.php
        ));*/
			
			?>
			<br />
			<b><?php echo CHtml::link(CHtml::encode($data->codigo),array('equipoComputo/update','id'=>$data->keyIE)); ?></b>
			
		</div>
	</a>
	
	<span class="hidden-print"><?php echo CHtml::encode($data->departamento); ?> - <?php echo CHtml::encode($data->descripcionUbicacion); ?> </span>
	<br />
	<br />

</div>


