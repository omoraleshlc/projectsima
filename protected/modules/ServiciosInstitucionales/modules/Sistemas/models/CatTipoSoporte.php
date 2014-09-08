<?php

/**
 * This is the model class for table "sis_tipoSoporte".
 *
 * The followings are the available columns in table 'sis_tipoSoporte':
 * @property integer $keyRSA
 * @property string $descripcion
 */
class CatTipoSoporte extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatTipoSoporte the static model class
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
		return 'sis_relacion_soporte_almacenes';
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
			array('descripcion', 'length', 'max'=>200),
			array('almacen', 'length', 'max'=>30),
			array('descripcion', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyRSA, descripcion', 'safe', 'on'=>'search'),
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
			'keyRSA' => 'Key Ts',
			'descripcion' => 'Descripcion',
			'almacen' => 'Almacen',
			'entidad' => 'Entidad',
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

		$criteria->compare('keyRSA',$this->keyRSA);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('entidad',$this->entidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
