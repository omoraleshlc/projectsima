<?php
/* @var $this CatSoftwareController */
/* @var $data CatSoftware */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keySW')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keySW), array('view', 'id'=>$data->keySW)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>