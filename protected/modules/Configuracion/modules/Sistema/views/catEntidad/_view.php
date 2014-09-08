<?php
/* @var $this CatEntidadController */
/* @var $data CatEntidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyEntidades')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyEntidades), array('view', 'id'=>$data->keyEntidades)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoEntidad')); ?>:</b>
	<?php echo CHtml::encode($data->codigoEntidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionEntidad')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionEntidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaApertura')); ?>:</b>
	<?php echo CHtml::encode($data->fechaApertura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefijoEfectivo')); ?>:</b>
	<?php echo CHtml::encode($data->prefijoEfectivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prefijoCxC')); ?>:</b>
	<?php echo CHtml::encode($data->prefijoCxC); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('digitosFactura')); ?>:</b>
	<?php echo CHtml::encode($data->digitosFactura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaRecibo')); ?>:</b>
	<?php echo CHtml::encode($data->rutaRecibo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rutaReciboPaquete')); ?>:</b>
	<?php echo CHtml::encode($data->rutaReciboPaquete); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusExistencias')); ?>:</b>
	<?php echo CHtml::encode($data->statusExistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ccosto')); ?>:</b>
	<?php echo CHtml::encode($data->id_ccosto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	*/ ?>

</div>