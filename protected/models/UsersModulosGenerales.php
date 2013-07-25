<?php

/**
 * This is the model class for table "users_modulosGenerales".
 *
 * The followings are the available columns in table 'users_modulosGenerales':
 * @property integer $keyMG
 * @property string $descripcion
 * @property string $entidad
 */
class UsersModulosGenerales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsersModulosGenerales the static model class
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
		return 'users_modulosGenerales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion, entidad', 'required'),
			array('descripcion', 'length', 'max'=>30),
			array('entidad', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyMG, descripcion, entidad', 'safe', 'on'=>'search'),
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
			'keyMG' => 'Key Mg',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('keyMG',$this->keyMG);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('entidad',$this->entidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}