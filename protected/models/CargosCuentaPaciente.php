<?php

/**
 * This is the model class for table "cargosCuentaPaciente".
 *
 * The followings are the available columns in table 'cargosCuentaPaciente':
 * @property integer $keyCAP
 * @property integer $numeroE
 * @property integer $nCuenta
 * @property string $codProcedimiento
 * @property string $um
 * @property string $cantidad
 * @property string $precioVenta
 * @property string $iva
 * @property string $costoHospital
 * @property string $seguro
 * @property string $usuario
 * @property string $hora1
 * @property string $fecha1
 * @property string $status
 * @property string $almacen
 * @property string $numCorte
 * @property string $medico
 * @property string $ctaMayor
 * @property string $ctoCosto
 * @property string $auxiliar
 * @property string $ejercicio
 * @property string $gpoProducto
 * @property string $dia
 * @property string $mes
 * @property integer $year
 * @property integer $diaNumerico
 * @property string $tipoCobro
 * @property string $credencial
 * @property string $statusFactura
 * @property string $statusUrgencias
 * @property integer $existencias
 * @property string $almacenSolicitante
 * @property string $almacenDestino
 * @property string $prioridad
 * @property string $tipoPaciente
 * @property string $tipoPago
 * @property string $horaSolicitud
 * @property string $fechaSolicitud
 * @property string $fechaCargo
 * @property string $horaCargo
 * @property string $usuarioCargo
 * @property string $statusCargo
 * @property string $referido
 * @property string $laboratorioReferido
 * @property string $tipoTransaccion
 * @property string $fechaAlta
 * @property string $horaAlta
 * @property string $usuarioAlta
 * @property string $naturaleza
 * @property string $statusDeposito
 * @property string $usuarioTraslado
 * @property string $statusTraslado
 * @property string $tipoCliente
 * @property string $statusEstudio
 * @property string $ruta
 * @property string $statusDX
 * @property string $statusAutorizacion
 * @property string $statusCaja
 * @property string $tipoConvenio
 * @property string $cantidadParticular
 * @property string $cantidadAseguradora
 * @property string $entidad
 * @property string $cargoAuto
 * @property string $statusAuditoria
 * @property string $usuarioSolicitudFactura
 * @property string $horaSolicitudFactura
 * @property string $fechaSolicitudFactura
 * @property integer $porcentajeVariable
 * @property string $cargosHospitalarios
 * @property string $numFactura
 * @property string $descripcion
 * @property string $keyClientesInternos
 * @property string $motivo
 * @property string $folioFactura
 * @property string $keyRFC
 * @property string $statusImpresion
 * @property string $usuarioImpresion
 * @property string $statusDevolucion
 * @property string $paquete
 * @property string $numRecibo
 * @property string $statusDescuento
 * @property string $folioVenta
 * @property integer $codigoCaja
 * @property string $codigoTarjeta
 * @property string $ultimosDigitos
 * @property string $codigoAutorizacion
 * @property string $numeroCheque
 * @property string $bancoTransferencia
 * @property string $bancoCheque
 * @property string $numeroTransferencia
 * @property string $bancoTC
 * @property string $telefono
 * @property string $banderaPC
 * @property string $statusPC
 * @property string $clientePrincipal
 * @property string $folioAplicado
 * @property string $folioDevolucion
 * @property string $random
 * @property string $keyE
 * @property string $codigoPaquete
 * @property string $ventasDirectas
 * @property string $keyPA
 * @property string $numeroConfirmacion
 * @property string $statusCuenta
 * @property double $ivaParticular
 * @property double $ivaAseguradora
 * @property string $tipoVentaArticulos
 * @property string $usuarioFactura
 * @property string $precioOriginal
 * @property string $ivaOriginal
 * @property string $usuarioDescuento
 * @property string $fechaDescuento
 * @property string $cargoModificable
 * @property string $transferencia
 * @property string $numSolicitud
 * @property string $descripcionArticulo
 * @property integer $extension
 * @property string $naturalezaCxC
 * @property double $porcentajeIVA
 * @property double $porcentajeParticular
 * @property double $porcentajeAseguradora
 * @property double $porcentajeIVAParticular
 * @property double $porcentajeIVAAseguradora
 * @property string $statusInventario
 * @property string $clienteFacturacion
 * @property string $tipoFacturacion
 * @property string $tipoCuenta
 * @property string $statusRegreso
 * @property string $gpoDescuento
 * @property string $seguroFacturacion
 * @property string $facturacionEspecial
 * @property string $responsableCuenta
 * @property string $descripcionSeguroFacturacion
 * @property string $fechaVencimiento
 * @property string $descripcionTransaccion
 * @property string $beneficencia
 * @property string $statusRecepcion
 * @property string $statusDescuentoGlobal
 * @property string $descripcionDescuentoGlobal
 * @property string $statusCortesia
 * @property string $statusBeneficencia
 * @property string $folioVentaOtros
 * @property string $abonosCxC
 * @property integer $guia
 * @property string $numMovimiento
 * @property string $antibiotico
 * @property string $id_proveedor
 * @property string $id_factura
 * @property string $fechaIngreso
 * @property string $maquilado
 * @property string $fechaCierre
 * @property string $notaCredito
 * @property string $pagoCxCKeyCAP
 * @property string $fechaPagoCxC
 * @property string $almacenIngreso
 * @property string $descripcionAlmacen
 * @property string $descripcionGrupoProducto
 * @property string $descripcionClientePrincipal
 * @property string $descripcionMedico
 * @property string $primeraVez
 * @property string $almacenTraspaso
 * @property string $descripcionpaquete
 * @property string $cantidadBeneficencia
 * @property string $ivaBeneficencia
 */
class CargosCuentaPaciente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CargosCuentaPaciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cargosCuentaPaciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numeroE, nCuenta, codProcedimiento, um, cantidad, precioVenta, iva, costoHospital, fecha1, numCorte, medico, ctaMayor, ctoCosto, auxiliar, ejercicio, gpoProducto, dia, mes, year, diaNumerico, tipoCobro, credencial, statusFactura, statusUrgencias, existencias, almacenSolicitante, almacenDestino, prioridad, tipoPaciente, tipoPago, horaSolicitud, fechaSolicitud, fechaCargo, horaCargo, usuarioCargo, statusCargo, referido, laboratorioReferido, tipoTransaccion, fechaAlta, horaAlta, usuarioAlta, naturaleza, statusDeposito, usuarioTraslado, statusTraslado, tipoCliente, statusEstudio, ruta, statusDX, statusCaja, tipoConvenio, cantidadParticular, cantidadAseguradora, cargoAuto, statusAuditoria, usuarioSolicitudFactura, horaSolicitudFactura, fechaSolicitudFactura, porcentajeVariable, cargosHospitalarios, numFactura, descripcion, keyClientesInternos, motivo, folioFactura, keyRFC, statusImpresion, usuarioImpresion, statusDevolucion, paquete, numRecibo, statusDescuento, folioVenta, codigoCaja, codigoTarjeta, ultimosDigitos, codigoAutorizacion, numeroCheque, bancoTransferencia, bancoCheque, numeroTransferencia, bancoTC, telefono, banderaPC, statusPC, folioAplicado, folioDevolucion, random, keyE, codigoPaquete, ventasDirectas, keyPA, numeroConfirmacion, statusCuenta, ivaParticular, ivaAseguradora, tipoVentaArticulos, usuarioFactura, statusInventario, clienteFacturacion, tipoFacturacion, tipoCuenta, statusRegreso, gpoDescuento, seguroFacturacion, facturacionEspecial, responsableCuenta, descripcionSeguroFacturacion, fechaVencimiento, descripcionTransaccion, beneficencia, statusRecepcion, statusDescuentoGlobal, descripcionDescuentoGlobal, statusCortesia, statusBeneficencia, folioVentaOtros, abonosCxC, guia, numMovimiento, antibiotico, id_proveedor, id_factura, fechaIngreso, maquilado, fechaCierre, notaCredito, pagoCxCKeyCAP, fechaPagoCxC, almacenIngreso, descripcionAlmacen, descripcionGrupoProducto, descripcionMedico, primeraVez, descripcionpaquete, cantidadBeneficencia, ivaBeneficencia', 'required'),
			array('numeroE, nCuenta, year, diaNumerico, existencias, porcentajeVariable, codigoCaja, extension, guia', 'numerical', 'integerOnly'=>true),
			array('ivaParticular, ivaAseguradora, porcentajeIVA, porcentajeParticular, porcentajeAseguradora, porcentajeIVAParticular, porcentajeIVAAseguradora', 'numerical'),
			array('codProcedimiento', 'length', 'max'=>50),
			array('um, hora1, fecha1', 'length', 'max'=>10),
			array('cantidad, precioVenta, iva, costoHospital, seguro, usuario, almacen, numCorte, medico, ctaMayor, cantidadParticular, cantidadAseguradora, keyClientesInternos, folioFactura, keyRFC, numRecibo, folioAplicado, folioDevolucion, random, keyE, keyPA, numeroConfirmacion, precioOriginal, ivaOriginal, numSolicitud, naturalezaCxC, fechaPagoCxC, almacenTraspaso, cantidadBeneficencia, ivaBeneficencia', 'length', 'max'=>20),
			array('status', 'length', 'max'=>11),
			array('ctoCosto, descripcionMedico, descripcionpaquete', 'length', 'max'=>100),
			array('auxiliar, ejercicio, gpoProducto, dia, tipoCobro, credencial, statusFactura, statusUrgencias, almacenSolicitante, almacenDestino, prioridad, tipoPaciente, tipoPago, horaSolicitud, fechaSolicitud, fechaCargo, horaCargo, usuarioCargo, statusCargo, referido, laboratorioReferido, tipoTransaccion, fechaAlta, horaAlta, usuarioAlta, statusDeposito, usuarioTraslado, statusTraslado, tipoCliente, statusEstudio, ruta, statusDX, statusAutorizacion, statusCaja, tipoConvenio, cargoAuto, statusAuditoria, usuarioSolicitudFactura, horaSolicitudFactura, fechaSolicitudFactura, cargosHospitalarios, descripcion, motivo, statusImpresion, usuarioImpresion, statusDescuento, folioVenta, codigoTarjeta, ultimosDigitos, codigoAutorizacion, numeroCheque, bancoTransferencia, bancoCheque, numeroTransferencia, bancoTC, telefono, statusPC, codigoPaquete, statusCuenta, tipoVentaArticulos, usuarioFactura, descripcionArticulo', 'length', 'max'=>255),
			array('mes, entidad, statusDevolucion, paquete, banderaPC, ventasDirectas, cargoModificable, statusRegreso, gpoDescuento, facturacionEspecial, beneficencia, statusDescuentoGlobal, statusCortesia, statusBeneficencia, abonosCxC, antibiotico, maquilado, notaCredito, primeraVez', 'length', 'max'=>2),
			array('naturaleza, tipoCuenta', 'length', 'max'=>1),
			array('numFactura, statusInventario, clienteFacturacion, tipoFacturacion, seguroFacturacion, responsableCuenta, descripcionSeguroFacturacion, fechaVencimiento, descripcionTransaccion, statusRecepcion, descripcionDescuentoGlobal, folioVentaOtros, numMovimiento, id_proveedor, id_factura, fechaIngreso, fechaCierre, pagoCxCKeyCAP, almacenIngreso, descripcionAlmacen, descripcionGrupoProducto, descripcionClientePrincipal', 'length', 'max'=>254),
			array('clientePrincipal', 'length', 'max'=>200),
			array('usuarioDescuento, fechaDescuento, transferencia', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyCAP, numeroE, nCuenta, codProcedimiento, um, cantidad, precioVenta, iva, costoHospital, seguro, usuario, hora1, fecha1, status, almacen, numCorte, medico, ctaMayor, ctoCosto, auxiliar, ejercicio, gpoProducto, dia, mes, year, diaNumerico, tipoCobro, credencial, statusFactura, statusUrgencias, existencias, almacenSolicitante, almacenDestino, prioridad, tipoPaciente, tipoPago, horaSolicitud, fechaSolicitud, fechaCargo, horaCargo, usuarioCargo, statusCargo, referido, laboratorioReferido, tipoTransaccion, fechaAlta, horaAlta, usuarioAlta, naturaleza, statusDeposito, usuarioTraslado, statusTraslado, tipoCliente, statusEstudio, ruta, statusDX, statusAutorizacion, statusCaja, tipoConvenio, cantidadParticular, cantidadAseguradora, entidad, cargoAuto, statusAuditoria, usuarioSolicitudFactura, horaSolicitudFactura, fechaSolicitudFactura, porcentajeVariable, cargosHospitalarios, numFactura, descripcion, keyClientesInternos, motivo, folioFactura, keyRFC, statusImpresion, usuarioImpresion, statusDevolucion, paquete, numRecibo, statusDescuento, folioVenta, codigoCaja, codigoTarjeta, ultimosDigitos, codigoAutorizacion, numeroCheque, bancoTransferencia, bancoCheque, numeroTransferencia, bancoTC, telefono, banderaPC, statusPC, clientePrincipal, folioAplicado, folioDevolucion, random, keyE, codigoPaquete, ventasDirectas, keyPA, numeroConfirmacion, statusCuenta, ivaParticular, ivaAseguradora, tipoVentaArticulos, usuarioFactura, precioOriginal, ivaOriginal, usuarioDescuento, fechaDescuento, cargoModificable, transferencia, numSolicitud, descripcionArticulo, extension, naturalezaCxC, porcentajeIVA, porcentajeParticular, porcentajeAseguradora, porcentajeIVAParticular, porcentajeIVAAseguradora, statusInventario, clienteFacturacion, tipoFacturacion, tipoCuenta, statusRegreso, gpoDescuento, seguroFacturacion, facturacionEspecial, responsableCuenta, descripcionSeguroFacturacion, fechaVencimiento, descripcionTransaccion, beneficencia, statusRecepcion, statusDescuentoGlobal, descripcionDescuentoGlobal, statusCortesia, statusBeneficencia, folioVentaOtros, abonosCxC, guia, numMovimiento, antibiotico, id_proveedor, id_factura, fechaIngreso, maquilado, fechaCierre, notaCredito, pagoCxCKeyCAP, fechaPagoCxC, almacenIngreso, descripcionAlmacen, descripcionGrupoProducto, descripcionClientePrincipal, descripcionMedico, primeraVez, almacenTraspaso, descripcionpaquete, cantidadBeneficencia, ivaBeneficencia', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'keyCAP' => 'Key Cap',
			'numeroE' => 'Numero E',
			'nCuenta' => 'N Cuenta',
			'codProcedimiento' => 'Cod Procedimiento',
			'um' => 'Um',
			'cantidad' => 'Cantidad',
			'precioVenta' => 'Precio Venta',
			'iva' => 'Iva',
			'costoHospital' => 'Costo Hospital',
			'seguro' => 'Seguro',
			'usuario' => 'Usuario',
			'hora1' => 'Hora1',
			'fecha1' => 'Fecha1',
			'status' => 'Status',
			'almacen' => 'Almacen',
			'numCorte' => 'Num Corte',
			'medico' => 'Medico',
			'ctaMayor' => 'Cta Mayor',
			'ctoCosto' => 'Cto Costo',
			'auxiliar' => 'Auxiliar',
			'ejercicio' => 'Ejercicio',
			'gpoProducto' => 'Gpo Producto',
			'dia' => 'Dia',
			'mes' => 'Mes',
			'year' => 'Year',
			'diaNumerico' => 'Dia Numerico',
			'tipoCobro' => 'Tipo Cobro',
			'credencial' => 'Credencial',
			'statusFactura' => 'Status Factura',
			'statusUrgencias' => 'Status Urgencias',
			'existencias' => 'Existencias',
			'almacenSolicitante' => 'Almacen Solicitante',
			'almacenDestino' => 'Almacen Destino',
			'prioridad' => 'Prioridad',
			'tipoPaciente' => 'Tipo Paciente',
			'tipoPago' => 'Tipo Pago',
			'horaSolicitud' => 'Hora Solicitud',
			'fechaSolicitud' => 'Fecha Solicitud',
			'fechaCargo' => 'Fecha Cargo',
			'horaCargo' => 'Hora Cargo',
			'usuarioCargo' => 'Usuario Cargo',
			'statusCargo' => 'Status Cargo',
			'referido' => 'Referido',
			'laboratorioReferido' => 'Laboratorio Referido',
			'tipoTransaccion' => 'Tipo Transaccion',
			'fechaAlta' => 'Fecha Alta',
			'horaAlta' => 'Hora Alta',
			'usuarioAlta' => 'Usuario Alta',
			'naturaleza' => 'Naturaleza',
			'statusDeposito' => 'Status Deposito',
			'usuarioTraslado' => 'Usuario Traslado',
			'statusTraslado' => 'Status Traslado',
			'tipoCliente' => 'Tipo Cliente',
			'statusEstudio' => 'Status Estudio',
			'ruta' => 'Ruta',
			'statusDX' => 'Status Dx',
			'statusAutorizacion' => 'Status Autorizacion',
			'statusCaja' => 'Status Caja',
			'tipoConvenio' => 'Tipo Convenio',
			'cantidadParticular' => 'Cantidad Particular',
			'cantidadAseguradora' => 'Cantidad Aseguradora',
			'entidad' => 'Entidad',
			'cargoAuto' => 'Cargo Auto',
			'statusAuditoria' => 'Status Auditoria',
			'usuarioSolicitudFactura' => 'Usuario Solicitud Factura',
			'horaSolicitudFactura' => 'Hora Solicitud Factura',
			'fechaSolicitudFactura' => 'Fecha Solicitud Factura',
			'porcentajeVariable' => 'Porcentaje Variable',
			'cargosHospitalarios' => 'Cargos Hospitalarios',
			'numFactura' => 'Num Factura',
			'descripcion' => 'Descripcion',
			'keyClientesInternos' => 'Key Clientes Internos',
			'motivo' => 'Motivo',
			'folioFactura' => 'Folio Factura',
			'keyRFC' => 'Key Rfc',
			'statusImpresion' => 'Status Impresion',
			'usuarioImpresion' => 'Usuario Impresion',
			'statusDevolucion' => 'Status Devolucion',
			'paquete' => 'Paquete',
			'numRecibo' => 'Num Recibo',
			'statusDescuento' => 'Status Descuento',
			'folioVenta' => 'Folio Venta',
			'codigoCaja' => 'Codigo Caja',
			'codigoTarjeta' => 'Codigo Tarjeta',
			'ultimosDigitos' => 'Ultimos Digitos',
			'codigoAutorizacion' => 'Codigo Autorizacion',
			'numeroCheque' => 'Numero Cheque',
			'bancoTransferencia' => 'Banco Transferencia',
			'bancoCheque' => 'Banco Cheque',
			'numeroTransferencia' => 'Numero Transferencia',
			'bancoTC' => 'Banco Tc',
			'telefono' => 'Telefono',
			'banderaPC' => 'Bandera Pc',
			'statusPC' => 'Status Pc',
			'clientePrincipal' => 'Cliente Principal',
			'folioAplicado' => 'Folio Aplicado',
			'folioDevolucion' => 'Folio Devolucion',
			'random' => 'Random',
			'keyE' => 'Key E',
			'codigoPaquete' => 'Codigo Paquete',
			'ventasDirectas' => 'Ventas Directas',
			'keyPA' => 'Key Pa',
			'numeroConfirmacion' => 'Numero Confirmacion',
			'statusCuenta' => 'Status Cuenta',
			'ivaParticular' => 'Iva Particular',
			'ivaAseguradora' => 'Iva Aseguradora',
			'tipoVentaArticulos' => 'Tipo Venta Articulos',
			'usuarioFactura' => 'Usuario Factura',
			'precioOriginal' => 'Precio Original',
			'ivaOriginal' => 'Iva Original',
			'usuarioDescuento' => 'Usuario Descuento',
			'fechaDescuento' => 'Fecha Descuento',
			'cargoModificable' => 'Cargo Modificable',
			'transferencia' => 'Transferencia',
			'numSolicitud' => 'Num Solicitud',
			'descripcionArticulo' => 'Descripcion Articulo',
			'extension' => 'Extension',
			'naturalezaCxC' => 'Naturaleza Cx C',
			'porcentajeIVA' => 'Porcentaje Iva',
			'porcentajeParticular' => 'Porcentaje Particular',
			'porcentajeAseguradora' => 'Porcentaje Aseguradora',
			'porcentajeIVAParticular' => 'Porcentaje Ivaparticular',
			'porcentajeIVAAseguradora' => 'Porcentaje Ivaaseguradora',
			'statusInventario' => 'Status Inventario',
			'clienteFacturacion' => 'Cliente Facturacion',
			'tipoFacturacion' => 'Tipo Facturacion',
			'tipoCuenta' => 'Tipo Cuenta',
			'statusRegreso' => 'Status Regreso',
			'gpoDescuento' => 'Gpo Descuento',
			'seguroFacturacion' => 'Seguro Facturacion',
			'facturacionEspecial' => 'Facturacion Especial',
			'responsableCuenta' => 'Responsable Cuenta',
			'descripcionSeguroFacturacion' => 'Descripcion Seguro Facturacion',
			'fechaVencimiento' => 'Fecha Vencimiento',
			'descripcionTransaccion' => 'Descripcion Transaccion',
			'beneficencia' => 'Beneficencia',
			'statusRecepcion' => 'Status Recepcion',
			'statusDescuentoGlobal' => 'Status Descuento Global',
			'descripcionDescuentoGlobal' => 'Descripcion Descuento Global',
			'statusCortesia' => 'Status Cortesia',
			'statusBeneficencia' => 'Status Beneficencia',
			'folioVentaOtros' => 'Folio Venta Otros',
			'abonosCxC' => 'Abonos Cx C',
			'guia' => 'Guia',
			'numMovimiento' => 'Num Movimiento',
			'antibiotico' => 'Antibiotico',
			'id_proveedor' => 'Id Proveedor',
			'id_factura' => 'Id Factura',
			'fechaIngreso' => 'Fecha Ingreso',
			'maquilado' => 'Maquilado',
			'fechaCierre' => 'Fecha Cierre',
			'notaCredito' => 'Nota Credito',
			'pagoCxCKeyCAP' => 'Pago Cx Ckey Cap',
			'fechaPagoCxC' => 'Fecha Pago Cx C',
			'almacenIngreso' => 'Almacen Ingreso',
			'descripcionAlmacen' => 'Descripcion Almacen',
			'descripcionGrupoProducto' => 'Descripcion Grupo Producto',
			'descripcionClientePrincipal' => 'Descripcion Cliente Principal',
			'descripcionMedico' => 'Descripcion Medico',
			'primeraVez' => 'Primera Vez',
			'almacenTraspaso' => 'Almacen Traspaso',
			'descripcionpaquete' => 'Descripcionpaquete',
			'cantidadBeneficencia' => 'Cantidad Beneficencia',
			'ivaBeneficencia' => 'Iva Beneficencia',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('keyCAP',$this->keyCAP);
		$criteria->compare('numeroE',$this->numeroE);
		$criteria->compare('nCuenta',$this->nCuenta);
		$criteria->compare('codProcedimiento',$this->codProcedimiento,true);
		$criteria->compare('um',$this->um,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('precioVenta',$this->precioVenta,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('costoHospital',$this->costoHospital,true);
		$criteria->compare('seguro',$this->seguro,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('hora1',$this->hora1,true);
		$criteria->compare('fecha1',$this->fecha1,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('numCorte',$this->numCorte,true);
		$criteria->compare('medico',$this->medico,true);
		$criteria->compare('ctaMayor',$this->ctaMayor,true);
		$criteria->compare('ctoCosto',$this->ctoCosto,true);
		$criteria->compare('auxiliar',$this->auxiliar,true);
		$criteria->compare('ejercicio',$this->ejercicio,true);
		$criteria->compare('gpoProducto',$this->gpoProducto,true);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('year',$this->year);
		$criteria->compare('diaNumerico',$this->diaNumerico);
		$criteria->compare('tipoCobro',$this->tipoCobro,true);
		$criteria->compare('credencial',$this->credencial,true);
		$criteria->compare('statusFactura',$this->statusFactura,true);
		$criteria->compare('statusUrgencias',$this->statusUrgencias,true);
		$criteria->compare('existencias',$this->existencias);
		$criteria->compare('almacenSolicitante',$this->almacenSolicitante,true);
		$criteria->compare('almacenDestino',$this->almacenDestino,true);
		$criteria->compare('prioridad',$this->prioridad,true);
		$criteria->compare('tipoPaciente',$this->tipoPaciente,true);
		$criteria->compare('tipoPago',$this->tipoPago,true);
		$criteria->compare('horaSolicitud',$this->horaSolicitud,true);
		$criteria->compare('fechaSolicitud',$this->fechaSolicitud,true);
		$criteria->compare('fechaCargo',$this->fechaCargo,true);
		$criteria->compare('horaCargo',$this->horaCargo,true);
		$criteria->compare('usuarioCargo',$this->usuarioCargo,true);
		$criteria->compare('statusCargo',$this->statusCargo,true);
		$criteria->compare('referido',$this->referido,true);
		$criteria->compare('laboratorioReferido',$this->laboratorioReferido,true);
		$criteria->compare('tipoTransaccion',$this->tipoTransaccion,true);
		$criteria->compare('fechaAlta',$this->fechaAlta,true);
		$criteria->compare('horaAlta',$this->horaAlta,true);
		$criteria->compare('usuarioAlta',$this->usuarioAlta,true);
		$criteria->compare('naturaleza',$this->naturaleza,true);
		$criteria->compare('statusDeposito',$this->statusDeposito,true);
		$criteria->compare('usuarioTraslado',$this->usuarioTraslado,true);
		$criteria->compare('statusTraslado',$this->statusTraslado,true);
		$criteria->compare('tipoCliente',$this->tipoCliente,true);
		$criteria->compare('statusEstudio',$this->statusEstudio,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('statusDX',$this->statusDX,true);
		$criteria->compare('statusAutorizacion',$this->statusAutorizacion,true);
		$criteria->compare('statusCaja',$this->statusCaja,true);
		$criteria->compare('tipoConvenio',$this->tipoConvenio,true);
		$criteria->compare('cantidadParticular',$this->cantidadParticular,true);
		$criteria->compare('cantidadAseguradora',$this->cantidadAseguradora,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('cargoAuto',$this->cargoAuto,true);
		$criteria->compare('statusAuditoria',$this->statusAuditoria,true);
		$criteria->compare('usuarioSolicitudFactura',$this->usuarioSolicitudFactura,true);
		$criteria->compare('horaSolicitudFactura',$this->horaSolicitudFactura,true);
		$criteria->compare('fechaSolicitudFactura',$this->fechaSolicitudFactura,true);
		$criteria->compare('porcentajeVariable',$this->porcentajeVariable);
		$criteria->compare('cargosHospitalarios',$this->cargosHospitalarios,true);
		$criteria->compare('numFactura',$this->numFactura,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('keyClientesInternos',$this->keyClientesInternos,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('folioFactura',$this->folioFactura,true);
		$criteria->compare('keyRFC',$this->keyRFC,true);
		$criteria->compare('statusImpresion',$this->statusImpresion,true);
		$criteria->compare('usuarioImpresion',$this->usuarioImpresion,true);
		$criteria->compare('statusDevolucion',$this->statusDevolucion,true);
		$criteria->compare('paquete',$this->paquete,true);
		$criteria->compare('numRecibo',$this->numRecibo,true);
		$criteria->compare('statusDescuento',$this->statusDescuento,true);
		$criteria->compare('folioVenta',$this->folioVenta,true);
		$criteria->compare('codigoCaja',$this->codigoCaja);
		$criteria->compare('codigoTarjeta',$this->codigoTarjeta,true);
		$criteria->compare('ultimosDigitos',$this->ultimosDigitos,true);
		$criteria->compare('codigoAutorizacion',$this->codigoAutorizacion,true);
		$criteria->compare('numeroCheque',$this->numeroCheque,true);
		$criteria->compare('bancoTransferencia',$this->bancoTransferencia,true);
		$criteria->compare('bancoCheque',$this->bancoCheque,true);
		$criteria->compare('numeroTransferencia',$this->numeroTransferencia,true);
		$criteria->compare('bancoTC',$this->bancoTC,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('banderaPC',$this->banderaPC,true);
		$criteria->compare('statusPC',$this->statusPC,true);
		$criteria->compare('clientePrincipal',$this->clientePrincipal,true);
		$criteria->compare('folioAplicado',$this->folioAplicado,true);
		$criteria->compare('folioDevolucion',$this->folioDevolucion,true);
		$criteria->compare('random',$this->random,true);
		$criteria->compare('keyE',$this->keyE,true);
		$criteria->compare('codigoPaquete',$this->codigoPaquete,true);
		$criteria->compare('ventasDirectas',$this->ventasDirectas,true);
		$criteria->compare('keyPA',$this->keyPA,true);
		$criteria->compare('numeroConfirmacion',$this->numeroConfirmacion,true);
		$criteria->compare('statusCuenta',$this->statusCuenta,true);
		$criteria->compare('ivaParticular',$this->ivaParticular);
		$criteria->compare('ivaAseguradora',$this->ivaAseguradora);
		$criteria->compare('tipoVentaArticulos',$this->tipoVentaArticulos,true);
		$criteria->compare('usuarioFactura',$this->usuarioFactura,true);
		$criteria->compare('precioOriginal',$this->precioOriginal,true);
		$criteria->compare('ivaOriginal',$this->ivaOriginal,true);
		$criteria->compare('usuarioDescuento',$this->usuarioDescuento,true);
		$criteria->compare('fechaDescuento',$this->fechaDescuento,true);
		$criteria->compare('cargoModificable',$this->cargoModificable,true);
		$criteria->compare('transferencia',$this->transferencia,true);
		$criteria->compare('numSolicitud',$this->numSolicitud,true);
		$criteria->compare('descripcionArticulo',$this->descripcionArticulo,true);
		$criteria->compare('extension',$this->extension);
		$criteria->compare('naturalezaCxC',$this->naturalezaCxC,true);
		$criteria->compare('porcentajeIVA',$this->porcentajeIVA);
		$criteria->compare('porcentajeParticular',$this->porcentajeParticular);
		$criteria->compare('porcentajeAseguradora',$this->porcentajeAseguradora);
		$criteria->compare('porcentajeIVAParticular',$this->porcentajeIVAParticular);
		$criteria->compare('porcentajeIVAAseguradora',$this->porcentajeIVAAseguradora);
		$criteria->compare('statusInventario',$this->statusInventario,true);
		$criteria->compare('clienteFacturacion',$this->clienteFacturacion,true);
		$criteria->compare('tipoFacturacion',$this->tipoFacturacion,true);
		$criteria->compare('tipoCuenta',$this->tipoCuenta,true);
		$criteria->compare('statusRegreso',$this->statusRegreso,true);
		$criteria->compare('gpoDescuento',$this->gpoDescuento,true);
		$criteria->compare('seguroFacturacion',$this->seguroFacturacion,true);
		$criteria->compare('facturacionEspecial',$this->facturacionEspecial,true);
		$criteria->compare('responsableCuenta',$this->responsableCuenta,true);
		$criteria->compare('descripcionSeguroFacturacion',$this->descripcionSeguroFacturacion,true);
		$criteria->compare('fechaVencimiento',$this->fechaVencimiento,true);
		$criteria->compare('descripcionTransaccion',$this->descripcionTransaccion,true);
		$criteria->compare('beneficencia',$this->beneficencia,true);
		$criteria->compare('statusRecepcion',$this->statusRecepcion,true);
		$criteria->compare('statusDescuentoGlobal',$this->statusDescuentoGlobal,true);
		$criteria->compare('descripcionDescuentoGlobal',$this->descripcionDescuentoGlobal,true);
		$criteria->compare('statusCortesia',$this->statusCortesia,true);
		$criteria->compare('statusBeneficencia',$this->statusBeneficencia,true);
		$criteria->compare('folioVentaOtros',$this->folioVentaOtros,true);
		$criteria->compare('abonosCxC',$this->abonosCxC,true);
		$criteria->compare('guia',$this->guia);
		$criteria->compare('numMovimiento',$this->numMovimiento,true);
		$criteria->compare('antibiotico',$this->antibiotico,true);
		$criteria->compare('id_proveedor',$this->id_proveedor,true);
		$criteria->compare('id_factura',$this->id_factura,true);
		$criteria->compare('fechaIngreso',$this->fechaIngreso,true);
		$criteria->compare('maquilado',$this->maquilado,true);
		$criteria->compare('fechaCierre',$this->fechaCierre,true);
		$criteria->compare('notaCredito',$this->notaCredito,true);
		$criteria->compare('pagoCxCKeyCAP',$this->pagoCxCKeyCAP,true);
		$criteria->compare('fechaPagoCxC',$this->fechaPagoCxC,true);
		$criteria->compare('almacenIngreso',$this->almacenIngreso,true);
		$criteria->compare('descripcionAlmacen',$this->descripcionAlmacen,true);
		$criteria->compare('descripcionGrupoProducto',$this->descripcionGrupoProducto,true);
		$criteria->compare('descripcionClientePrincipal',$this->descripcionClientePrincipal,true);
		$criteria->compare('descripcionMedico',$this->descripcionMedico,true);
		$criteria->compare('primeraVez',$this->primeraVez,true);
		$criteria->compare('almacenTraspaso',$this->almacenTraspaso,true);
		$criteria->compare('descripcionpaquete',$this->descripcionpaquete,true);
		$criteria->compare('cantidadBeneficencia',$this->cantidadBeneficencia,true);
		$criteria->compare('ivaBeneficencia',$this->ivaBeneficencia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}