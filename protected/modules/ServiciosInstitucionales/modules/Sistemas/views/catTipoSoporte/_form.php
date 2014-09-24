<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-tipo-soporte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
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
					'url'=>CController::createUrl('CatTipoSoporte/almacenesPorEntidad'), //url to call.
					'update'=>'#almacen', //selector to update
				))
			); 
			 echo '<br/>';
			//empty since it will be filled by the other dropdown
		?>
		
		<?php echo $form->error($model,'entidad'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php 
		$lista=CHtml::listData(CatAlmacen::model()->findAllByAttributes(array('entidad'=>$model->entidad)), 'almacen', 'descripcion');
		/*echo CHtml::activeDropDownList($model,'almacen', $lista);*/
		echo CHtml::dropDownList('almacen','almacen', $lista,
			array(
				//'required'=>'true',
				'ajax' => array(
					'type'=>'POST', //request type
				))
		);
		?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
