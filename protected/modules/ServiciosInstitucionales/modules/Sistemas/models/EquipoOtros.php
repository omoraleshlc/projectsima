<?php

/**
 * This is the model class for table "sis_inventarioEqComputo".
 *
 * The followings are the available columns in table 'sis_inventarioEqComputo':
 * @property integer $keyIE
 * @property string $departamento
 * @property integer $keyTE
 * @property integer $keyMA
 * @property string $descripcionUbicacion
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $entidad
 * @property string $status
 * @property string $descripcionEntidad
 * @property string $descripcionAlmacen
 * @property string $descripcion
 * @property string $modelo
 * @property string $codigo
 * @property integer $keyP
 * @property integer $meses_mantenimiento
 * @property string $next_mantenimiento
 */
class EquipoComputo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EquipoComputo the static model class
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
		return 'sis_inventarioEqOtros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departamento,  keyTE,  keyMA,  descripcionUbicacion,  usuario,  fecha,  hora,  entidad,  status,  descripcionEntidad,  descripcionAlmacen,  descripcion,  modelo,  meses_mantenimiento', 'required'),
			array('keyTE, keyMA, keyP, meses_mantenimiento', 'numerical', 'integerOnly'=>true),
			array('departamento', 'length', 'max'=>50),
			array('descripcionUbicacion, descripcionEntidad, descripcionAlmacen, ubicacion, modelo', 'length', 'max'=>200),
			array('usuario', 'length', 'max'=>30),
			array('fecha, hora, meses_mantenimiento', 'length', 'max'=>10),
			array('entidad', 'length', 'max'=>2),
			array('status', 'length', 'max'=>1),
			array('codigo', 'length', 'max'=>12),
			array('codigo', 'unique', 'message'=>'Este código ya está asignado'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('departamento,  keyTE,  keyMA,  descripcionUbicacion,  usuario,  fecha,  hora,  entidad,  status,  descripcionEntidad,  descripcionAlmacen,  descripcion,  modelo,  codigo,  keyP,  meses_mantenimiento,  next_mantenimiento', 'safe', 'on'=>'search'),
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
			'keyIE' => '#',
			'departamento' => 'Departamento',
			'keyTE' => 'Tipo equipo',
			'keyMA' => 'Marca',
			'descripcionUbicacion' => 'Descripción Ubicación',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'entidad' => 'Entidad',
			'status' => 'Status',
			'solicitud' => 'Solicitud',
			'descripcionEntidad' => 'Descripción Entidad',
			'descripcionAlmacen' => 'Descripción Almacen',
			'descripcion' => 'Descripción',
			'modelo' => 'Modelo',
			'codigo' => 'Código de equipo',
			'keyP' => 'Proveedor',
			'meses_mantenimiento' => 'Intervalo de mantenimiento',
			'next_mantenimiento' => 'Siguiente mantenimiento'
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

		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('keyTE',$this->keyTE);
		$criteria->compare('keyMA',$this->keyMA);
		$criteria->compare('descripcionUbicacion',$this->descripcionUbicacion,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('solicitud',$this->solicitud,true);
		$criteria->compare('descripcionEntidad',$this->descripcionEntidad,true);
		$criteria->compare('descripcionAlmacen',$this->descripcionAlmacen,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('keyP',$this->keyP,true);
		$criteria->compare('meses_mantenimiento',$this->meses_mantenimiento,true);
		$criteria->compare('next_mantenimiento',$this->next_mantenimiento,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Limita las etiquetas mostradas a 21 por página
	 * @return CActiveDataProvider
	 */
	public function searchLabels()
	{
		
		$myCActiveDataProvider= $this->search();
		$myCActiveDataProvider->pagination=array('pageSize'=>21);
		return $myCActiveDataProvider;
	}
	
	/**
	 * Genera el siguiente código de equipo disponible.
	 * @return String code generated
	 */
	public function generarCodigoDisponible($model)
	{
		$criteria = new CDbCriteria();
		
		$prefijoCode = "0".$model->entidad."-c".str_pad($model->keyTE, 2, "0", STR_PAD_LEFT);
		$count=Yii::app()->db->createCommand()
			->select('count(*)')
			->from('sis_inventarioEqOtros')
			->where("codigo like '".$prefijoCode."%'")
			->queryRow();
		$count = (int) $count['count(*)']+1;
		
		$code="0".$model->entidad."-e".str_pad($model->keyTE, 2, "0", STR_PAD_LEFT).str_pad(dechex($count), 4, "0", STR_PAD_LEFT);
		return $code;
	}
	
	/**
	 * Genera el código de equipo.
	 * @return String code generated
	 */
	public function generarCodigo()
	{
		$criteria = new CDbCriteria();
		
		$prefijoCode = "0".$this->entidad."-c".str_pad($this->keyTE, 2, "0", STR_PAD_LEFT);
		$count=Yii::app()->db->createCommand()
			->select('count(*) as total')
			->from('sis_inventarioEqOtros')
			->where("codigo like '".$prefijoCode."%'")
			->queryRow();
			$count = (int) $count['count(*)']+1;

		$code="0".$this->entidad."-e".str_pad($this->keyTE, 2, "0", STR_PAD_LEFT).str_pad(dechex($count['total']), 4, "0", STR_PAD_LEFT);
		return $code;
	}
	
}
