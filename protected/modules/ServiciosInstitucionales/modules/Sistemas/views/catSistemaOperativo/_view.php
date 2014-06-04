<?php
/* @var $this CatSistemaOperativoController */
/* @var $data CatSistemaOperativo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyOS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyOS), array('view', 'id'=>$data->keyOS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>