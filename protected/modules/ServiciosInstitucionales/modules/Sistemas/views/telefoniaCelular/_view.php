<?php
/* @var $this TelefoniaCelularController */
/* @var $data TelefoniaCelular */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyCTC')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyCTC), array('view', 'id'=>$data->keyCTC)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('precioEquipo')); ?>:</b>
	<?php echo CHtml::encode($data->precioEquipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadAutorizada')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadAutorizada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costoRenta')); ?>:</b>
	<?php echo CHtml::encode($data->costoRenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaContratacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaContratacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plazoForzoso')); ?>:</b>
	<?php echo CHtml::encode($data->plazoForzoso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keySW')); ?>:</b>
	<?php echo CHtml::encode($data->keySW); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chip')); ?>:</b>
	<?php echo CHtml::encode($data->chip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imei')); ?>:</b>
	<?php echo CHtml::encode($data->imei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMA')); ?>:</b>
	<?php echo CHtml::encode($data->keyMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioCelular')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioCelular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionUbicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacen')); ?>:</b>
	<?php echo CHtml::encode($data->almacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoEntidad')); ?>:</b>
	<?php echo CHtml::encode($data->codigoEntidad); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
	<?php echo CHtml::encode($data->ruta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nTelefonico')); ?>:</b>
	<?php echo CHtml::encode($data->nTelefonico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registro')); ?>:</b>
	<?php echo CHtml::encode($data->registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicial')); ?>:</b>
	<?php echo CHtml::encode($data->fechaInicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaFinal')); ?>:</b>
	<?php echo CHtml::encode($data->fechaFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minutos')); ?>:</b>
	<?php echo CHtml::encode($data->minutos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('red')); ?>:</b>
	<?php echo CHtml::encode($data->red); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sms')); ?>:</b>
	<?php echo CHtml::encode($data->sms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internet')); ?>:</b>
	<?php echo CHtml::encode($data->internet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roaming')); ?>:</b>
	<?php echo CHtml::encode($data->roaming); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan')); ?>:</b>
	<?php echo CHtml::encode($data->plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moduloAdicional')); ?>:</b>
	<?php echo CHtml::encode($data->moduloAdicional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	*/ ?>

</div>
