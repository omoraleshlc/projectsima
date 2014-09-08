<?php
/* @var $this UsuariosSimaController */
/* @var $model UsuariosSima */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-sima-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwd'); ?>
		<?php echo $form->passwordField($model,'passwd',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'passwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aPaterno'); ?>
		<?php echo $form->textField($model,'aPaterno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'aPaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aMaterno'); ?>
		<?php echo $form->textField($model,'aMaterno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'aMaterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'llave'); ?>
		<?php echo $form->textField($model,'llave',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'llave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ejercicio'); ?>
		<?php echo $form->textField($model,'ejercicio',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ejercicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoUsuario'); ?>
		<?php echo $form->textField($model,'tipoUsuario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tipoUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
		<?php echo $form->textField($model,'fechaIngreso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaSalida'); ?>
		<?php echo $form->textField($model,'fechaSalida',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaIngreso'); ?>
		<?php echo $form->textField($model,'horaIngreso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'horaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaSalida'); ?>
		<?php echo $form->textField($model,'horaSalida',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'horaSalida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roles'); ?>
		<?php echo $form->textField($model,'roles',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'roles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenSoporteDefault'); ?>
		<?php echo $form->textField($model,'almacenSoporteDefault',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almacenSoporteDefault'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
