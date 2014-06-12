<?php
/* @var $this CatEntidadController */
/* @var $model CatEntidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyEntidades'); ?>
		<?php echo $form->textField($model,'keyEntidades'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoEntidad'); ?>
		<?php echo $form->textField($model,'codigoEntidad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionEntidad'); ?>
		<?php echo $form->textField($model,'descripcionEntidad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaApertura'); ?>
		<?php echo $form->textField($model,'fechaApertura',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prefijoEfectivo'); ?>
		<?php echo $form->textField($model,'prefijoEfectivo',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prefijoCxC'); ?>
		<?php echo $form->textField($model,'prefijoCxC',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'digitosFactura'); ?>
		<?php echo $form->textField($model,'digitosFactura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaRecibo'); ?>
		<?php echo $form->textField($model,'rutaRecibo',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rutaReciboPaquete'); ?>
		<?php echo $form->textField($model,'rutaReciboPaquete',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusExistencias'); ?>
		<?php echo $form->textField($model,'statusExistencias',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cp'); ?>
		<?php echo $form->textField($model,'cp',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ccosto'); ?>
		<?php echo $form->textField($model,'id_ccosto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->