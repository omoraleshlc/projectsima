<?php

/**
 * This is the model class for table "entidades".
 *
 * The followings are the available columns in table 'entidades':
 * @property integer $keyEntidades
 * @property string $codigoEntidad
 * @property string $descripcionEntidad
 * @property string $status
 * @property string $fechaApertura
 * @property string $prefijoEfectivo
 * @property string $prefijoCxC
 * @property integer $digitosFactura
 * @property string $rutaRecibo
 * @property string $rutaReciboPaquete
 * @property string $statusExistencias
 * @property string $direccion
 * @property string $cp
 * @property string $telefono
 * @property string $url
 */
class Entidades extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entidades the static model class
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
		return 'entidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigoEntidad, descripcionEntidad, status, fechaApertura, prefijoEfectivo, prefijoCxC, digitosFactura, rutaRecibo, rutaReciboPaquete, statusExistencias, direccion, cp, telefono, url', 'required'),
			array('digitosFactura', 'numerical', 'integerOnly'=>true),
			array('codigoEntidad', 'length', 'max'=>2),
			array('descripcionEntidad', 'length', 'max'=>50),
			array('status, statusExistencias', 'length', 'max'=>1),
			array('fechaApertura', 'length', 'max'=>10),
			array('prefijoEfectivo, prefijoCxC', 'length', 'max'=>5),
			array('rutaRecibo, rutaReciboPaquete', 'length', 'max'=>150),
			array('direccion, url', 'length', 'max'=>250),
			array('cp', 'length', 'max'=>12),
			array('telefono', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyEntidades, codigoEntidad, descripcionEntidad, status, fechaApertura, prefijoEfectivo, prefijoCxC, digitosFactura, rutaRecibo, rutaReciboPaquete, statusExistencias, direccion, cp, telefono, url', 'safe', 'on'=>'search'),
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
			'keyEntidades' => 'Key Entidades',
			'codigoEntidad' => 'Codigo Entidad',
			'descripcionEntidad' => 'Descripcion Entidad',
			'status' => 'Status',
			'fechaApertura' => 'Fecha Apertura',
			'prefijoEfectivo' => 'Prefijo Efectivo',
			'prefijoCxC' => 'Prefijo Cx C',
			'digitosFactura' => 'Digitos Factura',
			'rutaRecibo' => 'Ruta Recibo',
			'rutaReciboPaquete' => 'Ruta Recibo Paquete',
			'statusExistencias' => 'Status Existencias',
			'direccion' => 'Direccion',
			'cp' => 'Cp',
			'telefono' => 'Telefono',
			'url' => 'Url',
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

		$criteria->compare('keyEntidades',$this->keyEntidades);
		$criteria->compare('codigoEntidad',$this->codigoEntidad,true);
		$criteria->compare('descripcionEntidad',$this->descripcionEntidad,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fechaApertura',$this->fechaApertura,true);
		$criteria->compare('prefijoEfectivo',$this->prefijoEfectivo,true);
		$criteria->compare('prefijoCxC',$this->prefijoCxC,true);
		$criteria->compare('digitosFactura',$this->digitosFactura);
		$criteria->compare('rutaRecibo',$this->rutaRecibo,true);
		$criteria->compare('rutaReciboPaquete',$this->rutaReciboPaquete,true);
		$criteria->compare('statusExistencias',$this->statusExistencias,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cp',$this->cp,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}