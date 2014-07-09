<?php
/* @var $this ObservacionesOrdenSoporteController */
/* @var $model ObservacionesOrdenSoporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observaciones-orden-soporte-formpop',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php if(isset($OrdenSoporteId)){ ?>
<script>
	alert(document.getElementById("ordenid").value);
</script>
<?php } ?>
	<?php echo $form->errorSummary($model); ?>
	<?php
		echo $OrdenSoporteId;
		echo '<br/>'; 
		print_r($_POST); 
		echo '<br/>'; 
		print_r($_GET); 
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
