<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'telefonia-celular-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<h2>Ubicación y detalles de registro</h2>
	
	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo', array('size'=>12,'maxlength'=>12, 'style'=>'width:50%',
		'pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}'
		)); ?>
		<?php 
			echo CHtml::button('Generar nuevo código', array('onclick'=>'document.getElementById("TelefoniaCelular_codigo").value = \''.$model->generarCodigo().'\';',));
		?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'usuarioCelular'); ?>
		<?php echo $form->textField($model,'usuarioCelular',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'usuarioCelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nTelefonico'); ?>
		<?php echo $form->textField($model,'nTelefonico',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nTelefonico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionUbicacion'); ?>
		<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcionUbicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php 
		$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
		echo CHtml::activeDropDownList($model,'entidad', $lista);
		?> 
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<h2>Información de contratación</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'precioEquipo'); ?>
		<?php echo $form->textField($model,'precioEquipo',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'precioEquipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costoRenta'); ?>
		<?php echo $form->textField($model,'costoRenta',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'costoRenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidadAutorizada'); ?>
		<?php echo $form->textField($model,'cantidadAutorizada',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'cantidadAutorizada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plazoForzoso'); ?>
		<?php echo $form->textField($model,'plazoForzoso'); ?>
		<?php echo $form->error($model,'plazoForzoso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minutos'); ?>
		<?php echo $form->textField($model,'minutos'); ?>
		<?php echo $form->error($model,'minutos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaContratacion'); ?>
		<?php 
  			Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
		         'attribute'=>'fechaContratacion',
		         'value'=>$model->fechaContratacion,
		         'options'=>array('autoSize'=>true,
		             'dateFormat'=>'yy-mm-dd',
		             'defaultDate'=>$model->fechaContratacion,
		             'buttonText'=>'Fecha',
		             'showAnim'=>'fold',
		             'showOn'=>'button',
		             'showButtonPanel'=>true,
		             'yearRange'=>'1950',
                ),
                
                'language'=>Yii::app()->getLanguage(),
           ));
			?>
		<?php echo $form->error($model,'fechaContratacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicial'); ?>
		<?php 
  			Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
		         'attribute'=>'fechaInicial',
		         'value'=>$model->fechaInicial,
		         'options'=>array('autoSize'=>true,
		             'dateFormat'=>'yy-mm-dd',
		             'defaultDate'=>$model->fechaInicial,
		             'buttonText'=>'Fecha',
		             'showAnim'=>'fold',
		             'showOn'=>'button',
		             'showButtonPanel'=>true,
		             'yearRange'=>'1950',
                ),
                
                'language'=>Yii::app()->getLanguage(),
           ));
			?>
		<?php echo $form->error($model,'fechaInicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFinal'); ?>
		<?php 
  			Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$model,
		         'attribute'=>'fechaFinal',
		         'value'=>$model->fechaFinal,
		         'options'=>array('autoSize'=>true,
		             'dateFormat'=>'yy-mm-dd',
		             'defaultDate'=>$model->fechaFinal,
		             'buttonText'=>'Fecha',
		             'showAnim'=>'fold',
		             'showOn'=>'button',
		             'showButtonPanel'=>true,
		             'yearRange'=>'1950',
                ),
                
                'language'=>Yii::app()->getLanguage(),
           ));
			?>
		<?php echo $form->error($model,'fechaFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plan'); ?>
		<?php echo $form->textField($model,'plan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'plan'); ?>
	</div>

<h2>Información técnica</h2>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chip'); ?>
		<?php echo $form->textField($model,'chip',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'chip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imei'); ?>
		<?php echo $form->textField($model,'imei',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'imei'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyMA'); ?>
		<?php  $lista=CHtml::listData(CatMarcaCelular::model()->findAll(), 'keyMA', 'descripcion');
			echo CHtml::activeDropDownList($model,'keyMA', $lista); ?>
		<?php echo $form->error($model,'keyMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ruta'); ?>
		<?php echo $form->textField($model,'ruta',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moduloAdicional'); ?>
		<?php echo $form->textField($model,'moduloAdicional',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'moduloAdicional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roaming'); ?>
		<?php echo $form->checkBox($model,'roaming'); ?>
		<?php echo $form->error($model,'roaming'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sms'); ?>
		<?php echo $form->textField($model,'sms',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'sms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'red'); ?>
		<?php echo $form->textField($model,'red',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'red'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internet'); ?>
		<?php echo $form->textField($model,'internet',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'internet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keySW'); ?>
		<?php  $lista=CHtml::listData(CatSoftware::model()->findAll(), 'keySW', 'descripcion');
			echo CHtml::activeDropDownList($model,'keySW', $lista); ?>
		<?php echo $form->error($model,'keySW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoEntidad'); ?>
		<?php echo $form->textField($model,'codigoEntidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'codigoEntidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro'); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud'); ?>
		<?php echo $form->error($model,'solicitud'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
