<?php
/* @var $this UsersModulosGeneralesController */
/* @var $model UsersModulosGenerales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-modulos-generales-form',
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>


    
<div class="dropdown-submenu">    
<?php 
//echo $form->dropDownList($model,'nombredelcampo', CHtml::listData(Entidades::model()->findAll(array('order' => 'descripcionEntidad')),'value','optionvalue'));
  
echo $form->dropDownList($model,'entidad', CHtml::listData(Entidades::model()->findAll(array('order' => 'descripcionEntidad')),'codigoEntidad','descripcionEntidad'));?>

</div>    
    
    
    
   
    
    

    
    
    

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->