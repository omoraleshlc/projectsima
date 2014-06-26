<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-soporte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'entidadSolicitud'); ?>
		<?php echo $form->textField($model,'entidadSolicitud',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidadSolicitud'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'keyTS'); ?>
		<?php echo $form->textField($model,'keyTS'); ?>
		<?php echo $form->error($model,'keyTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro'); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionSoporte'); ?>
		<?php echo $form->textField($model,'descripcionSoporte',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcionSoporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionTS'); ?>
		<?php echo $form->textField($model,'descripcionTS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionTS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioEjecutor'); ?>
		<?php echo $form->textField($model,'usuarioEjecutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usuarioEjecutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFinal'); ?>
		<?php echo $form->textField($model,'fechaFinal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenSoporte'); ?>
		<?php echo $form->textField($model,'almacenSoporte',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almacenSoporte'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
