<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'keyAlmacenes'); ?>
		<?php echo $form->textField($model,'keyAlmacenes'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenConsumo'); ?>
		<?php echo $form->textField($model,'almacenConsumo',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tieneCuartos'); ?>
		<?php echo $form->textField($model,'tieneCuartos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctaContable'); ?>
		<?php echo $form->textField($model,'ctaContable',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha1'); ?>
		<?php echo $form->textField($model,'fecha1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_CCOSTO'); ?>
		<?php echo $form->textField($model,'ID_CCOSTO',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modulo'); ?>
		<?php echo $form->textField($model,'modulo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activo'); ?>
		<?php echo $form->textField($model,'activo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miniAlmacen'); ?>
		<?php echo $form->textField($model,'miniAlmacen',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenPadre'); ?>
		<?php echo $form->textField($model,'almacenPadre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_medico'); ?>
		<?php echo $form->textField($model,'id_medico',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventas'); ?>
		<?php echo $form->textField($model,'ventas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altaPaciente'); ?>
		<?php echo $form->textField($model,'altaPaciente',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altaEspecial'); ?>
		<?php echo $form->textField($model,'altaEspecial',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargosDirectos'); ?>
		<?php echo $form->textField($model,'cargosDirectos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numConsultorio'); ?>
		<?php echo $form->textField($model,'numConsultorio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transacciones'); ?>
		<?php echo $form->textField($model,'transacciones',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contieneReferidos'); ?>
		<?php echo $form->textField($model,'contieneReferidos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contieneEmpleados'); ?>
		<?php echo $form->textField($model,'contieneEmpleados',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compras'); ?>
		<?php echo $form->textField($model,'compras',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventasDirectas'); ?>
		<?php echo $form->textField($model,'ventasDirectas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modificarPrecios'); ?>
		<?php echo $form->textField($model,'modificarPrecios',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cierreCuenta'); ?>
		<?php echo $form->textField($model,'cierreCuenta',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registroUrgencias'); ?>
		<?php echo $form->textField($model,'registroUrgencias',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'credenciales'); ?>
		<?php echo $form->textField($model,'credenciales',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medicamentosSueltos'); ?>
		<?php echo $form->textField($model,'medicamentosSueltos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centroDistribucion'); ?>
		<?php echo $form->textField($model,'centroDistribucion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permiteDevoluciones'); ?>
		<?php echo $form->textField($model,'permiteDevoluciones',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenCargo'); ?>
		<?php echo $form->textField($model,'almacenCargo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporteSurtir'); ?>
		<?php echo $form->textField($model,'reporteSurtir',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusCitas'); ?>
		<?php echo $form->textField($model,'statusCitas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cambiarDescripcion'); ?>
		<?php echo $form->textField($model,'cambiarDescripcion',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'puntoVenta'); ?>
		<?php echo $form->textField($model,'puntoVenta',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actualizaPrecios'); ?>
		<?php echo $form->textField($model,'actualizaPrecios',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maquila'); ?>
		<?php echo $form->textField($model,'maquila',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'farmacia'); ?>
		<?php echo $form->textField($model,'farmacia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beneficencia'); ?>
		<?php echo $form->textField($model,'beneficencia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manejaexpedientes'); ?>
		<?php echo $form->textField($model,'manejaexpedientes',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listaexpedientes'); ?>
		<?php echo $form->textField($model,'listaexpedientes',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'almacenExistencias'); ?>
		<?php echo $form->textField($model,'almacenExistencias',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precioEspecial'); ?>
		<?php echo $form->textField($model,'precioEspecial',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoBeneficencia'); ?>
		<?php echo $form->textField($model,'tipoBeneficencia',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcenajePE'); ?>
		<?php echo $form->textField($model,'porcenajePE',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaPE'); ?>
		<?php echo $form->textField($model,'horaPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'llenadoEspecial'); ?>
		<?php echo $form->textField($model,'llenadoEspecial',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentajePE'); ?>
		<?php echo $form->textField($model,'porcentajePE',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ventaBotiquinExternos'); ?>
		<?php echo $form->textField($model,'ventaBotiquinExternos',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imprimeTicket'); ?>
		<?php echo $form->textField($model,'imprimeTicket',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusExistencias'); ?>
		<?php echo $form->textField($model,'statusExistencias',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->