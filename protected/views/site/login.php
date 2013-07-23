<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);

//Yii::app()->user->name;
?>















<div class="container" align="center">
<p>Escribe tu usuario y contraseña.</p>




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
    
        
        
        
  
    
    <div class="controls">
    <?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
    </div>
   
 
    
    <div class="controls">
    <?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
    </div>

<div class="buttons">
    
    <?php echo CHtml::submitButton('LOGIN'); ?>
    </div>

    




<?php $this->endWidget(); ?>
    
    
    
</div><!-- form -->
