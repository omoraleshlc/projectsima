<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */
/* @var $form CActiveForm */


?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipo-computo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
<h2> Ubicación y detalles de registro </h1>

<div class="columna">
	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?><p class="note">Dejar vacío para generación automática al añadir un nuevo equipo.</p>
		<?php echo $form->textField($model,'codigo', array('size'=>12,'maxlength'=>12, 'style'=>'width: 50%',
		'pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}'
		)); ?>
		<?php 
			echo CHtml::button('Generar nuevo código', array('onclick'=>'document.getElementById("EquipoComputo_codigo").value = \''.$model->generarCodigo().'\';',));
		?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::activeDropDownList($model, 'status', array(
            'A'=>'Activo',
            'I'=>'Inactivo',
    )); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyP'); ?>
		<?php 
		$lista=CHtml::listData(Proveedor::model()->findAll('tipoProveedor="sistemas" order by razonSocial'), 'keyP', 'razonSocial');
		echo CHtml::activeDropDownList($model,'keyP', $lista);
		?> 
		<?php echo $form->error($model,'keyP'); ?>
	</div>

</div>
<br/><br/>
<div class="columna">
	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php
			$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
			echo CHtml::dropDownList('entidad',$model->entidad, $lista,
				array(
				'empty'=>'Seleccionar entidad',
				'required'=>'true',
				'ajax' => array(
					'type'=>'POST', //request type
					'url'=>CController::createUrl('equipoComputo/almacenesPorEntidad'), //url to call.
					//Style: CController::createUrl('currentController/methodToCall')
					'update'=>'#departamento', //selector to update
					//'data'=>'js:javascript statement' 
					//leave out the data key to pass all form values through
				))
			); 
			 echo '<br/>';
			//empty since it will be filled by the other dropdown
		?>
		
		<?php echo $form->error($model,'entidad'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php 
		$lista=CHtml::listData(CatAlmacen::model()->findAllByAttributes(array('entidad'=>$model->entidad)), 'departamento', 'descripcionAlmacen');
		/*echo CHtml::activeDropDownList($model,'almacen', $lista);*/
		echo CHtml::dropDownList('departamento','departamento', $lista,
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
		<?php echo $form->labelEx($model,'descripcionUbicacion'); ?>
		<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcionUbicacion'); ?>
	</div>
	

</div>
<br/><br/>
<div class="columna">
<h2> Información técnica </h1>

	<div class="row">
	
		<?php echo $form->labelEx($model,'keyTE'); ?>
		<?php 
		$lista=CHtml::listData(CatTipoEquipo::model()->findAll(), 'keyTE', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyTE', $lista);
		?>
		<?php echo $form->error($model,'keyTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyMA'); ?>
		<?php 
		$lista=CHtml::listData(CatMarca::model()->findAll(), 'keyMA', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyMA', $lista);
		?>
		<?php echo $form->error($model,'keyMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memoriaRam'); ?>
		<?php echo $form->textField($model,'memoriaRam'); ?>
		<?php echo $form->error($model,'memoriaRam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harddisk'); ?>
		<?php echo $form->textField($model,'harddisk'); ?>
		<?php echo $form->error($model,'harddisk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyMAM'); ?>
		<?php 
		$lista=CHtml::listData(CatMarcaMonitor::model()->findAll(), 'keyMAM', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyMAM', $lista);
		?>
		<?php echo $form->error($model,'keyMAM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monitor'); ?>
		<?php echo $form->textField($model,'monitor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'monitor'); ?>
	</div>
</div>
<div class="columna">
<br/><br/><br/>
	<div class="row">
		<?php echo $form->labelEx($model,'tipoProcesador'); ?>
		<?php echo $form->textField($model,'tipoProcesador'); ?>
		<?php echo $form->error($model,'tipoProcesador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motherboard'); ?>
		<?php echo $form->textField($model,'motherboard',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'motherboard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registro'); ?>
		<?php echo $form->textField($model,'registro',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drives'); ?>
		<?php echo $form->textField($model,'drives',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'drives'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'velocidadProcesador'); ?>
		<?php echo $form->textField($model,'velocidadProcesador',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'velocidadProcesador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitud'); ?>
		<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'solicitud'); ?>
	</div>
</div>


	<div class="row buttons" style="clear:both">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
