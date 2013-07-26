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
$ce=new Entidades();    
echo $form->dropDownList(
                    $ce,
                    'descripcionEntidad', 
                    CHtml::listData($ce::model()->findAll(array('order'=>'descripcionEntidad ASC')),
                    'codigoEntidad', 
                    'descripcionEntidad'), 
array('empty'=>'Selecciona la Entidad')); 
?>
    </div>    
    

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->