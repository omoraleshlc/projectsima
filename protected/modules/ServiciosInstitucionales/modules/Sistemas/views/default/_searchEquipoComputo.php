<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="search-div">
	
		<div class="row">
				<?php echo $form->label($model,'codigo'); ?>
				<?php echo $form->textField($model,'codigo',array('size'=>50,'maxlength'=>50)); ?>
			</div>
			
		<div class="columna">
			<div class="row">
				<?php echo $form->label($model,'status'); ?>
				<?php echo CHtml::activeDropDownList($model, 'status', array(
            'A'=>'Activo',
            'I'=>'Inactivo',
    )); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'departamento'); ?>
				<?php echo $form->textField($model,'departamento',array('size'=>50,'maxlength'=>50)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->label($model,'descripcionUbicacion'); ?>
				<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>200)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->label($model,'descripcionAlmacen'); ?>
				<?php echo $form->textField($model,'descripcionAlmacen',array('size'=>60,'maxlength'=>200)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->label($model,'entidad'); ?>
				<?php 
				$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
				echo CHtml::activeDropDownList($model,'entidad', $lista);
				?> 
			</div>
		
		</div>
		<div class="columna">
			
			<div class="row">
				<?php echo $form->label($model,'keyTE'); ?>
				<?php 
				$lista=CHtml::listData(CatTipoEquipo::model()->findAll(), 'keyTE', 'descripcion');
				echo CHtml::activeDropDownList($model,'keyTE', $lista);
				?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'keyMA'); ?>
				<?php 
		$lista=CHtml::listData(CatMarca::model()->findAll(), 'keyMA', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyMA', $lista);
		?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'memoriaRam'); ?>
				<?php echo $form->textField($model,'memoriaRam'); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'harddisk'); ?>
				<?php echo $form->textField($model,'harddisk'); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'keyMAM'); ?>
				<?php 
		$lista=CHtml::listData(CatMarcaMonitor::model()->findAll(), 'keyMAM', 'descripcion');
		echo CHtml::activeDropDownList($model,'keyMAM', $lista);
		?>
			</div>
			<br/>
		</div>
		
		
		
		
		
		<div class="columna">	

		<div class="row">
				<?php echo $form->label($model,'monitor'); ?>
				<?php echo $form->textField($model,'monitor',array('size'=>60,'maxlength'=>100)); ?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'tipoProcesador'); ?>
				<?php echo $form->textField($model,'tipoProcesador'); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'velocidadProcesador'); ?>
				<?php echo $form->textField($model,'velocidadProcesador',array('size'=>20,'maxlength'=>20)); ?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'motherboard'); ?>
				<?php echo $form->textField($model,'motherboard',array('size'=>60,'maxlength'=>200)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'drives'); ?>
				<?php echo $form->textField($model,'drives',array('size'=>60,'maxlength'=>100)); ?>
			</div>

		</div>
		
		<br/>
		<div class="columna">

			<div class="row">
				<?php echo $form->label($model,'usuario'); ?>
				<?php echo $form->textField($model,'usuario',array('size'=>30,'maxlength'=>30)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->label($model,'fecha'); ?>
				<?php echo $form->textField($model,'fecha',array('size'=>10,'maxlength'=>10)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'hora'); ?>
				<?php echo $form->textField($model,'hora',array('size'=>10,'maxlength'=>10)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'solicitud'); ?>
				<?php echo $form->textField($model,'solicitud',array('size'=>20,'maxlength'=>20)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'descripcionEntidad'); ?>
				<?php echo $form->textField($model,'descripcionEntidad',array('size'=>60,'maxlength'=>200)); ?>
			</div>

			

			

		</div>
			<div class="row buttons">
				<?php echo CHtml::submitButton('Buscar'); ?>
			</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
