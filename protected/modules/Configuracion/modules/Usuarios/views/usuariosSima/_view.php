<?php
/* @var $this UsuariosSimaController */
/* @var $data UsuariosSima */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('folio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->folio), array('view', 'id'=>$data->folio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->aPaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aMaterno')); ?>:</b>
	<?php echo CHtml::encode($data->aMaterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('llave')); ?>:</b>
	<?php echo CHtml::encode($data->llave); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ejercicio')); ?>:</b>
	<?php echo CHtml::encode($data->ejercicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipoUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->horaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->horaSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roles')); ?>:</b>
	<?php echo CHtml::encode($data->roles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenSoporteDefault')); ?>:</b>
	<?php echo CHtml::encode($data->almacenSoporteDefault); ?>
	<br />

	*/ ?>

</div>
