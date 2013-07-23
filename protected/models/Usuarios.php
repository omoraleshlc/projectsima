<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $folio
 * @property string $usuario
 * @property string $passwd
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property string $llave
 * @property string $ejercicio
 * @property string $fecha
 * @property string $medico
 * @property string $tipoUsuario
 * @property string $status
 * @property string $fechaIngreso
 * @property string $fechaSalida
 * @property string $horaIngreso
 * @property string $horaSalida
 * @property string $entidad
 * @property string $email
 * @property string $language
 * @property string $ip
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        
        
        
        public function usuario(){
            return $this->usuario();
        }
           
         public function passwd(){
            return $this->passwd();
        }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('llave, email, language, ip', 'required'),
			array('usuario, tipoUsuario', 'length', 'max'=>15),
			array('passwd, llave', 'length', 'max'=>200),
			array('nombre, aPaterno, aMaterno, medico', 'length', 'max'=>20),
			array('ejercicio, fecha, status, fechaIngreso, fechaSalida, horaIngreso, horaSalida, language', 'length', 'max'=>10),
			array('entidad', 'length', 'max'=>2),
			array('email', 'length', 'max'=>100),
			array('ip', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('folio, usuario, passwd, nombre, aPaterno, aMaterno, llave, ejercicio, fecha, medico, tipoUsuario, status, fechaIngreso, fechaSalida, horaIngreso, horaSalida, entidad, email, language, ip', 'safe', 'on'=>'search'),
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
			'folio' => 'Folio',
			'usuario' => 'Usuario',
			'passwd' => 'Passwd',
			'nombre' => 'Nombre',
			'aPaterno' => 'A Paterno',
			'aMaterno' => 'A Materno',
			'llave' => 'Llave',
			'ejercicio' => 'Ejercicio',
			'fecha' => 'Fecha',
			'medico' => 'Medico',
			'tipoUsuario' => 'Tipo Usuario',
			'status' => 'Status',
			'fechaIngreso' => 'Fecha Ingreso',
			'fechaSalida' => 'Fecha Salida',
			'horaIngreso' => 'Hora Ingreso',
			'horaSalida' => 'Hora Salida',
			'entidad' => 'Entidad',
			'email' => 'Email',
			'language' => 'Language',
			'ip' => 'Ip',
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

		$criteria->compare('folio',$this->folio);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('passwd',$this->passwd,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('aPaterno',$this->aPaterno,true);
		$criteria->compare('aMaterno',$this->aMaterno,true);
		$criteria->compare('llave',$this->llave,true);
		$criteria->compare('ejercicio',$this->ejercicio,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('medico',$this->medico,true);
		$criteria->compare('tipoUsuario',$this->tipoUsuario,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('fechaIngreso',$this->fechaIngreso,true);
		$criteria->compare('fechaSalida',$this->fechaSalida,true);
		$criteria->compare('horaIngreso',$this->horaIngreso,true);
		$criteria->compare('horaSalida',$this->horaSalida,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}