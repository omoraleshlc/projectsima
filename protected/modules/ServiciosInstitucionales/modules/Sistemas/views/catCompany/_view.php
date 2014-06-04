<?php
/* @var $this CatCompanyController */
/* @var $data CatCompany */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyTS), array('view', 'id'=>$data->keyTS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>