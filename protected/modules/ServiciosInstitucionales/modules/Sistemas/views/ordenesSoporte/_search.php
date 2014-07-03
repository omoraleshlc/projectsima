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
<style>
	.columna{
		width: 30%; 
	}
</style>
<div class="columna">
	<div class="row">
		<?php echo $form->label($model,'keySOP'); ?>
		<?php echo $form->textField($model,'keySOP'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>12,'maxlength'=>12)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'entidadSolicitud'); ?>
		<?php 
			$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
			echo CHtml::activeDropDownList($model,'entidadSolicitud', CMap::mergeArray(array(''=>'Selecciona'),$lista));
			?> 
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacen'); ?>
		<?php 
			$lista=CHtml::listData(CatAlmacen::model()->findAll(), 'almacen', 'descripcion');
			echo CHtml::activeDropDownList($model,'almacen', CMap::mergeArray(array(''=>'Selecciona'),$lista));
			?> 
	</div>

		<div class="row">
		<?php echo $form->label($model,'keyTS'); ?>
		<?php 
			$lista=CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion');
			echo CHtml::activeDropDownList($model,'keyTS', CMap::mergeArray(array(''=>'Selecciona'),$lista));
			?> 
	</div>
</div>

<div class="columna">


	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo CHtml::activeTextArea($model,'descripcionSoporte', $lista); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>
	
		<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo CHtml::dropDownList('status','', array(''=>'Selecciona','pending'=>'Pendiente','ontransit'=>'En proceso','Done'=>'Terminada')); ?>
	</div>


</div>

<div class="columna">


	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php 
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		 	$this->widget('CJuiDateTimePicker',array(
				'model'=>$model, //Model object
				'attribute'=>'fecha', //attribute name
				'mode'=>'date', //use "time","date" or "datetime" (default)
				'options'=>array(
        			'dateFormat' => 'yy-mm-dd') // jquery plugin options
			));
		?>
	</div>
	
		<div class="row">	
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php 
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		 	$this->widget('CJuiDateTimePicker',array(
				'model'=>$model, //Model object
				'attribute'=>'fechaInicio', //attribute name
				'mode'=>'datetime', //use "time","date" or "datetime" (default)
				'options'=>array('timeFormat'=>'hh:mm:ss',
        			'dateFormat' => 'yy-mm-dd') // jquery plugin options
			));
		?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFinal'); ?>
		<?php 
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		 	$this->widget('CJuiDateTimePicker',array(
				'model'=>$model, //Model object
				'attribute'=>'fechaFinal', //attribute name
				'mode'=>'datetime', //use "time","date" or "datetime" (default)
				'options'=>array('timeFormat'=>'hh:mm:ss',
        			'dateFormat' => 'yy-mm-dd') // jquery plugin options
			));
		?>
	</div>




</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
