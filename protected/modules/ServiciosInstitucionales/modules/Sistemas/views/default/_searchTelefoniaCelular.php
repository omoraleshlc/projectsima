<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */
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
				<?php echo $form->label($model,'usuarioCelular'); ?>
				<?php echo $form->textField($model,'usuarioCelular',array('size'=>30,'maxlength'=>30)); ?>
			</div>
	
			<div class="row">
				<?php echo $form->label($model,'nTelefonico'); ?>
				<?php echo $form->textField($model,'nTelefonico',array('size'=>15,'maxlength'=>15)); ?>
			</div>
	
			<div class="row">
				<?php echo $form->label($model,'descripcionUbicacion'); ?>
				<?php echo $form->textField($model,'descripcionUbicacion',array('size'=>60,'maxlength'=>100)); ?>
			</div>
	
			<div class="row">
				<?php echo $form->label($model,'almacen'); ?>
				<?php echo $form->textField($model,'almacen',array('size'=>30,'maxlength'=>30)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'codigoEntidad'); ?>
				<?php 
					$lista=CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad');
					echo CHtml::activeDropDownList($model,'entidad', $lista);
				?> 
			</div>
		</div>
		
		<div class="columna">
			<div class="row">
				<?php echo $form->label($model,'precioEquipo'); ?>
				<?php echo $form->textField($model,'precioEquipo',array('size'=>6,'maxlength'=>6)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->label($model,'costoRenta'); ?>
				<?php echo $form->textField($model,'costoRenta',array('size'=>6,'maxlength'=>6)); ?>
			</div>
			
			<div class="row">
				<?php echo $form->label($model,'cantidadAutorizada'); ?>
				<?php echo $form->textField($model,'cantidadAutorizada',array('size'=>6,'maxlength'=>6)); ?>
			</div>
	
			<div class="row">
				<?php echo $form->label($model,'plazoForzoso'); ?>
				<?php echo $form->textField($model,'plazoForzoso'); ?>
			</div>
	
			<div class="row">
				<?php echo $form->label($model,'fechaContratacion'); ?>
				<?php echo $form->textField($model,'fechaContratacion',array('size'=>10,'maxlength'=>10)); ?>
			</div>
			
		</div>
		
		<div class="columna">
	
			<div class="row">
				<?php echo $form->label($model,'minutos'); ?>
				<?php echo $form->textField($model,'minutos'); ?>
			</div>

			
			<div class="row">
				<?php echo $form->label($model,'fechaInicial'); ?>
				<?php echo $form->textField($model,'fechaInicial',array('size'=>10,'maxlength'=>10)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'fechaFinal'); ?>
				<?php echo $form->textField($model,'fechaFinal',array('size'=>10,'maxlength'=>10)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'plan'); ?>
				<?php echo $form->textField($model,'plan',array('size'=>10,'maxlength'=>10)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'company'); ?>
				<?php echo $form->textField($model,'company',array('size'=>5,'maxlength'=>5)); ?>
			</div>
			
		</div>
		
		<div class="columna">

			<div class="row">
				<?php echo $form->label($model,'modelo'); ?>
				<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>100)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'chip'); ?>
				<?php echo $form->textField($model,'chip',array('size'=>25,'maxlength'=>25)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'imei'); ?>
				<?php echo $form->textField($model,'imei',array('size'=>25,'maxlength'=>25)); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'keyMA'); ?>
				<?php echo $form->textField($model,'keyMA'); ?>
			</div>

			<div class="row">
				<?php echo $form->label($model,'ruta'); ?>
				<?php echo $form->textField($model,'ruta',array('size'=>50,'maxlength'=>50)); ?>
			</div>
			
		</div>
		
		<div class="columna">
	
		<div class="row">
			<?php echo $form->label($model,'moduloAdicional'); ?>
			<?php echo $form->textField($model,'moduloAdicional',array('size'=>60,'maxlength'=>200)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'roaming'); ?>
			<?php echo $form->textField($model,'roaming',array('size'=>2,'maxlength'=>2)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'sms'); ?>
			<?php echo $form->textField($model,'sms',array('size'=>4,'maxlength'=>4)); ?>
		</div>

		<div class="row">
			<?php echo $form->label($model,'red'); ?>
			<?php echo $form->textField($model,'red',array('size'=>60,'maxlength'=>100)); ?>
		</div>

		</div>
		
		<div class="columna">

		<div class="row">
			<?php echo $form->label($model,'internet'); ?>
			<?php echo $form->textField($model,'internet',array('size'=>50,'maxlength'=>50)); ?>
		</div>

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

		</div>

	

		<div class="row buttons">
			<?php echo CHtml::submitButton('Search'); ?>
		</div>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- search-form -->
