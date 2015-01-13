<?php
/* @var $this EquipoComputoController */
/* @var $data EquipoComputo */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('keyIE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyIE), array('view', 'id'=>$data->keyIE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->keyIE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registro')); ?>:</b>
	<?php echo CHtml::encode($data->registro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTE')); ?>:</b>
	<?php echo CHtml::encode($data->keyTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMA')); ?>:</b>
	<?php echo CHtml::encode($data->keyMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motherboard')); ?>:</b>
	<?php echo CHtml::encode($data->motherboard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drives')); ?>:</b>
	<?php echo CHtml::encode($data->drives); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('harddisk')); ?>:</b>
	<?php echo CHtml::encode($data->harddisk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memoriaRam')); ?>:</b>
	<?php echo CHtml::encode($data->memoriaRam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMAM')); ?>:</b>
	<?php echo CHtml::encode($data->keyMAM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionUbicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monitor')); ?>:</b>
	<?php echo CHtml::encode($data->monitor); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionEntidad')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionEntidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoProcesador')); ?>:</b>
	<?php echo CHtml::encode($data->tipoProcesador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('velocidadProcesador')); ?>:</b>
	<?php echo CHtml::encode($data->velocidadProcesador); ?>
	<br />

	*/ ?>

</div>
