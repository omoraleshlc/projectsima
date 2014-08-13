<?php

/**
 * This is the model class for table "sis_observacionesSOP".
 *
 * The followings are the available columns in table 'sis_observacionesSOP':
 * @property integer $keySOP
 * @property string $descripcion
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $entidad
 * @property string $keyS
 */
class ObservacionesOrdenSoporte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ObservacionesOrdenSoporte the static model class
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
		return 'sis_observacionesSOP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion', 'required'),
			array('keySOP', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>100),
			array('usuario', 'length', 'max'=>30),
			array('fecha, hora', 'length', 'max'=>10),
			array('entidad', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keySOP, descripcion, usuario, fecha, hora, entidad, keyS', 'safe', 'on'=>'search'),
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
			'keySOP' => 'Key Sop',
			'descripcion' => 'Descripcion',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'entidad' => 'Entidad',
			'keyS' => 'Key S',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('keyS',$this->keyS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
