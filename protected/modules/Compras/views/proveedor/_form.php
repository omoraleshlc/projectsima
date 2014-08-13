<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>
<style>
	.columna{
		width: 30%;
	}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="columna">
	<div class="row">
		<?php echo $form->labelEx($model,'id_proveedor'); ?>
		<?php echo $form->textField($model,'id_proveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_proveedor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'razonSocial'); ?>
		<?php echo $form->textField($model,'razonSocial',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'razonSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rfc'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colonia'); ?>
		<?php echo $form->textField($model,'colonia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'colonia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoPostal'); ?>
		<?php echo $form->textField($model,'codigoPostal'); ?>
		<?php echo $form->error($model,'codigoPostal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono1'); ?>
		<?php echo $form->textField($model,'telefono1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telefono1'); ?>
	</div>
</div>
<div class="columna">
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::activeDropDownList($model,'status', array('A'=>'Activo','D'=>'Desactivada')); ?> 
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPersona'); ?>
		<?php echo CHtml::activeDropDownList($model,'tipoPersona', array('F'=>'Física','M'=>'Moral')); ?> 
		<?php echo $form->error($model,'tipoPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctaContable'); ?>
		<?php echo $form->textField($model,'ctaContable',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ctaContable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copiaCedula'); ?>
		<?php echo $form->textField($model,'copiaCedula',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'copiaCedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copiaActa'); ?>
		<?php echo $form->textField($model,'copiaActa',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'copiaActa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copiaHacienda'); ?>
		<?php echo $form->textField($model,'copiaHacienda',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'copiaHacienda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comprobanteDomicilio'); ?>
		<?php echo $form->textField($model,'comprobanteDomicilio',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comprobanteDomicilio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retenciones'); ?>
		<?php echo $form->textField($model,'retenciones',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'retenciones'); ?>
	</div>
</div>
<div class="columna">
	<div class="row">
		<?php echo $form->labelEx($model,'tipoProveedor'); ?>
		<?php echo CHtml::activeDropDownList($model,'status', array('productos'=>'Productos','ambos'=>'Desactivada', ''=>'Ninguno', 'sistemas'=>'Sistemas')); ?> 
		<?php echo $form->error($model,'tipoProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'procedenciaProveedor'); ?>
		<?php echo $form->textField($model,'procedenciaProveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'procedenciaProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_fiscal'); ?>
		<?php echo $form->textField($model,'id_fiscal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_fiscal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limite1'); ?>
		<?php echo $form->textField($model,'limite1'); ?>
		<?php echo $form->error($model,'limite1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limite2'); ?>
		<?php echo $form->textField($model,'limite2'); ?>
		<?php echo $form->error($model,'limite2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limite3'); ?>
		<?php echo $form->textField($model,'limite3'); ?>
		<?php echo $form->error($model,'limite3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'limite4'); ?>
		<?php echo $form->textField($model,'limite4'); ?>
		<?php echo $form->error($model,'limite4'); ?>
	</div>
</div>
	<div class="row buttons" style="clear:both">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
