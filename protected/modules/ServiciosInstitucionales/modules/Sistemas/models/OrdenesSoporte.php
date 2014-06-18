<?php

/**
 * This is the model class for table "sis_ordenesSOP".
 *
 * The followings are the available columns in table 'sis_ordenesSOP':
 * @property integer $keySOP
 * @property string $entidadSolicitud
 * @property string $almacen
 * @property integer $keyTS
 * @property integer $registro
 * @property string $nombre
 * @property string $descripcionSoporte
 * @property string $descripcionAlmacen
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $entidad
 * @property string $solicitud
 * @property string $descripcionTS
 * @property string $status
 * @property string $observaciones
 * @property string $usuarioEjecutor
 * @property string $fechaFinal
 * @property string $almacenSoporte
 * @property string $codigo
 * @property string $fechaInicio
 */
class OrdenesSoporte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrdenesSoporte the static model class
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
		return 'sis_ordenesSOP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keyTS, registro, nombre, descripcionSoporte, usuario, fecha, hora, solicitud, descripcionTS, status, observaciones, usuarioEjecutor, fechaFinal, almacenSoporte, descripcionAlmacen', 'required'),
			//array('entidadSolicitud, almacen, descripcionAlmacen, entidad, almacenSoporte', 'required'),
			array('keyTS, registro', 'numerical', 'integerOnly'=>true),
			array('entidadSolicitud, entidad', 'length', 'max'=>2),
			array('almacen, nombre, usuario, almacenSoporte', 'length', 'max'=>30),
			array('descripcionSoporte, descripcionAlmacen', 'length', 'max'=>200),
			array('fecha, hora, fechaFinal', 'length', 'max'=>19),
			array('fechaFinal, fechaInicio', 'length', 'max'=>19),
			array('solicitud, status', 'length', 'max'=>20),
			array('descripcionTS', 'length', 'max'=>100),
			array('observaciones', 'length', 'max'=>250),
			array('usuarioEjecutor', 'length', 'max'=>50),
			array('codigo', 'length', 'max'=>12),
			array('entidadSolicitud', 'entidadNoCorrespondeACodigo'),
			array('codigo', 'codigoNoRegistrado'),
			array('fechaInicio', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keySOP, entidadSolicitud, almacen, keyTS, registro, nombre, descripcionSoporte, descripcionAlmacen, usuario, fecha, hora, entidad, solicitud, descripcionTS, status, observaciones, usuarioEjecutor, fechaFinal, almacenSoporte, codigo, fechaInicio', 'safe', 'on'=>'search'),
		);
	}
	
	public function codigoNoRegistrado($attribute) {
		$equipos = EquipoComputo::model()->findByAttributes(array('codigo'=>($this->$attribute)));
		$telefonia= TelefoniaCelular::model()->findByAttributes(array('codigo'=>($this->$attribute)));
	
		if(!empty($this->$attribute) && count($equipos)<1 && count($telefonia)<1)
		   $this->addError($attribute, 'El código no existe o no asignado a ningún equipo');
	  }
	  
	public function entidadNoCorrespondeACodigo($attribute) {
		$entidadcode=substr($this->codigo, 1, 2);
		if($this->$attribute != $entidadcode && !empty($this->codigo)&& !empty($this->entidadSolicitud))
			$this->addError($attribute, $entidadcode.' El codigo no pertenece a esta entidad '.$this->$attribute.'-');
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
			'keySOP' => '#',
			'entidadSolicitud' => 'Entidad',
			'almacen' => 'Almacen',
			'keyTS' => 'Tipo soporte',
			'registro' => 'Registro',
			'nombre' => 'Usuario que solicita',
			'descripcionSoporte' => 'Descripcion Soporte',
			'descripcionAlmacen' => 'Departamento',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha solicitud',
			'hora' => 'Hora',
			'entidad' => 'Entidad',
			'solicitud' => 'Solicitud',
			'descripcionTS' => 'Descripcion tipo de soporte',
			'status' => 'Status',
			'observaciones' => 'Observaciones',
			'usuarioEjecutor' => 'Atiende',
			'fechaFinal' => 'Fecha terminación',
			'almacenSoporte' => 'Almacen Soporte',
			'codigo' => 'Codigo',
			'fechaInicio' => 'Fecha Inicio'
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

		$criteria->compare('keySOP',$this->keySOP);
		$criteria->compare('entidadSolicitud',$this->entidadSolicitud,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('keyTS',$this->keyTS);
		$criteria->compare('registro',$this->registro);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcionSoporte',$this->descripcionSoporte,true);
		$criteria->compare('descripcionAlmacen',$this->descripcionAlmacen,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('solicitud',$this->solicitud,true);
		$criteria->compare('descripcionTS',$this->descripcionTS,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('usuarioEjecutor',$this->usuarioEjecutor,true);
		$criteria->compare('fechaFinal',$this->fechaFinal,true);
		$criteria->compare('almacenSoporte',$this->almacenSoporte,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('fechaInicio',$this->codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
