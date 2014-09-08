<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */
/* @var $form CActiveForm */
$observaciones = new ObservacionesOrdenSoporte();
				$observaciones = $observaciones::model();
				$model=$observaciones;
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observaciones-orden-soporte-formpop',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
<br/>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Aceptar', array ('onclick'=>"window.parent.$('#myModal').modal('hide');", 'class'=>"btn btn-default" )); ?>
		&nbsp;
		<input type="button" class="btn btn-default" data-dismiss="modal" onclick="window.parent.$('#myModal').modal('hide');" value="Cancelar">
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


