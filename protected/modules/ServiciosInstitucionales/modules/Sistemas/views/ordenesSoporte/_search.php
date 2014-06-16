<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keySOP'); ?>
		<?php echo $form->textField($model,'keySOP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidadSolicitud'); ?>
		<?php echo $form->textField($model,'entidadSolicitud',array('size'=>2,'maxlength'=>2)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyTS'); ?>
		<?php echo $form->textField($model,'keyTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registro'); ?>
		<?php echo $form->textField($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionSoporte'); ?>
		<?php echo $form->textField($model,'descripcionSoporte',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionAlmacen'); ?>
		<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionTS'); ?>
		<?php echo $form->textField($model,'descripcionTS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioEjecutor'); ?>
		<?php echo $form->textField($model,'usuarioEjecutor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFinal'); ?>
		<?php echo $form->textField($model,'fechaFinal',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenSoporte'); ?>
		<?php echo $form->textField($model,'almacenSoporte',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
