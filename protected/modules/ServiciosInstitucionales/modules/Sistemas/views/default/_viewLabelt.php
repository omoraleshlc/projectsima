<?php
/* @var $this EquipoComputoController */
/* @var $data EquipoComputo */
?>

<div class="view tetris-thumbnail">
	<a href="<?php echo Yii::app()->baseUrl.'/index.php?r=ServiciosInstitucionales/Sistemas/telefoniaCelular/update&id='.$data->keyCTC; ?>">
		<div style="border: solid 1px grey;">
			<?php if($data->codigo!='') {
					//echo '<img src="index.php?r=barcodegenerator/generatebarcode&code='.$data->codigo.'">';
					echo '<img src="index.php?r=barcodegenerator/generateBarcode&code=code39&o=1&t=30&text='.$data->codigo.'&f=2&a1=&a2=">';
				}else
			
					echo '<br />Sin codigo asignado<br />';
			?>
			<br />
			<b><?php echo CHtml::link(CHtml::encode($data->codigo),array('telefoniaCelular/update','id'=>$data->keyCTC)); ?></b>
		</div>
	</a>
	
	<?php echo CHtml::encode($data->descripcionUbicacion); ?> 
	
	<br />
	<br />

</div>


