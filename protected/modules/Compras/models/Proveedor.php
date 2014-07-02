<?php

/**
 * This is the model class for table "proveedores".
 *
 * The followings are the available columns in table 'proveedores':
 * @property integer $keyP
 * @property string $id_proveedor
 * @property string $razonSocial
 * @property string $ciudad
 * @property string $estado
 * @property integer $cp
 * @property string $telefono
 * @property string $telefono1
 * @property string $rfc
 * @property string $calle
 * @property string $colonia
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $status
 * @property string $tipoPersona
 * @property string $curp
 * @property string $ctaContable
 * @property string $copiaCedula
 * @property string $copiaActa
 * @property string $copiaHacienda
 * @property string $comprobanteDomicilio
 * @property string $retenciones
 * @property string $tipoProveedor
 * @property string $procedenciaProveedor
 * @property string $entidad
 * @property string $id_fiscal
 * @property integer $codigoPostal
 * @property integer $limite1
 * @property integer $limite2
 * @property integer $limite3
 * @property integer $limite4
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proveedor the static model class
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
		return 'proveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_proveedor, razonSocial, ciudad, estado, cp, telefono, telefono1, rfc, calle, colonia, usuario, fecha, hora, status, tipoPersona, curp, ctaContable, copiaCedula, copiaActa, copiaHacienda, comprobanteDomicilio, retenciones, tipoProveedor, procedenciaProveedor, entidad, id_fiscal, codigoPostal, limite1, limite2, limite3, limite4', 'required'),
			array('cp, codigoPostal, limite1, limite2, limite3, limite4', 'numerical', 'integerOnly'=>true),
			array('id_proveedor, razonSocial, ciudad, estado, telefono, telefono1, rfc, calle, colonia, usuario, fecha, hora, status, tipoPersona, curp, ctaContable, copiaCedula, copiaActa, copiaHacienda, comprobanteDomicilio, retenciones, tipoProveedor, procedenciaProveedor, entidad, id_fiscal', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyP, id_proveedor, razonSocial, ciudad, estado, cp, telefono, telefono1, rfc, calle, colonia, usuario, fecha, hora, status, tipoPersona, curp, ctaContable, copiaCedula, copiaActa, copiaHacienda, comprobanteDomicilio, retenciones, tipoProveedor, procedenciaProveedor, entidad, id_fiscal, codigoPostal, limite1, limite2, limite3, limite4', 'safe', 'on'=>'search'),
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
			'keyP' => 'Key P',
			'id_proveedor' => 'Id Proveedor',
			'razonSocial' => 'Razon Social',
			'ciudad' => 'Ciudad',
			'estado' => 'Estado',
			'cp' => 'Cp',
			'telefono' => 'Telefono',
			'telefono1' => 'Telefono1',
			'rfc' => 'Rfc',
			'calle' => 'Calle',
			'colonia' => 'Colonia',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'status' => 'Status',
			'tipoPersona' => 'Tipo Persona',
			'curp' => 'Curp',
			'ctaContable' => 'Cta Contable',
			'copiaCedula' => 'Copia Cedula',
			'copiaActa' => 'Copia Acta',
			'copiaHacienda' => 'Copia Hacienda',
			'comprobanteDomicilio' => 'Comprobante Domicilio',
			'retenciones' => 'Retenciones',
			'tipoProveedor' => 'Tipo Proveedor',
			'procedenciaProveedor' => 'Procedencia Proveedor',
			'entidad' => 'Entidad',
			'id_fiscal' => 'Id Fiscal',
			'codigoPostal' => 'Codigo Postal',
			'limite1' => 'Limite1',
			'limite2' => 'Limite2',
			'limite3' => 'Limite3',
			'limite4' => 'Limite4',
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

		$criteria->compare('keyP',$this->keyP);
		$criteria->compare('id_proveedor',$this->id_proveedor,true);
		$criteria->compare('razonSocial',$this->razonSocial,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('telefono1',$this->telefono1,true);
		$criteria->compare('rfc',$this->rfc,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tipoPersona',$this->tipoPersona,true);
		$criteria->compare('curp',$this->curp,true);
		$criteria->compare('ctaContable',$this->ctaContable,true);
		$criteria->compare('copiaCedula',$this->copiaCedula,true);
		$criteria->compare('copiaActa',$this->copiaActa,true);
		$criteria->compare('copiaHacienda',$this->copiaHacienda,true);
		$criteria->compare('comprobanteDomicilio',$this->comprobanteDomicilio,true);
		$criteria->compare('retenciones',$this->retenciones,true);
		$criteria->compare('tipoProveedor',$this->tipoProveedor,true);
		$criteria->compare('procedenciaProveedor',$this->procedenciaProveedor,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('id_fiscal',$this->id_fiscal,true);
		$criteria->compare('codigoPostal',$this->codigoPostal);
		$criteria->compare('limite1',$this->limite1);
		$criteria->compare('limite2',$this->limite2);
		$criteria->compare('limite3',$this->limite3);
		$criteria->compare('limite4',$this->limite4);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}