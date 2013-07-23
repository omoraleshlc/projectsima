<?php

/**
 * This is the model class for table "clientesInternos".
 *
 * The followings are the available columns in table 'clientesInternos':
 * @property string $keyClientesInternos
 * @property string $statusRecepcion
 * @property string $numeroE
 * @property integer $nCuenta
 * @property integer $numeroExpediente
 * @property string $medico
 * @property string $almacen
 * @property string $paciente
 * @property string $seguro
 * @property string $autoriza
 * @property string $credencial
 * @property string $fecha
 * @property string $hora
 * @property string $status
 * @property string $cita
 * @property string $usuario
 * @property string $fecha1
 * @property string $ip
 * @property string $tipoCliente
 * @property string $tipoConsulta
 * @property string $numeroNomina
 * @property string $confirmaCita
 * @property string $entregaExpediente
 * @property string $cargos
 * @property string $abonos
 * @property string $iva
 * @property string $descuento
 * @property integer $poliza
 * @property string $ID_CCOSTO
 * @property string $NUMMOVTO
 * @property string $ID_EJERCICIO
 * @property string $ID_LIBRO
 * @property string $FOLIO
 * @property string $dia
 * @property string $tipoCobro
 * @property string $cargosCXC
 * @property string $solicitudes
 * @property string $statusUrgencias
 * @property string $medicoForaneo
 * @property string $observaciones
 * @property integer $edad
 * @property string $codigoAutTC
 * @property string $comision
 * @property string $cantidadRecibida
 * @property string $tipoPaciente
 * @property string $statusCuenta
 * @property string $statusDeposito
 * @property string $cuarto
 * @property string $numExtensiones
 * @property double $deposito
 * @property string $tipoResponsable
 * @property double $limiteCredito
 * @property string $especialidad
 * @property string $dx
 * @property string $nombreResponsable
 * @property string $apaternoResponsable
 * @property string $amaternoResponsable
 * @property string $direccionResponsable
 * @property string $telefonoResponsable
 * @property string $ocupacionResponsable
 * @property string $tipoTransaccion
 * @property string $parentescoResponsable
 * @property double $saldoCompania
 * @property string $usuarioTraslado
 * @property string $banderaAlta
 * @property string $usuarioCierre
 * @property string $fechaCierre
 * @property string $horaCierre
 * @property integer $nOrden
 * @property string $credito
 * @property string $statusAlta
 * @property string $statusTraspaso
 * @property string $dxFinal
 * @property string $statusExpediente
 * @property string $dependencia
 * @property string $entidad
 * @property string $solicitaTransferencia
 * @property string $almacenTransferencia
 * @property string $almacenSolicitud
 * @property string $horaSolicitud
 * @property string $fechaSolicitud
 * @property string $expediente
 * @property string $usuarioRecepcionExpediente
 * @property string $accidente
 * @property string $tipoAccidente
 * @property string $llegoHospital
 * @property string $ministerio
 * @property string $motivoConsulta
 * @property string $quirurgico
 * @property string $fechaAccidente
 * @property string $horaAccidente
 * @property string $enfermera
 * @property string $alergiaT
 * @property string $alergiaP
 * @property string $alergiaR
 * @property string $alergiaPA
 * @property string $admision
 * @property string $tiposAlergias
 * @property string $cirugia
 * @property string $labor
 * @property string $peso
 * @property string $lugarAccidente
 * @property string $paquete
 * @property string $statusPaquete
 * @property string $statusFactura
 * @property string $pagoFactura
 * @property string $numeroFactura
 * @property string $diagnostico
 * @property string $primeraVez
 * @property string $folioVenta
 * @property string $clientePrincipal
 * @property string $banderaPC
 * @property string $folioAplicado
 * @property string $numRecibo
 * @property string $nombreCliente
 * @property string $folioDevolucion
 * @property integer $codigoCaja
 * @property string $numCorte
 * @property string $tipoPago
 * @property string $ultimosDigitos
 * @property string $telefono
 * @property string $bancoTC
 * @property string $bancoTransferencia
 * @property string $numeroTransferencia
 * @property string $numeroCheque
 * @property string $bancoCheque
 * @property string $codigoPaquete
 * @property string $ventasDirectas
 * @property string $statusEstudio
 * @property string $statusServicios
 * @property string $usuarioRecepcion
 * @property string $statusCaja
 * @property string $statusPaciente
 * @property string $notaIngreso
 * @property string $statusCargo
 * @property string $empleado
 * @property string $dividirCuentas
 * @property string $folioAuditoria
 * @property string $statusCargoDevolucion
 * @property string $responsableCuenta
 * @property string $fechaVencimiento
 * @property string $statusOtros
 * @property integer $porcentajeDescuento
 * @property string $usuarioDescuento
 * @property string $porcentaje
 * @property integer $guiaHora
 * @property string $curp
 * @property string $tipoCuenta
 * @property string $statusDevolucion
 * @property string $despliegaEC
 * @property string $estudiante
 * @property string $naturaleza
 * @property string $pacienteRecepcion
 * @property string $horaRecepcion
 * @property string $fechaRecepcion
 * @property string $limiteSeguro
 * @property string $facturacionEspecial
 * @property string $seguroFacturacion
 * @property string $beneficencia
 * @property string $statusCortesia
 * @property string $usuarioDevolucion
 * @property string $horaDevolucion
 * @property string $fechaDevolucion
 * @property string $pagoAplicadoCxC
 * @property string $statusPago
 * @property string $fechaPagoCxC
 * @property string $activaBeneficencia
 * @property string $facturacionconfigurada
 * @property string $incapacidad
 * @property string $descripcionpaquete
 * @property string $recalcula
 * @property string $tipoBeneficencia
 * @property string $llenadoEspecial
 * @property string $numSolicitud
 * @property integer $ticket
 * @property integer $rows
 */
class ClientesInternos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ClientesInternos the static model class
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
		return 'clientesInternos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nCuenta, descuento, tipoPaciente, tipoResponsable, saldoCompania, nOrden, statusExpediente, solicitaTransferencia, expediente, paquete, statusFactura, primeraVez, folioVenta, banderaPC, folioAplicado, numRecibo, codigoCaja, numCorte, tipoPago, ultimosDigitos, telefono, bancoTC, bancoTransferencia, numeroTransferencia, numeroCheque, bancoCheque, codigoPaquete, ventasDirectas, statusEstudio, statusServicios, usuarioRecepcion, statusCaja, statusPaciente, notaIngreso, statusCargo, empleado, curp, tipoCuenta, statusDevolucion, despliegaEC, estudiante, naturaleza, pacienteRecepcion, horaRecepcion, fechaRecepcion, limiteSeguro, facturacionEspecial, seguroFacturacion, beneficencia, statusCortesia, usuarioDevolucion, horaDevolucion, fechaDevolucion, pagoAplicadoCxC, statusPago, fechaPagoCxC, activaBeneficencia, facturacionconfigurada, incapacidad, descripcionpaquete, recalcula, tipoBeneficencia, llenadoEspecial, numSolicitud, ticket, rows', 'required'),
			array('nCuenta, numeroExpediente, poliza, edad, nOrden, codigoCaja, porcentajeDescuento, guiaHora, ticket, rows', 'numerical', 'integerOnly'=>true),
			array('deposito, limiteCredito, saldoCompania', 'numerical'),
			array('numeroE, fecha, hora, fecha1, ID_EJERCICIO, ID_LIBRO, tipoPaciente, cuarto, tipoResponsable, fechaCierre, horaCierre, statusExpediente, horaSolicitud, fechaSolicitud, fechaAccidente, horaAccidente, statusPaquete, pagoAplicadoCxC, fechaPagoCxC', 'length', 'max'=>10),
			array('medico, paciente, numeroNomina, medicoForaneo, observaciones, direccionResponsable, dxFinal, dependencia, tipoAccidente, llegoHospital, numeroFactura, nombreCliente, numSolicitud', 'length', 'max'=>50),
			array('almacen, seguro, autoriza, credencial, usuario, especialidad, parentescoResponsable, usuarioCierre, accidente, tiposAlergias, peso, lugarAccidente, statusFactura, pagoFactura, clientePrincipal, folioAplicado, numRecibo, folioDevolucion, numCorte, statusPago', 'length', 'max'=>20),
			array('status, ip, tipoCliente, nombreResponsable, apaternoResponsable, amaternoResponsable, telefonoResponsable, ocupacionResponsable, almacenTransferencia, almacenSolicitud', 'length', 'max'=>15),
			array('cita, descuento, entidad, solicitaTransferencia, expediente, ministerio, alergiaT, alergiaP, alergiaR, alergiaPA, paquete, primeraVez, banderaPC, ventasDirectas, dividirCuentas, statusDevolucion, despliegaEC, estudiante, facturacionEspecial, beneficencia, statusCortesia, activaBeneficencia, facturacionconfigurada, recalcula, tipoBeneficencia, llenadoEspecial', 'length', 'max'=>2),
			array('tipoConsulta, confirmaCita, entregaExpediente, cargos, abonos, iva, NUMMOVTO, FOLIO, dia, tipoCobro, cargosCXC, solicitudes, statusUrgencias, codigoAutTC, comision, cantidadRecibida, numExtensiones, tipoTransaccion, usuarioTraslado, banderaAlta, credito, statusAlta, statusTraspaso, usuarioRecepcionExpediente, quirurgico, enfermera, admision, cirugia, labor, tipoCuenta, naturaleza', 'length', 'max'=>1),
			array('ID_CCOSTO', 'length', 'max'=>30),
			array('statusCuenta, statusDeposito, limiteSeguro', 'length', 'max'=>11),
			array('folioVenta, incapacidad', 'length', 'max'=>200),
			array('tipoPago, ultimosDigitos, telefono, bancoTC, bancoTransferencia, numeroTransferencia, numeroCheque, bancoCheque, codigoPaquete, statusEstudio, statusServicios, usuarioRecepcion, statusCaja, statusPaciente, statusCargo, empleado, folioAuditoria, statusCargoDevolucion, responsableCuenta, fechaVencimiento, statusOtros, usuarioDescuento, curp', 'length', 'max'=>255),
			array('porcentaje', 'length', 'max'=>3),
			array('pacienteRecepcion, horaRecepcion, fechaRecepcion, seguroFacturacion, usuarioDevolucion, horaDevolucion, fechaDevolucion', 'length', 'max'=>254),
			array('descripcionpaquete', 'length', 'max'=>100),
			array('statusRecepcion, dx, motivoConsulta, diagnostico', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyClientesInternos, statusRecepcion, numeroE, nCuenta, numeroExpediente, medico, almacen, paciente, seguro, autoriza, credencial, fecha, hora, status, cita, usuario, fecha1, ip, tipoCliente, tipoConsulta, numeroNomina, confirmaCita, entregaExpediente, cargos, abonos, iva, descuento, poliza, ID_CCOSTO, NUMMOVTO, ID_EJERCICIO, ID_LIBRO, FOLIO, dia, tipoCobro, cargosCXC, solicitudes, statusUrgencias, medicoForaneo, observaciones, edad, codigoAutTC, comision, cantidadRecibida, tipoPaciente, statusCuenta, statusDeposito, cuarto, numExtensiones, deposito, tipoResponsable, limiteCredito, especialidad, dx, nombreResponsable, apaternoResponsable, amaternoResponsable, direccionResponsable, telefonoResponsable, ocupacionResponsable, tipoTransaccion, parentescoResponsable, saldoCompania, usuarioTraslado, banderaAlta, usuarioCierre, fechaCierre, horaCierre, nOrden, credito, statusAlta, statusTraspaso, dxFinal, statusExpediente, dependencia, entidad, solicitaTransferencia, almacenTransferencia, almacenSolicitud, horaSolicitud, fechaSolicitud, expediente, usuarioRecepcionExpediente, accidente, tipoAccidente, llegoHospital, ministerio, motivoConsulta, quirurgico, fechaAccidente, horaAccidente, enfermera, alergiaT, alergiaP, alergiaR, alergiaPA, admision, tiposAlergias, cirugia, labor, peso, lugarAccidente, paquete, statusPaquete, statusFactura, pagoFactura, numeroFactura, diagnostico, primeraVez, folioVenta, clientePrincipal, banderaPC, folioAplicado, numRecibo, nombreCliente, folioDevolucion, codigoCaja, numCorte, tipoPago, ultimosDigitos, telefono, bancoTC, bancoTransferencia, numeroTransferencia, numeroCheque, bancoCheque, codigoPaquete, ventasDirectas, statusEstudio, statusServicios, usuarioRecepcion, statusCaja, statusPaciente, notaIngreso, statusCargo, empleado, dividirCuentas, folioAuditoria, statusCargoDevolucion, responsableCuenta, fechaVencimiento, statusOtros, porcentajeDescuento, usuarioDescuento, porcentaje, guiaHora, curp, tipoCuenta, statusDevolucion, despliegaEC, estudiante, naturaleza, pacienteRecepcion, horaRecepcion, fechaRecepcion, limiteSeguro, facturacionEspecial, seguroFacturacion, beneficencia, statusCortesia, usuarioDevolucion, horaDevolucion, fechaDevolucion, pagoAplicadoCxC, statusPago, fechaPagoCxC, activaBeneficencia, facturacionconfigurada, incapacidad, descripcionpaquete, recalcula, tipoBeneficencia, llenadoEspecial, numSolicitud, ticket, rows', 'safe', 'on'=>'search'),
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
			'keyClientesInternos' => 'Key Clientes Internos',
			'statusRecepcion' => 'Status Recepcion',
			'numeroE' => 'Numero E',
			'nCuenta' => 'N Cuenta',
			'numeroExpediente' => 'Numero Expediente',
			'medico' => 'Medico',
			'almacen' => 'Almacen',
			'paciente' => 'Paciente',
			'seguro' => 'Seguro',
			'autoriza' => 'Autoriza',
			'credencial' => 'Credencial',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'status' => 'Status',
			'cita' => 'Cita',
			'usuario' => 'Usuario',
			'fecha1' => 'Fecha1',
			'ip' => 'Ip',
			'tipoCliente' => 'Tipo Cliente',
			'tipoConsulta' => 'Tipo Consulta',
			'numeroNomina' => 'Numero Nomina',
			'confirmaCita' => 'Confirma Cita',
			'entregaExpediente' => 'Entrega Expediente',
			'cargos' => 'Cargos',
			'abonos' => 'Abonos',
			'iva' => 'Iva',
			'descuento' => 'Descuento',
			'poliza' => 'Poliza',
			'ID_CCOSTO' => 'Id Ccosto',
			'NUMMOVTO' => 'Nummovto',
			'ID_EJERCICIO' => 'Id Ejercicio',
			'ID_LIBRO' => 'Id Libro',
			'FOLIO' => 'Folio',
			'dia' => 'Dia',
			'tipoCobro' => 'Tipo Cobro',
			'cargosCXC' => 'Cargos Cxc',
			'solicitudes' => 'Solicitudes',
			'statusUrgencias' => 'Status Urgencias',
			'medicoForaneo' => 'Medico Foraneo',
			'observaciones' => 'Observaciones',
			'edad' => 'Edad',
			'codigoAutTC' => 'Codigo Aut Tc',
			'comision' => 'Comision',
			'cantidadRecibida' => 'Cantidad Recibida',
			'tipoPaciente' => 'Tipo Paciente',
			'statusCuenta' => 'Status Cuenta',
			'statusDeposito' => 'Status Deposito',
			'cuarto' => 'Cuarto',
			'numExtensiones' => 'Num Extensiones',
			'deposito' => 'Deposito',
			'tipoResponsable' => 'Tipo Responsable',
			'limiteCredito' => 'Limite Credito',
			'especialidad' => 'Especialidad',
			'dx' => 'Dx',
			'nombreResponsable' => 'Nombre Responsable',
			'apaternoResponsable' => 'Apaterno Responsable',
			'amaternoResponsable' => 'Amaterno Responsable',
			'direccionResponsable' => 'Direccion Responsable',
			'telefonoResponsable' => 'Telefono Responsable',
			'ocupacionResponsable' => 'Ocupacion Responsable',
			'tipoTransaccion' => 'Tipo Transaccion',
			'parentescoResponsable' => 'Parentesco Responsable',
			'saldoCompania' => 'Saldo Compania',
			'usuarioTraslado' => 'Usuario Traslado',
			'banderaAlta' => 'Bandera Alta',
			'usuarioCierre' => 'Usuario Cierre',
			'fechaCierre' => 'Fecha Cierre',
			'horaCierre' => 'Hora Cierre',
			'nOrden' => 'N Orden',
			'credito' => 'Credito',
			'statusAlta' => 'Status Alta',
			'statusTraspaso' => 'Status Traspaso',
			'dxFinal' => 'Dx Final',
			'statusExpediente' => 'Status Expediente',
			'dependencia' => 'Dependencia',
			'entidad' => 'Entidad',
			'solicitaTransferencia' => 'Solicita Transferencia',
			'almacenTransferencia' => 'Almacen Transferencia',
			'almacenSolicitud' => 'Almacen Solicitud',
			'horaSolicitud' => 'Hora Solicitud',
			'fechaSolicitud' => 'Fecha Solicitud',
			'expediente' => 'Expediente',
			'usuarioRecepcionExpediente' => 'Usuario Recepcion Expediente',
			'accidente' => 'Accidente',
			'tipoAccidente' => 'Tipo Accidente',
			'llegoHospital' => 'Llego Hospital',
			'ministerio' => 'Ministerio',
			'motivoConsulta' => 'Motivo Consulta',
			'quirurgico' => 'Quirurgico',
			'fechaAccidente' => 'Fecha Accidente',
			'horaAccidente' => 'Hora Accidente',
			'enfermera' => 'Enfermera',
			'alergiaT' => 'Alergia T',
			'alergiaP' => 'Alergia P',
			'alergiaR' => 'Alergia R',
			'alergiaPA' => 'Alergia Pa',
			'admision' => 'Admision',
			'tiposAlergias' => 'Tipos Alergias',
			'cirugia' => 'Cirugia',
			'labor' => 'Labor',
			'peso' => 'Peso',
			'lugarAccidente' => 'Lugar Accidente',
			'paquete' => 'Paquete',
			'statusPaquete' => 'Status Paquete',
			'statusFactura' => 'Status Factura',
			'pagoFactura' => 'Pago Factura',
			'numeroFactura' => 'Numero Factura',
			'diagnostico' => 'Diagnostico',
			'primeraVez' => 'Primera Vez',
			'folioVenta' => 'Folio Venta',
			'clientePrincipal' => 'Cliente Principal',
			'banderaPC' => 'Bandera Pc',
			'folioAplicado' => 'Folio Aplicado',
			'numRecibo' => 'Num Recibo',
			'nombreCliente' => 'Nombre Cliente',
			'folioDevolucion' => 'Folio Devolucion',
			'codigoCaja' => 'Codigo Caja',
			'numCorte' => 'Num Corte',
			'tipoPago' => 'Tipo Pago',
			'ultimosDigitos' => 'Ultimos Digitos',
			'telefono' => 'Telefono',
			'bancoTC' => 'Banco Tc',
			'bancoTransferencia' => 'Banco Transferencia',
			'numeroTransferencia' => 'Numero Transferencia',
			'numeroCheque' => 'Numero Cheque',
			'bancoCheque' => 'Banco Cheque',
			'codigoPaquete' => 'Codigo Paquete',
			'ventasDirectas' => 'Ventas Directas',
			'statusEstudio' => 'Status Estudio',
			'statusServicios' => 'Status Servicios',
			'usuarioRecepcion' => 'Usuario Recepcion',
			'statusCaja' => 'Status Caja',
			'statusPaciente' => 'Status Paciente',
			'notaIngreso' => 'Nota Ingreso',
			'statusCargo' => 'Status Cargo',
			'empleado' => 'Empleado',
			'dividirCuentas' => 'Dividir Cuentas',
			'folioAuditoria' => 'Folio Auditoria',
			'statusCargoDevolucion' => 'Status Cargo Devolucion',
			'responsableCuenta' => 'Responsable Cuenta',
			'fechaVencimiento' => 'Fecha Vencimiento',
			'statusOtros' => 'Status Otros',
			'porcentajeDescuento' => 'Porcentaje Descuento',
			'usuarioDescuento' => 'Usuario Descuento',
			'porcentaje' => 'Porcentaje',
			'guiaHora' => 'Guia Hora',
			'curp' => 'Curp',
			'tipoCuenta' => 'Tipo Cuenta',
			'statusDevolucion' => 'Status Devolucion',
			'despliegaEC' => 'Despliega Ec',
			'estudiante' => 'Estudiante',
			'naturaleza' => 'Naturaleza',
			'pacienteRecepcion' => 'Paciente Recepcion',
			'horaRecepcion' => 'Hora Recepcion',
			'fechaRecepcion' => 'Fecha Recepcion',
			'limiteSeguro' => 'Limite Seguro',
			'facturacionEspecial' => 'Facturacion Especial',
			'seguroFacturacion' => 'Seguro Facturacion',
			'beneficencia' => 'Beneficencia',
			'statusCortesia' => 'Status Cortesia',
			'usuarioDevolucion' => 'Usuario Devolucion',
			'horaDevolucion' => 'Hora Devolucion',
			'fechaDevolucion' => 'Fecha Devolucion',
			'pagoAplicadoCxC' => 'Pago Aplicado Cx C',
			'statusPago' => 'Status Pago',
			'fechaPagoCxC' => 'Fecha Pago Cx C',
			'activaBeneficencia' => 'Activa Beneficencia',
			'facturacionconfigurada' => 'Facturacionconfigurada',
			'incapacidad' => 'Incapacidad',
			'descripcionpaquete' => 'Descripcionpaquete',
			'recalcula' => 'Recalcula',
			'tipoBeneficencia' => 'Tipo Beneficencia',
			'llenadoEspecial' => 'Llenado Especial',
			'numSolicitud' => 'Num Solicitud',
			'ticket' => 'Ticket',
			'rows' => 'Rows',
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

		$criteria->compare('keyClientesInternos',$this->keyClientesInternos,true);
		$criteria->compare('statusRecepcion',$this->statusRecepcion,true);
		$criteria->compare('numeroE',$this->numeroE,true);
		$criteria->compare('nCuenta',$this->nCuenta);
		$criteria->compare('numeroExpediente',$this->numeroExpediente);
		$criteria->compare('medico',$this->medico,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('paciente',$this->paciente,true);
		$criteria->compare('seguro',$this->seguro,true);
		$criteria->compare('autoriza',$this->autoriza,true);
		$criteria->compare('credencial',$this->credencial,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('cita',$this->cita,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha1',$this->fecha1,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('tipoCliente',$this->tipoCliente,true);
		$criteria->compare('tipoConsulta',$this->tipoConsulta,true);
		$criteria->compare('numeroNomina',$this->numeroNomina,true);
		$criteria->compare('confirmaCita',$this->confirmaCita,true);
		$criteria->compare('entregaExpediente',$this->entregaExpediente,true);
		$criteria->compare('cargos',$this->cargos,true);
		$criteria->compare('abonos',$this->abonos,true);
		$criteria->compare('iva',$this->iva,true);
		$criteria->compare('descuento',$this->descuento,true);
		$criteria->compare('poliza',$this->poliza);
		$criteria->compare('ID_CCOSTO',$this->ID_CCOSTO,true);
		$criteria->compare('NUMMOVTO',$this->NUMMOVTO,true);
		$criteria->compare('ID_EJERCICIO',$this->ID_EJERCICIO,true);
		$criteria->compare('ID_LIBRO',$this->ID_LIBRO,true);
		$criteria->compare('FOLIO',$this->FOLIO,true);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('tipoCobro',$this->tipoCobro,true);
		$criteria->compare('cargosCXC',$this->cargosCXC,true);
		$criteria->compare('solicitudes',$this->solicitudes,true);
		$criteria->compare('statusUrgencias',$this->statusUrgencias,true);
		$criteria->compare('medicoForaneo',$this->medicoForaneo,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('codigoAutTC',$this->codigoAutTC,true);
		$criteria->compare('comision',$this->comision,true);
		$criteria->compare('cantidadRecibida',$this->cantidadRecibida,true);
		$criteria->compare('tipoPaciente',$this->tipoPaciente,true);
		$criteria->compare('statusCuenta',$this->statusCuenta,true);
		$criteria->compare('statusDeposito',$this->statusDeposito,true);
		$criteria->compare('cuarto',$this->cuarto,true);
		$criteria->compare('numExtensiones',$this->numExtensiones,true);
		$criteria->compare('deposito',$this->deposito);
		$criteria->compare('tipoResponsable',$this->tipoResponsable,true);
		$criteria->compare('limiteCredito',$this->limiteCredito);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('dx',$this->dx,true);
		$criteria->compare('nombreResponsable',$this->nombreResponsable,true);
		$criteria->compare('apaternoResponsable',$this->apaternoResponsable,true);
		$criteria->compare('amaternoResponsable',$this->amaternoResponsable,true);
		$criteria->compare('direccionResponsable',$this->direccionResponsable,true);
		$criteria->compare('telefonoResponsable',$this->telefonoResponsable,true);
		$criteria->compare('ocupacionResponsable',$this->ocupacionResponsable,true);
		$criteria->compare('tipoTransaccion',$this->tipoTransaccion,true);
		$criteria->compare('parentescoResponsable',$this->parentescoResponsable,true);
		$criteria->compare('saldoCompania',$this->saldoCompania);
		$criteria->compare('usuarioTraslado',$this->usuarioTraslado,true);
		$criteria->compare('banderaAlta',$this->banderaAlta,true);
		$criteria->compare('usuarioCierre',$this->usuarioCierre,true);
		$criteria->compare('fechaCierre',$this->fechaCierre,true);
		$criteria->compare('horaCierre',$this->horaCierre,true);
		$criteria->compare('nOrden',$this->nOrden);
		$criteria->compare('credito',$this->credito,true);
		$criteria->compare('statusAlta',$this->statusAlta,true);
		$criteria->compare('statusTraspaso',$this->statusTraspaso,true);
		$criteria->compare('dxFinal',$this->dxFinal,true);
		$criteria->compare('statusExpediente',$this->statusExpediente,true);
		$criteria->compare('dependencia',$this->dependencia,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('solicitaTransferencia',$this->solicitaTransferencia,true);
		$criteria->compare('almacenTransferencia',$this->almacenTransferencia,true);
		$criteria->compare('almacenSolicitud',$this->almacenSolicitud,true);
		$criteria->compare('horaSolicitud',$this->horaSolicitud,true);
		$criteria->compare('fechaSolicitud',$this->fechaSolicitud,true);
		$criteria->compare('expediente',$this->expediente,true);
		$criteria->compare('usuarioRecepcionExpediente',$this->usuarioRecepcionExpediente,true);
		$criteria->compare('accidente',$this->accidente,true);
		$criteria->compare('tipoAccidente',$this->tipoAccidente,true);
		$criteria->compare('llegoHospital',$this->llegoHospital,true);
		$criteria->compare('ministerio',$this->ministerio,true);
		$criteria->compare('motivoConsulta',$this->motivoConsulta,true);
		$criteria->compare('quirurgico',$this->quirurgico,true);
		$criteria->compare('fechaAccidente',$this->fechaAccidente,true);
		$criteria->compare('horaAccidente',$this->horaAccidente,true);
		$criteria->compare('enfermera',$this->enfermera,true);
		$criteria->compare('alergiaT',$this->alergiaT,true);
		$criteria->compare('alergiaP',$this->alergiaP,true);
		$criteria->compare('alergiaR',$this->alergiaR,true);
		$criteria->compare('alergiaPA',$this->alergiaPA,true);
		$criteria->compare('admision',$this->admision,true);
		$criteria->compare('tiposAlergias',$this->tiposAlergias,true);
		$criteria->compare('cirugia',$this->cirugia,true);
		$criteria->compare('labor',$this->labor,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('lugarAccidente',$this->lugarAccidente,true);
		$criteria->compare('paquete',$this->paquete,true);
		$criteria->compare('statusPaquete',$this->statusPaquete,true);
		$criteria->compare('statusFactura',$this->statusFactura,true);
		$criteria->compare('pagoFactura',$this->pagoFactura,true);
		$criteria->compare('numeroFactura',$this->numeroFactura,true);
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$criteria->compare('primeraVez',$this->primeraVez,true);
		$criteria->compare('folioVenta',$this->folioVenta,true);
		$criteria->compare('clientePrincipal',$this->clientePrincipal,true);
		$criteria->compare('banderaPC',$this->banderaPC,true);
		$criteria->compare('folioAplicado',$this->folioAplicado,true);
		$criteria->compare('numRecibo',$this->numRecibo,true);
		$criteria->compare('nombreCliente',$this->nombreCliente,true);
		$criteria->compare('folioDevolucion',$this->folioDevolucion,true);
		$criteria->compare('codigoCaja',$this->codigoCaja);
		$criteria->compare('numCorte',$this->numCorte,true);
		$criteria->compare('tipoPago',$this->tipoPago,true);
		$criteria->compare('ultimosDigitos',$this->ultimosDigitos,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('bancoTC',$this->bancoTC,true);
		$criteria->compare('bancoTransferencia',$this->bancoTransferencia,true);
		$criteria->compare('numeroTransferencia',$this->numeroTransferencia,true);
		$criteria->compare('numeroCheque',$this->numeroCheque,true);
		$criteria->compare('bancoCheque',$this->bancoCheque,true);
		$criteria->compare('codigoPaquete',$this->codigoPaquete,true);
		$criteria->compare('ventasDirectas',$this->ventasDirectas,true);
		$criteria->compare('statusEstudio',$this->statusEstudio,true);
		$criteria->compare('statusServicios',$this->statusServicios,true);
		$criteria->compare('usuarioRecepcion',$this->usuarioRecepcion,true);
		$criteria->compare('statusCaja',$this->statusCaja,true);
		$criteria->compare('statusPaciente',$this->statusPaciente,true);
		$criteria->compare('notaIngreso',$this->notaIngreso,true);
		$criteria->compare('statusCargo',$this->statusCargo,true);
		$criteria->compare('empleado',$this->empleado,true);
		$criteria->compare('dividirCuentas',$this->dividirCuentas,true);
		$criteria->compare('folioAuditoria',$this->folioAuditoria,true);
		$criteria->compare('statusCargoDevolucion',$this->statusCargoDevolucion,true);
		$criteria->compare('responsableCuenta',$this->responsableCuenta,true);
		$criteria->compare('fechaVencimiento',$this->fechaVencimiento,true);
		$criteria->compare('statusOtros',$this->statusOtros,true);
		$criteria->compare('porcentajeDescuento',$this->porcentajeDescuento);
		$criteria->compare('usuarioDescuento',$this->usuarioDescuento,true);
		$criteria->compare('porcentaje',$this->porcentaje,true);
		$criteria->compare('guiaHora',$this->guiaHora);
		$criteria->compare('curp',$this->curp,true);
		$criteria->compare('tipoCuenta',$this->tipoCuenta,true);
		$criteria->compare('statusDevolucion',$this->statusDevolucion,true);
		$criteria->compare('despliegaEC',$this->despliegaEC,true);
		$criteria->compare('estudiante',$this->estudiante,true);
		$criteria->compare('naturaleza',$this->naturaleza,true);
		$criteria->compare('pacienteRecepcion',$this->pacienteRecepcion,true);
		$criteria->compare('horaRecepcion',$this->horaRecepcion,true);
		$criteria->compare('fechaRecepcion',$this->fechaRecepcion,true);
		$criteria->compare('limiteSeguro',$this->limiteSeguro,true);
		$criteria->compare('facturacionEspecial',$this->facturacionEspecial,true);
		$criteria->compare('seguroFacturacion',$this->seguroFacturacion,true);
		$criteria->compare('beneficencia',$this->beneficencia,true);
		$criteria->compare('statusCortesia',$this->statusCortesia,true);
		$criteria->compare('usuarioDevolucion',$this->usuarioDevolucion,true);
		$criteria->compare('horaDevolucion',$this->horaDevolucion,true);
		$criteria->compare('fechaDevolucion',$this->fechaDevolucion,true);
		$criteria->compare('pagoAplicadoCxC',$this->pagoAplicadoCxC,true);
		$criteria->compare('statusPago',$this->statusPago,true);
		$criteria->compare('fechaPagoCxC',$this->fechaPagoCxC,true);
		$criteria->compare('activaBeneficencia',$this->activaBeneficencia,true);
		$criteria->compare('facturacionconfigurada',$this->facturacionconfigurada,true);
		$criteria->compare('incapacidad',$this->incapacidad,true);
		$criteria->compare('descripcionpaquete',$this->descripcionpaquete,true);
		$criteria->compare('recalcula',$this->recalcula,true);
		$criteria->compare('tipoBeneficencia',$this->tipoBeneficencia,true);
		$criteria->compare('llenadoEspecial',$this->llenadoEspecial,true);
		$criteria->compare('numSolicitud',$this->numSolicitud,true);
		$criteria->compare('ticket',$this->ticket);
		$criteria->compare('rows',$this->rows);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}