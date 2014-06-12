<?php

/**
 * This is the model class for table "almacenes".
 *
 * The followings are the available columns in table 'almacenes':
 * @property integer $keyAlmacenes
 * @property string $almacenConsumo
 * @property string $almacen
 * @property string $descripcion
 * @property string $tieneCuartos
 * @property string $ctaContable
 * @property string $fecha1
 * @property string $usuario
 * @property string $ID_CCOSTO
 * @property string $modulo
 * @property string $activo
 * @property string $stock
 * @property string $miniAlmacen
 * @property string $almacenPadre
 * @property string $id_medico
 * @property string $entidad
 * @property string $medico
 * @property string $ventas
 * @property string $altaPaciente
 * @property string $altaEspecial
 * @property string $cargosDirectos
 * @property string $numConsultorio
 * @property string $transacciones
 * @property string $contieneReferidos
 * @property string $contieneEmpleados
 * @property string $compras
 * @property string $ventasDirectas
 * @property string $modificarPrecios
 * @property string $cierreCuenta
 * @property string $registroUrgencias
 * @property string $credenciales
 * @property string $medicamentosSueltos
 * @property string $centroDistribucion
 * @property string $permiteDevoluciones
 * @property string $almacenCargo
 * @property string $reporteSurtir
 * @property string $statusCitas
 * @property string $cambiarDescripcion
 * @property string $gpoProducto
 * @property string $puntoVenta
 * @property string $actualizaPrecios
 * @property string $especialidad
 * @property string $maquila
 * @property string $farmacia
 * @property string $beneficencia
 * @property string $manejaexpedientes
 * @property string $listaexpedientes
 * @property string $almacenExistencias
 * @property string $precioEspecial
 * @property string $tipoBeneficencia
 * @property string $porcenajePE
 * @property integer $horaPE
 * @property string $llenadoEspecial
 * @property string $porcentajePE
 * @property string $ventaBotiquinExternos
 * @property string $imprimeTicket
 * @property string $statusExistencias
 */
class CatAlmacen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CatAlmacen the static model class
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
		return 'almacenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('almacenConsumo, almacen, descripcion, tieneCuartos, ctaContable, fecha1, usuario, modulo, activo, stock, miniAlmacen, almacenPadre, id_medico, entidad, medico, ventas, contieneReferidos, permiteDevoluciones, beneficencia, manejaexpedientes, listaexpedientes, almacenExistencias, precioEspecial, tipoBeneficencia, porcenajePE, horaPE, llenadoEspecial, porcentajePE, ventaBotiquinExternos, imprimeTicket, statusExistencias', 'required'),
			array('horaPE', 'numerical', 'integerOnly'=>true),
			array('almacenConsumo, tieneCuartos, stock, miniAlmacen, entidad, medico, ventas, altaPaciente, altaEspecial, cargosDirectos, transacciones, contieneReferidos, contieneEmpleados, compras, ventasDirectas, modificarPrecios, cierreCuenta, registroUrgencias, credenciales, medicamentosSueltos, centroDistribucion, permiteDevoluciones, statusCitas, cambiarDescripcion, puntoVenta, actualizaPrecios, maquila, farmacia, beneficencia, manejaexpedientes, precioEspecial, tipoBeneficencia, ventaBotiquinExternos, imprimeTicket', 'length', 'max'=>2),
			array('almacen, almacenPadre, id_medico, numConsultorio, almacenCargo, gpoProducto, especialidad', 'length', 'max'=>20),
			array('descripcion, reporteSurtir, llenadoEspecial', 'length', 'max'=>50),
			array('ctaContable, usuario', 'length', 'max'=>15),
			array('fecha1, modulo, activo', 'length', 'max'=>10),
			array('ID_CCOSTO', 'length', 'max'=>12),
			array('listaexpedientes', 'length', 'max'=>100),
			array('almacenExistencias', 'length', 'max'=>30),
			array('porcenajePE, porcentajePE', 'length', 'max'=>3),
			array('statusExistencias', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keyAlmacenes, almacenConsumo, almacen, descripcion, tieneCuartos, ctaContable, fecha1, usuario, ID_CCOSTO, modulo, activo, stock, miniAlmacen, almacenPadre, id_medico, entidad, medico, ventas, altaPaciente, altaEspecial, cargosDirectos, numConsultorio, transacciones, contieneReferidos, contieneEmpleados, compras, ventasDirectas, modificarPrecios, cierreCuenta, registroUrgencias, credenciales, medicamentosSueltos, centroDistribucion, permiteDevoluciones, almacenCargo, reporteSurtir, statusCitas, cambiarDescripcion, gpoProducto, puntoVenta, actualizaPrecios, especialidad, maquila, farmacia, beneficencia, manejaexpedientes, listaexpedientes, almacenExistencias, precioEspecial, tipoBeneficencia, porcenajePE, horaPE, llenadoEspecial, porcentajePE, ventaBotiquinExternos, imprimeTicket, statusExistencias', 'safe', 'on'=>'search'),
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
			'keyAlmacenes' => 'Key Almacenes',
			'almacenConsumo' => 'Almacen Consumo',
			'almacen' => 'Almacen',
			'descripcion' => 'Descripcion',
			'tieneCuartos' => 'Tiene Cuartos',
			'ctaContable' => 'Cta Contable',
			'fecha1' => 'Fecha1',
			'usuario' => 'Usuario',
			'ID_CCOSTO' => 'Id Ccosto',
			'modulo' => 'Modulo',
			'activo' => 'Activo',
			'stock' => 'Stock',
			'miniAlmacen' => 'Mini Almacen',
			'almacenPadre' => 'Almacen Padre',
			'id_medico' => 'Id Medico',
			'entidad' => 'Entidad',
			'medico' => 'Medico',
			'ventas' => 'Ventas',
			'altaPaciente' => 'Alta Paciente',
			'altaEspecial' => 'Alta Especial',
			'cargosDirectos' => 'Cargos Directos',
			'numConsultorio' => 'Num Consultorio',
			'transacciones' => 'Transacciones',
			'contieneReferidos' => 'Contiene Referidos',
			'contieneEmpleados' => 'Contiene Empleados',
			'compras' => 'Compras',
			'ventasDirectas' => 'Ventas Directas',
			'modificarPrecios' => 'Modificar Precios',
			'cierreCuenta' => 'Cierre Cuenta',
			'registroUrgencias' => 'Registro Urgencias',
			'credenciales' => 'Credenciales',
			'medicamentosSueltos' => 'Medicamentos Sueltos',
			'centroDistribucion' => 'Centro Distribucion',
			'permiteDevoluciones' => 'Permite Devoluciones',
			'almacenCargo' => 'Almacen Cargo',
			'reporteSurtir' => 'Reporte Surtir',
			'statusCitas' => 'Status Citas',
			'cambiarDescripcion' => 'Cambiar Descripcion',
			'gpoProducto' => 'Gpo Producto',
			'puntoVenta' => 'Punto Venta',
			'actualizaPrecios' => 'Actualiza Precios',
			'especialidad' => 'Especialidad',
			'maquila' => 'Maquila',
			'farmacia' => 'Farmacia',
			'beneficencia' => 'Beneficencia',
			'manejaexpedientes' => 'Manejaexpedientes',
			'listaexpedientes' => 'Listaexpedientes',
			'almacenExistencias' => 'Almacen Existencias',
			'precioEspecial' => 'Precio Especial',
			'tipoBeneficencia' => 'Tipo Beneficencia',
			'porcenajePE' => 'Porcenaje Pe',
			'horaPE' => 'Hora Pe',
			'llenadoEspecial' => 'Llenado Especial',
			'porcentajePE' => 'Porcentaje Pe',
			'ventaBotiquinExternos' => 'Venta Botiquin Externos',
			'imprimeTicket' => 'Imprime Ticket',
			'statusExistencias' => 'Status Existencias',
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

		$criteria->compare('keyAlmacenes',$this->keyAlmacenes);
		$criteria->compare('almacenConsumo',$this->almacenConsumo,true);
		$criteria->compare('almacen',$this->almacen,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tieneCuartos',$this->tieneCuartos,true);
		$criteria->compare('ctaContable',$this->ctaContable,true);
		$criteria->compare('fecha1',$this->fecha1,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('ID_CCOSTO',$this->ID_CCOSTO,true);
		$criteria->compare('modulo',$this->modulo,true);
		$criteria->compare('activo',$this->activo,true);
		$criteria->compare('stock',$this->stock,true);
		$criteria->compare('miniAlmacen',$this->miniAlmacen,true);
		$criteria->compare('almacenPadre',$this->almacenPadre,true);
		$criteria->compare('id_medico',$this->id_medico,true);
		$criteria->compare('entidad',$this->entidad,true);
		$criteria->compare('medico',$this->medico,true);
		$criteria->compare('ventas',$this->ventas,true);
		$criteria->compare('altaPaciente',$this->altaPaciente,true);
		$criteria->compare('altaEspecial',$this->altaEspecial,true);
		$criteria->compare('cargosDirectos',$this->cargosDirectos,true);
		$criteria->compare('numConsultorio',$this->numConsultorio,true);
		$criteria->compare('transacciones',$this->transacciones,true);
		$criteria->compare('contieneReferidos',$this->contieneReferidos,true);
		$criteria->compare('contieneEmpleados',$this->contieneEmpleados,true);
		$criteria->compare('compras',$this->compras,true);
		$criteria->compare('ventasDirectas',$this->ventasDirectas,true);
		$criteria->compare('modificarPrecios',$this->modificarPrecios,true);
		$criteria->compare('cierreCuenta',$this->cierreCuenta,true);
		$criteria->compare('registroUrgencias',$this->registroUrgencias,true);
		$criteria->compare('credenciales',$this->credenciales,true);
		$criteria->compare('medicamentosSueltos',$this->medicamentosSueltos,true);
		$criteria->compare('centroDistribucion',$this->centroDistribucion,true);
		$criteria->compare('permiteDevoluciones',$this->permiteDevoluciones,true);
		$criteria->compare('almacenCargo',$this->almacenCargo,true);
		$criteria->compare('reporteSurtir',$this->reporteSurtir,true);
		$criteria->compare('statusCitas',$this->statusCitas,true);
		$criteria->compare('cambiarDescripcion',$this->cambiarDescripcion,true);
		$criteria->compare('gpoProducto',$this->gpoProducto,true);
		$criteria->compare('puntoVenta',$this->puntoVenta,true);
		$criteria->compare('actualizaPrecios',$this->actualizaPrecios,true);
		$criteria->compare('especialidad',$this->especialidad,true);
		$criteria->compare('maquila',$this->maquila,true);
		$criteria->compare('farmacia',$this->farmacia,true);
		$criteria->compare('beneficencia',$this->beneficencia,true);
		$criteria->compare('manejaexpedientes',$this->manejaexpedientes,true);
		$criteria->compare('listaexpedientes',$this->listaexpedientes,true);
		$criteria->compare('almacenExistencias',$this->almacenExistencias,true);
		$criteria->compare('precioEspecial',$this->precioEspecial,true);
		$criteria->compare('tipoBeneficencia',$this->tipoBeneficencia,true);
		$criteria->compare('porcenajePE',$this->porcenajePE,true);
		$criteria->compare('horaPE',$this->horaPE);
		$criteria->compare('llenadoEspecial',$this->llenadoEspecial,true);
		$criteria->compare('porcentajePE',$this->porcentajePE,true);
		$criteria->compare('ventaBotiquinExternos',$this->ventaBotiquinExternos,true);
		$criteria->compare('imprimeTicket',$this->imprimeTicket,true);
		$criteria->compare('statusExistencias',$this->statusExistencias,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}