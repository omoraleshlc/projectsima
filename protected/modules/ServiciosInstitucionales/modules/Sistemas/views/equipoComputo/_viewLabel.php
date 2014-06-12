<?php
/* @var $this EquipoComputoController */
/* @var $data EquipoComputo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionUbicacion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionUbicacion); ?>
	<br />





</div>
