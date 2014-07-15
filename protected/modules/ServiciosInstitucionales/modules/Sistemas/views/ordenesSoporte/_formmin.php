<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */
/* @var $form CActiveForm */

	Yii::app()->clientScript->registerScript('codeChange', "
		$('#OrdenesSoporte_codigo').change(function(){
			var codigo = document.getElementById('OrdenesSoporte_codigo').value;
			var entidadcode = codigo.substring(1, 3);
			$('#entidadSolicitud').val(entidadcode);
			$('#entidadSolicitud').change();
			return false;
		});
	");
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-soporte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php $this->widget('bootstrap.widgets.TbAlert', array(
		     'block'=>true, // display a larger alert block?
		     'fade'=>true, // use transitions?
		     'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
		     'alerts'=>array( // configurations per alert type
		         'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'),
		         'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
		     ),)
    ); ?>
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php
      echo CHtml::activeDropDownList($model,'almacenSoporte', array(''=>'Seleccione un departamento de soporte','HMANT' => 'Mantenimiento', 'HSIST' => 'Sistemas'));
     ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>12,'maxlength'=>12, 'pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}')); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'entidadSolicitud'); ?>
		<?php
			$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
			echo CHtml::dropDownList('entidadSolicitud','', $lista,
				array(
				'empty'=>'Seleccionar entidad',
				'required'=>'true',
				'ajax' => array(
					'type'=>'POST', //request type
					'url'=>CController::createUrl('ordenesSoporte/almacenesPorEntidad'), //url to call.
					//Style: CController::createUrl('currentController/methodToCall')
					'update'=>'#almacen', //selector to update
					//'data'=>'js:javascript statement' 
					//leave out the data key to pass all form values through
				))
			); 
			 echo '<br/>';
			//empty since it will be filled by the other dropdown
		?>
		
		
		<?php echo $form->error($model,'entidadSolicitud'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php 
		/*$lista=CHtml::listData(CatAlmacen::model()->findAll(), 'almacen', 'descripcion');
		echo CHtml::activeDropDownList($model,'almacen', $lista);*/
		echo CHtml::dropDownList('almacen','',  array(),
			array(
				'empty'=>'Seleccionar departamento',
				'required'=>'true',
				'ajax' => array(
					'type'=>'POST', //request type
				))
		);
		?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'keyTS'); ?>
		<?php 
		$lista=CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyTS', $lista);
		?> 
		<?php echo $form->error($model,'keyTS'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',  array('submit'=>'index.php?r=ServiciosInstitucionales/Sistemas/OrdenesSoporte/save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
