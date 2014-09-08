<?php
/* @var $this CatAlmacenController */
/* @var $data CatAlmacen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyAlmacenes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->keyAlmacenes), array('view', 'id'=>$data->keyAlmacenes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenConsumo')); ?>:</b>
	<?php echo CHtml::encode($data->almacenConsumo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacen')); ?>:</b>
	<?php echo CHtml::encode($data->almacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tieneCuartos')); ?>:</b>
	<?php echo CHtml::encode($data->tieneCuartos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctaContable')); ?>:</b>
	<?php echo CHtml::encode($data->ctaContable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha1')); ?>:</b>
	<?php echo CHtml::encode($data->fecha1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CCOSTO')); ?>:</b>
	<?php echo CHtml::encode($data->ID_CCOSTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modulo')); ?>:</b>
	<?php echo CHtml::encode($data->modulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activo')); ?>:</b>
	<?php echo CHtml::encode($data->activo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miniAlmacen')); ?>:</b>
	<?php echo CHtml::encode($data->miniAlmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenPadre')); ?>:</b>
	<?php echo CHtml::encode($data->almacenPadre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medico')); ?>:</b>
	<?php echo CHtml::encode($data->id_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidad')); ?>:</b>
	<?php echo CHtml::encode($data->entidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventas')); ?>:</b>
	<?php echo CHtml::encode($data->ventas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altaPaciente')); ?>:</b>
	<?php echo CHtml::encode($data->altaPaciente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altaEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->altaEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargosDirectos')); ?>:</b>
	<?php echo CHtml::encode($data->cargosDirectos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numConsultorio')); ?>:</b>
	<?php echo CHtml::encode($data->numConsultorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transacciones')); ?>:</b>
	<?php echo CHtml::encode($data->transacciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contieneReferidos')); ?>:</b>
	<?php echo CHtml::encode($data->contieneReferidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contieneEmpleados')); ?>:</b>
	<?php echo CHtml::encode($data->contieneEmpleados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compras')); ?>:</b>
	<?php echo CHtml::encode($data->compras); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventasDirectas')); ?>:</b>
	<?php echo CHtml::encode($data->ventasDirectas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificarPrecios')); ?>:</b>
	<?php echo CHtml::encode($data->modificarPrecios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cierreCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->cierreCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registroUrgencias')); ?>:</b>
	<?php echo CHtml::encode($data->registroUrgencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credenciales')); ?>:</b>
	<?php echo CHtml::encode($data->credenciales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentosSueltos')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentosSueltos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centroDistribucion')); ?>:</b>
	<?php echo CHtml::encode($data->centroDistribucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permiteDevoluciones')); ?>:</b>
	<?php echo CHtml::encode($data->permiteDevoluciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenCargo')); ?>:</b>
	<?php echo CHtml::encode($data->almacenCargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reporteSurtir')); ?>:</b>
	<?php echo CHtml::encode($data->reporteSurtir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusCitas')); ?>:</b>
	<?php echo CHtml::encode($data->statusCitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cambiarDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->cambiarDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->gpoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntoVenta')); ?>:</b>
	<?php echo CHtml::encode($data->puntoVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actualizaPrecios')); ?>:</b>
	<?php echo CHtml::encode($data->actualizaPrecios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maquila')); ?>:</b>
	<?php echo CHtml::encode($data->maquila); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('farmacia')); ?>:</b>
	<?php echo CHtml::encode($data->farmacia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->beneficencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manejaexpedientes')); ?>:</b>
	<?php echo CHtml::encode($data->manejaexpedientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listaexpedientes')); ?>:</b>
	<?php echo CHtml::encode($data->listaexpedientes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almacenExistencias')); ?>:</b>
	<?php echo CHtml::encode($data->almacenExistencias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->precioEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoBeneficencia')); ?>:</b>
	<?php echo CHtml::encode($data->tipoBeneficencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcenajePE')); ?>:</b>
	<?php echo CHtml::encode($data->porcenajePE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaPE')); ?>:</b>
	<?php echo CHtml::encode($data->horaPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('llenadoEspecial')); ?>:</b>
	<?php echo CHtml::encode($data->llenadoEspecial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentajePE')); ?>:</b>
	<?php echo CHtml::encode($data->porcentajePE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventaBotiquinExternos')); ?>:</b>
	<?php echo CHtml::encode($data->ventaBotiquinExternos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imprimeTicket')); ?>:</b>
	<?php echo CHtml::encode($data->imprimeTicket); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusExistencias')); ?>:</b>
	<?php echo CHtml::encode($data->statusExistencias); ?>
	<br />

	*/ ?>

</div>