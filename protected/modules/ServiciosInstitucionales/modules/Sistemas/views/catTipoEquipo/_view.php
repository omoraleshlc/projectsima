<?php
/* @var $this CatTipoEquipoController */
/* @var $data CatTipoEquipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyTE), array('view', 'id'=>$data->keyTE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>