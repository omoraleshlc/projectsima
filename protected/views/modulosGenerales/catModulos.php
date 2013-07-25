<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of catModulos
 *
 * @author oamg
 */
?>
<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Ajustar Cuentas';
$this->breadcrumbs=array(
	'ajustarCuentas',
);
?>
<?php
/* @var $this UsersModulosGeneralesController */
/* @var $model UsersModulosGenerales */
/* @var $form CActiveForm */
//echo Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
?>
    <div class="hero-unit">
    <h1>Roles del Sitio</h1>
    <p>Administración Hospitalaria</p>
   
    
    </div>


<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true,
    'focus'=>array($model,'descripcion'),
)); ?>
<div class="row">
	 <?php echo $form->labelEx($model,'nombre_personal'); ?>
	 <?php echo $form->textField($model,'descripcion'); ?>
	 <?php echo $form->error($model,'nombre_personal'); ?>
</div>

<div class="row buttons">
<?php echo CHtml::submitButton('Submit'); ?>
</div> 
    <?php $this->endWidget(); ?> 
</div>



