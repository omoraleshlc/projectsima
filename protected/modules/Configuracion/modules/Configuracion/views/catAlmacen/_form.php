<?php
/* @var $this CatAlmacenController */
/* @var $model CatAlmacen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cat-almacen-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenConsumo'); ?>
		<?php echo $form->textField($model,'almacenConsumo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'almacenConsumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacen'); ?>
		<?php echo $form->textField($model,'almacen',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tieneCuartos'); ?>
		<?php echo $form->textField($model,'tieneCuartos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tieneCuartos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctaContable'); ?>
		<?php echo $form->textField($model,'ctaContable',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ctaContable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha1'); ?>
		<?php echo $form->textField($model,'fecha1',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fecha1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_CCOSTO'); ?>
		<?php echo $form->textField($model,'ID_CCOSTO',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'ID_CCOSTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modulo'); ?>
		<?php echo $form->textField($model,'modulo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'modulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activo'); ?>
		<?php echo $form->textField($model,'activo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miniAlmacen'); ?>
		<?php echo $form->textField($model,'miniAlmacen',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'miniAlmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenPadre'); ?>
		<?php echo $form->textField($model,'almacenPadre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almacenPadre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medico'); ?>
		<?php echo $form->textField($model,'id_medico',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entidad'); ?>
		<?php echo $form->textField($model,'entidad',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'entidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->textField($model,'medico',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventas'); ?>
		<?php echo $form->textField($model,'ventas',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ventas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altaPaciente'); ?>
		<?php echo $form->textField($model,'altaPaciente',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'altaPaciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altaEspecial'); ?>
		<?php echo $form->textField($model,'altaEspecial',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'altaEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargosDirectos'); ?>
		<?php echo $form->textField($model,'cargosDirectos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cargosDirectos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numConsultorio'); ?>
		<?php echo $form->textField($model,'numConsultorio',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numConsultorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transacciones'); ?>
		<?php echo $form->textField($model,'transacciones',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'transacciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contieneReferidos'); ?>
		<?php echo $form->textField($model,'contieneReferidos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'contieneReferidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contieneEmpleados'); ?>
		<?php echo $form->textField($model,'contieneEmpleados',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'contieneEmpleados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'compras'); ?>
		<?php echo $form->textField($model,'compras',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'compras'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventasDirectas'); ?>
		<?php echo $form->textField($model,'ventasDirectas',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ventasDirectas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modificarPrecios'); ?>
		<?php echo $form->textField($model,'modificarPrecios',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'modificarPrecios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cierreCuenta'); ?>
		<?php echo $form->textField($model,'cierreCuenta',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cierreCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registroUrgencias'); ?>
		<?php echo $form->textField($model,'registroUrgencias',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'registroUrgencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credenciales'); ?>
		<?php echo $form->textField($model,'credenciales',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'credenciales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentosSueltos'); ?>
		<?php echo $form->textField($model,'medicamentosSueltos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'medicamentosSueltos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'centroDistribucion'); ?>
		<?php echo $form->textField($model,'centroDistribucion',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'centroDistribucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permiteDevoluciones'); ?>
		<?php echo $form->textField($model,'permiteDevoluciones',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'permiteDevoluciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenCargo'); ?>
		<?php echo $form->textField($model,'almacenCargo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almacenCargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reporteSurtir'); ?>
		<?php echo $form->textField($model,'reporteSurtir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'reporteSurtir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusCitas'); ?>
		<?php echo $form->textField($model,'statusCitas',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'statusCitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cambiarDescripcion'); ?>
		<?php echo $form->textField($model,'cambiarDescripcion',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'cambiarDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpoProducto'); ?>
		<?php echo $form->textField($model,'gpoProducto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'gpoProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'puntoVenta'); ?>
		<?php echo $form->textField($model,'puntoVenta',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'puntoVenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actualizaPrecios'); ?>
		<?php echo $form->textField($model,'actualizaPrecios',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'actualizaPrecios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad'); ?>
		<?php echo $form->textField($model,'especialidad',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'especialidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maquila'); ?>
		<?php echo $form->textField($model,'maquila',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'maquila'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'farmacia'); ?>
		<?php echo $form->textField($model,'farmacia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'farmacia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficencia'); ?>
		<?php echo $form->textField($model,'beneficencia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'beneficencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manejaexpedientes'); ?>
		<?php echo $form->textField($model,'manejaexpedientes',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'manejaexpedientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listaexpedientes'); ?>
		<?php echo $form->textField($model,'listaexpedientes',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'listaexpedientes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almacenExistencias'); ?>
		<?php echo $form->textField($model,'almacenExistencias',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almacenExistencias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precioEspecial'); ?>
		<?php echo $form->textField($model,'precioEspecial',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'precioEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoBeneficencia'); ?>
		<?php echo $form->textField($model,'tipoBeneficencia',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'tipoBeneficencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcenajePE'); ?>
		<?php echo $form->textField($model,'porcenajePE',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'porcenajePE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaPE'); ?>
		<?php echo $form->textField($model,'horaPE'); ?>
		<?php echo $form->error($model,'horaPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'llenadoEspecial'); ?>
		<?php echo $form->textField($model,'llenadoEspecial',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'llenadoEspecial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentajePE'); ?>
		<?php echo $form->textField($model,'porcentajePE',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'porcentajePE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventaBotiquinExternos'); ?>
		<?php echo $form->textField($model,'ventaBotiquinExternos',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'ventaBotiquinExternos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imprimeTicket'); ?>
		<?php echo $form->textField($model,'imprimeTicket',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'imprimeTicket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusExistencias'); ?>
		<?php echo $form->textField($model,'statusExistencias',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'statusExistencias'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
