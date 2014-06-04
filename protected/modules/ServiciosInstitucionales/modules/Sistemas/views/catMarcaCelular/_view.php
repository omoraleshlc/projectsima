<?php
/* @var $this CatMarcaCelularController */
/* @var $data CatMarcaCelular */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyMA), array('view', 'id'=>$data->keyMA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>