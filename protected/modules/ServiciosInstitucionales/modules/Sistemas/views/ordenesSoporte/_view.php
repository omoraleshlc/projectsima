<?php
/* @var $this OrdenesSoporteController */
/* @var $data OrdenesSoporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keySOP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keySOP), array('view', 'id'=>$data->keySOP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidadSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->entidadSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacen')); ?>:</b>
	<?php echo CHtml::encode($data->almacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTS')); ?>:</b>
	<?php echo CHtml::encode($data->keyTS); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioEjecutor')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioEjecutor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenSoporte')); ?>:</b>
	<?php echo CHtml::encode($data->almacenSoporte); ?>
	<br />

	*/ ?>

</div>