<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $keyClientes
 * @property string $numCliente
 * @property string $nomCliente
 * @property string $ciudad
 * @property string $estado
 * @property string $cp
 * @property string $telCasa
 * @property string $telTrabajo
 * @property string $responsable
 * @property string $nombreCorto
 * @property string $rfc
 * @property string $pais
 * @property string $calle
 * @property string $colonia
 * @property string $delegacion
 * @property string $nivel
 * @property string $ID_AUXILIAR
 * @property string $usuario
 * @property string $fecha
 * @property string $banderaCXCT
 * @property string $tipoCliente
 * @property string $ID_CTAMAYOR
 * @property string $entidad
 * @property string $baseParticular
 * @property string $plazoPago
 * @property string $contraRecibo
 * @property string $subCliente
 * @property string $clientePrincipal
 * @property string $tipo
 * @property string $pagoEfectivo
 * @property string $credenciales
 * @property string $razonSocial
 * @property string $convenioExclusivo
 * @property string $cargoNomina
 * @property string $razonSocial1
 * @property string $gpoProducto
 * @property string $requiereExpediente
 * @property string $requiereMatricula
 * @property string $saldoInicial
 * @property string $facturacionPreconfigurada
 * @property string $permiteReferidos
 */
class Clientes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clientes the static model class
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
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numCliente, nomCliente, ciudad, estado, telCasa, telTrabajo, responsable, nombreCorto, rfc, pais, calle, colonia, delegacion, nivel, usuario, fecha, banderaCXCT, tipoCliente, ID_CTAMAYOR, baseParticular, plazoPago, contraRecibo, subCliente, clientePrincipal, tipo, pagoEfectivo, credenciales, razonSocial, convenioExclusivo, gpoProducto, requiereExpediente, requiereMatricula, saldoInicial, facturacionPreconfigurada, permiteReferidos', 'required'),
			array('numCliente', 'length', 'max'=>50),
			array('ciudad', 'length', 'max'=>200),
			array('estado, gpoProducto', 'length', 'max'=>30),
			array('cp, telCasa, telTrabajo, responsable, nombreCorto, rfc, pais, calle, colonia, delegacion, nivel, ID_AUXILIAR, usuario, fecha, banderaCXCT, tipoCliente, ID_CTAMAYOR, entidad, clientePrincipal, tipo, razonSocial, razonSocial1', 'length', 'max'=>255),
			array('baseParticular, contraRecibo, subCliente, pagoEfectivo, credenciales, convenioExclusivo, cargoNomina, requiereExpediente, requiereMatricula, facturacionPreconfigurada, permiteReferidos', 'length', 'max'=>2),
			array('plazoPago, saldoInicial', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyClientes, numCliente, nomCliente, ciudad, estado, cp, telCasa, telTrabajo, responsable, nombreCorto, rfc, pais, calle, colonia, delegacion, nivel, ID_AUXILIAR, usuario, fecha, banderaCXCT, tipoCliente, ID_CTAMAYOR, entidad, baseParticular, plazoPago, contraRecibo, subCliente, clientePrincipal, tipo, pagoEfectivo, credenciales, razonSocial, convenioExclusivo, cargoNomina, razonSocial1, gpoProducto, requiereExpediente, requiereMatricula, saldoInicial, facturacionPreconfigurada, permiteReferidos', 'safe', 'on'=>'search'),
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
			'keyClientes' => 'Key Clientes',
			'numCliente' => 'Num Cliente',
			'nomCliente' => 'Nom Cliente',
			'ciudad' => 'Ciudad',
			'estado' => 'Estado',
			'cp' => 'Cp',
			'telCasa' => 'Tel Casa',
			'telTrabajo' => 'Tel Trabajo',
			'responsable' => 'Responsable',
			'nombreCorto' => 'Nombre Corto',
			'rfc' => 'Rfc',
			'pais' => 'Pais',
			'calle' => 'Calle',
			'colonia' => 'Colonia',
			'delegacion' => 'Delegacion',
			'nivel' => 'Nivel',
			'ID_AUXILIAR' => 'Id Auxiliar',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'banderaCXCT' => 'Bandera Cxct',
			'tipoCliente' => 'Tipo Cliente',
			'ID_CTAMAYOR' => 'Id Ctamayor',
			'entidad' => 'Entidad',
			'baseParticular' => 'Base Particular',
			'plazoPago' => 'Plazo Pago',
			'contraRecibo' => 'Contra Recibo',
			'subCliente' => 'Sub Cliente',
			'clientePrincipal' => 'Cliente Principal',
			'tipo' => 'Tipo',
			'pagoEfectivo' => 'Pago Efectivo',
			'credenciales' => 'Credenciales',
			'razonSocial' => 'Razon Social',
			'convenioExclusivo' => 'Convenio Exclusivo',
			'cargoNomina' => 'Cargo Nomina',
			'razonSocial1' => 'Razon Social1',
			'gpoProducto' => 'Gpo Producto',
			'requiereExpediente' => 'Requiere Expediente',
			'requiereMatricula' => 'Requiere Matricula',
			'saldoInicial' => 'Saldo Inicial',
			'facturacionPreconfigurada' => 'Facturacion Preconfigurada',
			'permiteReferidos' => 'Permite Referidos',
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
		$criteria->compare('keyClientes',$this->keyClientes);
		$criteria->compare('numCliente',$this->numCliente,true);
		$criteria->compare('nomCliente',$this->nomCliente,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cp',$this->cp,true);
		$criteria->compare('telCasa',$this->telCasa,true);
		$criteria->compare('telTrabajo',$this->telTrabajo,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('nombreCorto',$this->nombreCorto,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('delegacion',$this->delegacion,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('ID_AUXILIAR',$this->ID_AUXILIAR,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('banderaCXCT',$this->banderaCXCT,true);
		$criteria->compare('tipoCliente',$this->tipoCliente,true);
		$criteria->compare('ID_CTAMAYOR',$this->ID_CTAMAYOR,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('baseParticular',$this->baseParticular,true);
		$criteria->compare('plazoPago',$this->plazoPago,true);
		$criteria->compare('contraRecibo',$this->contraRecibo,true);
		$criteria->compare('subCliente',$this->subCliente,true);
		$criteria->compare('clientePrincipal',$this->clientePrincipal,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('pagoEfectivo',$this->pagoEfectivo,true);
		$criteria->compare('credenciales',$this->credenciales,true);
		$criteria->compare('razonSocial',$this->razonSocial,true);
		$criteria->compare('convenioExclusivo',$this->convenioExclusivo,true);
		$criteria->compare('cargoNomina',$this->cargoNomina,true);
		$criteria->compare('razonSocial1',$this->razonSocial1,true);
		$criteria->compare('gpoProducto',$this->gpoProducto,true);
		$criteria->compare('requiereExpediente',$this->requiereExpediente,true);
		$criteria->compare('requiereMatricula',$this->requiereMatricula,true);
		$criteria->compare('saldoInicial',$this->saldoInicial,true);
		$criteria->compare('facturacionPreconfigurada',$this->facturacionPreconfigurada,true);
		$criteria->compare('permiteReferidos',$this->permiteReferidos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}