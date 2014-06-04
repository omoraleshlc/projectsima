<?php
/* @var $this CatMarcaMonitorController */
/* @var $data CatMarcaMonitor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyMAM')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyMAM), array('view', 'id'=>$data->keyMAM)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>