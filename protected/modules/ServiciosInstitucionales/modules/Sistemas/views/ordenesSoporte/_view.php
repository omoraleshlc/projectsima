<?php
/* @var $this OrdenesSoporteController */
/* @var $data OrdenesSoporte */
?>

<div class="view">
	
	<table style="margin:0; border-top: gray 1px solid;">
	
		<tr>
			<td style="width: 10%; font-size: 10px">
				<?php echo CHtml::encode($data->fecha); ?>
			</td>
			<td style="width: 10%; font-size: 10px">
				De <?php echo CHtml::encode($data->fechaInicio); ?> a <?php echo CHtml::encode($data->fechaFinal); ?>
			</td>
				
			
			<td style="width: 15%; font-size: 11px">
				<?php echo date_diff(new DateTime($data->fechaInicio), new DateTime($data->fechaFinal))->format("%d días, %h horas, %i minutos.") ?>
			</td>
			
			<td style="width: 10%; font-size: 10px">
				<?php echo CHtml::encode($data->descripcionAlmacen); ?>
			</td>
			
			<td style="width: 10%">
				<?php echo CHtml::encode(CatTipoSoporte::model()->find($data->keyTS)->descripcion) ?>
			</td>
			
			<td style="width: 10%">
				<?php echo CHtml::encode($data->codigo); ?>
			</td>
			
			<td style="width: 26%; font-size: 10px">
				<?php echo CHtml::encode($data->observaciones); ?>
			</td>
			
			<td style="">
				<?php echo CHtml::encode($data->usuario); ?>
			</td>
		</tr>
		
		
	</table>
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keySOP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keySOP), array('view', 'id'=>$data->keySOP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidadSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->entidadSolicitud); ?>
	<br />
	
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacen')); ?>:</b>
	<?php echo CHtml::encode($data->almacen); ?>
	<br />

	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registro')); ?>:</b>
	<?php echo CHtml::encode($data->registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionSoporte')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionSoporte); ?>
	<br />

	
	
	<br />

	
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionTS')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionTS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioEjecutor')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioEjecutor); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenSoporte')); ?>:</b>
	<?php echo CHtml::encode($data->almacenSoporte); ?>
	<br />

	*/ ?>

</div>
