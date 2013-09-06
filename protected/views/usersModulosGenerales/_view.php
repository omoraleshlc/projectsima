<?php
/* @var $this UsersModulosGeneralesController */
/* @var $data UsersModulosGenerales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMG')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyMG), array('view', 'id'=>$data->keyMG)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />


</div>