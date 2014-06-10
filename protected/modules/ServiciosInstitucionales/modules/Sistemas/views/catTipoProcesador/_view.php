<?php
/* @var $this CatTipoProcesadorController */
/* @var $data CatTipoProcesador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyTP')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyTP), array('view', 'id'=>$data->keyTP)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>