<?php

/**
 * This is the model class for table "sis_catTelefoniaCelular".
 *
 * The followings are the available columns in table 'sis_catTelefoniaCelular':
 * @property integer $keyCTC
 * @property string $precioEquipo
 * @property string $cantidadAutorizada
 * @property string $costoRenta
 * @property string $fechaContratacion
 * @property integer $plazoForzoso
 * @property integer $keySW
 * @property string $modelo
 * @property string $chip
 * @property string $imei
 * @property integer $keyMA
 * @property string $usuarioCelular
 * @property string $descripcionUbicacion
 * @property string $almacen
 * @property string $codigoEntidad
 * @property string $usuario
 * @property string $fecha
 * @property string $hora
 * @property string $entidad
 * @property string $ruta
 * @property string $nTelefonico
 * @property integer $registro
 * @property integer $solicitud
 * @property string $fechaInicial
 * @property string $fechaFinal
 * @property integer $minutos
 * @property string $red
 * @property string $sms
 * @property string $internet
 * @property string $roaming
 * @property string $plan
 * @property string $moduloAdicional
 * @property string $company
 */
class TelefoniaCelular extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TelefoniaCelular the static model class
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
		return 'sis_catTelefoniaCelular';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('precioEquipo, cantidadAutorizada, costoRenta, fechaContratacion, plazoForzoso, keySW, modelo, chip, imei, keyMA, usuarioCelular, descripcionUbicacion, almacen, codigoEntidad, usuario, fecha, hora, entidad, ruta, nTelefonico, registro, solicitud, fechaInicial, fechaFinal, minutos, red, sms, internet, roaming, plan, moduloAdicional, company', 'required'),
			array('plazoForzoso, keySW, keyMA, registro, solicitud, minutos', 'numerical', 'integerOnly'=>true),
			array('precioEquipo, cantidadAutorizada, costoRenta', 'length', 'max'=>6),
			array('fechaContratacion, fecha, hora, fechaInicial, fechaFinal, plan', 'length', 'max'=>10),
			array('modelo, descripcionUbicacion, red', 'length', 'max'=>100),
			array('chip, imei', 'length', 'max'=>25),
			array('usuarioCelular, almacen, usuario', 'length', 'max'=>30),
			array('codigoEntidad, entidad, roaming', 'length', 'max'=>2),
			array('ruta, internet', 'length', 'max'=>50),
			array('nTelefonico', 'length', 'max'=>15),
			array('sms', 'length', 'max'=>4),
			array('moduloAdicional', 'length', 'max'=>200),
			array('company', 'length', 'max'=>5),
			array('codigo', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyCTC, precioEquipo, cantidadAutorizada, costoRenta, fechaContratacion, plazoForzoso, keySW, modelo, chip, imei, keyMA, usuarioCelular, descripcionUbicacion, almacen, codigoEntidad, usuario, fecha, hora, entidad, ruta, nTelefonico, registro, solicitud, fechaInicial, fechaFinal, minutos, red, sms, internet, roaming, plan, moduloAdicional, company, codigo', 'safe', 'on'=>'search'),
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
			'keyCTC' => '#',
			'precioEquipo' => 'Precio Equipo',
			'cantidadAutorizada' => 'Cantidad Autorizada',
			'costoRenta' => 'Costo de Renta',
			'fechaContratacion' => 'Fecha de Contratacion',
			'plazoForzoso' => 'Plazo Forzoso',
			'keySW' => 'Software',
			'modelo' => 'Modelo',
			'chip' => 'Chip',
			'imei' => 'Imei',
			'keyMA' => 'Marca',
			'usuarioCelular' => 'Usuario',
			'descripcionUbicacion' => 'Ubicacion',
			'almacen' => 'Almacén',
			'codigoEntidad' => 'Codigo Entidad',
			'usuario' => 'Usuario',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'entidad' => 'Entidad',
			'ruta' => 'Ruta',
			'nTelefonico' => 'Número Telefonico',
			'registro' => 'Registro',
			'solicitud' => 'Solicitud',
			'fechaInicial' => 'Fecha Inicial',
			'fechaFinal' => 'Fecha Final',
			'minutos' => 'Minutos',
			'red' => 'Red',
			'sms' => 'Sms',
			'internet' => 'Internet',
			'roaming' => 'Roaming',
			'plan' => 'Plan',
			'moduloAdicional' => 'Modulo Adicional',
			'company' => 'Compañía',
			'codigo' => 'Código de equipo',
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

		$criteria->compare('keyCTC',$this->keyCTC);
		$criteria->compare('precioEquipo',$this->precioEquipo,true);
		$criteria->compare('cantidadAutorizada',$this->cantidadAutorizada,true);
		$criteria->compare('costoRenta',$this->costoRenta,true);
		$criteria->compare('fechaContratacion',$this->fechaContratacion,true);
		$criteria->compare('plazoForzoso',$this->plazoForzoso);
		$criteria->compare('keySW',$this->keySW);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('chip',$this->chip,true);
		$criteria->compare('imei',$this->imei,true);
		$criteria->compare('keyMA',$this->keyMA);
		$criteria->compare('usuarioCelular',$this->usuarioCelular,true);
		$criteria->compare('descripcionUbicacion',$this->descripcionUbicacion,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('codigoEntidad',$this->codigoEntidad,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('nTelefonico',$this->nTelefonico,true);
		$criteria->compare('registro',$this->registro);
		$criteria->compare('solicitud',$this->solicitud);
		$criteria->compare('fechaInicial',$this->fechaInicial,true);
		$criteria->compare('fechaFinal',$this->fechaFinal,true);
		$criteria->compare('minutos',$this->minutos);
		$criteria->compare('red',$this->red,true);
		$criteria->compare('sms',$this->sms,true);
		$criteria->compare('internet',$this->internet,true);
		$criteria->compare('roaming',$this->roaming,true);
		$criteria->compare('plan',$this->plan,true);
		$criteria->compare('moduloAdicional',$this->moduloAdicional,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('codigo',$this->codigo,true);

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
	 * Genera el código de equipo.
	 * @return String code generated
	 */
	public function generarCodigo()
	{
		/*$allTelefoniaCelular= TelefoniaCelular::model()->findAll();
		$count = count($allTelefoniaCelular);
		*/
		$criteria = new CDbCriteria();
		$count = TelefoniaCelular::model()->count($criteria);

		$code="0".$this->entidad."-t".str_pad($this->keyCTC, 2, "0", STR_PAD_LEFT).str_pad(dechex($count), 4, "0", STR_PAD_LEFT);
		return $code;
	}
	
		/**
	 * Genera el siguiente código de equipo disponible.
	 * @return String code generated
	 */
	public function generarCodigoDisponible($model)
	{
		/*$allTelefoniaCelular= TelefoniaCelular::model()->findAll();
		$count = count($allTelefoniaCelular);
		*/
		$criteria = new CDbCriteria();
		
		$prefijoCode = "0".$model->entidad."-t".str_pad($model->keyTE, 2, "0", STR_PAD_LEFT);
		$count=Yii::app()->db->createCommand()
			->select('count(*)')
			->from('sis_catTelefoniaCelular')
			->where("codigo like '".$prefijoCode."%'")
			->queryRow();
		$count = (int) $count['count(*)']+1;
		
		$code="0".$model->entidad."-c".str_pad($model->keyTE, 2, "0", STR_PAD_LEFT).str_pad(dechex($count), 4, "0", STR_PAD_LEFT);
		return $code;
	}
	
}
