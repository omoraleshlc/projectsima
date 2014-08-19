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
<style>
div.form .columna select, div.form .columna input[type='text'], div.form .columna input[type='password']
{
	width: 96%;
}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ordenes-soporte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>
	<?php echo $form->errorSummary($model); ?>
<div class="columna">		
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',
			array('size'=>12,'maxlength'=>12, 'pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}',
			'ajax' => array(
					'type'=>'POST', //request type
				)
		)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'entidadSolicitud'); ?>
		<?php
			$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
			echo CHtml::dropDownList('entidadSolicitud',$model->entidadSolicitud, $lista,
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
		$lista=CHtml::listData(CatAlmacen::model()->findAllByAttributes(array('entidad'=>$model->entidadSolicitud)), 'almacen', 'descripcion');
		/*echo CHtml::activeDropDownList($model,'almacen', $lista);*/
		echo CHtml::dropDownList('almacen','almacen', $lista,
			array(
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
		$lista=CHtml::listData(CatTipoSoporte::model()->findAll('almacen="'.UsuariosSima::model()->find("usuario='" . Yii::app()->user->name . "'")->almacenSoporteDefault.'"'), 'keyRSA', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyTS', $lista);
		?> 
		<?php echo $form->error($model,'keyTS'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>
</div>

<div class="columna">	
	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo CHtml::activeDateField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora', array ('pattern'=>'[0-2][0-9]:[0-5][0-9] (am|pm)' )); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::activeDropDownList($model,'status', array('pending'=>'Pendiente','ontransit'=>'En proceso','done'=>'Terminada')); ?> 
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioEjecutor'); ?>
		<?php echo $form->textField($model,'usuarioEjecutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'usuarioEjecutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
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
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fechaFinal'); ?>
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
		<?php echo $form->error($model,'fechaFinal'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'almacenSoporte'); ?>
		<?php 
		echo CHtml::activeDropDownList($model,'almacenSoporte', array(''=>'Seleccione un departamento de soporte','HMANT' => 'Mantenimiento', 'HSIST' => 'Sistemas'));
		?>
		<?php echo $form->error($model,'almacenSoporte'); ?>
	</div>
</div>
	<div class="row buttons" style="clear:both">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
