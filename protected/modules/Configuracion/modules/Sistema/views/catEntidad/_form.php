<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-entidad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoEntidad'); ?>
		<?php echo $form->textField($model,'codigoEntidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'codigoEntidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionEntidad'); ?>
		<?php echo $form->textField($model,'descripcionEntidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcionEntidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fechaApertura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefijoEfectivo'); ?>
		<?php echo $form->textField($model,'prefijoEfectivo',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'prefijoEfectivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prefijoCxC'); ?>
		<?php echo $form->textField($model,'prefijoCxC',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'prefijoCxC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'digitosFactura'); ?>
		<?php echo $form->textField($model,'digitosFactura'); ?>
		<?php echo $form->error($model,'digitosFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaRecibo'); ?>
		<?php echo $form->textField($model,'rutaRecibo',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'rutaRecibo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rutaReciboPaquete'); ?>
		<?php echo $form->textField($model,'rutaReciboPaquete',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'rutaReciboPaquete'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusExistencias'); ?>
		<?php echo $form->textField($model,'statusExistencias',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'statusExistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ccosto'); ?>
		<?php echo $form->textField($model,'id_ccosto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'id_ccosto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->