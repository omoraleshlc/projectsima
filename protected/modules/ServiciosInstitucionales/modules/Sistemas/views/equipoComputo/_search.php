<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->label($model,'keyIE'); ?>
		<?php echo $form->textField($model,'keyIE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registro'); ?>
		<?php echo $form->textField($model,'registro',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyTE'); ?>
		<?php echo $form->textField($model,'keyTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyMA'); ?>
		<?php echo $form->textField($model,'keyMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motherboard'); ?>
		<?php echo $form->textField($model,'motherboard',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drives'); ?>
		<?php echo $form->textField($model,'drives',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harddisk'); ?>
		<?php echo $form->textField($model,'harddisk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'memoriaRam'); ?>
		<?php echo $form->textField($model,'memoriaRam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keyMAM'); ?>
		<?php echo $form->textField($model,'keyMAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionUbicacion'); ?>
		<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monitor'); ?>
		<?php echo $form->textField($model,'monitor',array('size'=>60,'maxlength'=>100)); ?>
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
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionEntidad'); ?>
		<?php echo $form->textField($model,'descripcionEntidad',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionAlmacen'); ?>
		<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoProcesador'); ?>
		<?php echo $form->textField($model,'tipoProcesador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'velocidadProcesador'); ?>
		<?php echo $form->textField($model,'velocidadProcesador',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
