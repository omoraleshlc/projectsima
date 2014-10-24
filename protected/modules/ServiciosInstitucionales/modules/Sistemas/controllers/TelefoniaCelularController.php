<?php
/**
 * Inventario de telefonía.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package ServiciosInstitucionales.Sistemas
 */
class TelefoniaCelularController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
   {
      return array(array('CrugeAccessControlFilter'));
   }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TelefoniaCelular;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$model->codigoEntidad=$model->entidad;
		$model->usuario=Yii::app()->user->name;
		$model->fecha=date('Y-m-d', time());
		$model->hora=date('h:i a', time());
		
		if(isset($_POST['TelefoniaCelular']))
		{
			$model->attributes=$_POST['TelefoniaCelular'];
			$model->entidad= $_POST['entidad'];
			$model->codigoEntidad= $_POST['entidad'];
			$model->almacen= $_POST['almacen'];
			//$model->company= $_POST['company'];
			if($model->save()){
                                Yii::app()->db->createCommand("update sima.sis_catTelefoniaCelular set next_mantenimiento = IF(
        DAYOFWEEK(DATE_ADD(fecha, INTERVAL meses_mantenimiento MONTH))='1', DATE_ADD(DATE_ADD(fecha, INTERVAL meses_mantenimiento MONTH), INTERVAL 1 DAY),
        IF(DAYOFWEEK(DATE_ADD(next_mantenimiento, INTERVAL meses_mantenimiento MONTH))='7', DATE_ADD(DATE_ADD(fecha, INTERVAL meses_mantenimiento MONTH), INTERVAL 2 DAY), DATE_ADD(fecha, INTERVAL meses_mantenimiento MONTH)
        )) where next_mantenimiento IS NULL")
                                    ->execute();
                                $this->redirect(array('view','id'=>$model->keyCTC));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TelefoniaCelular']))
		{
			$model->attributes=$_POST['TelefoniaCelular'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyCTC));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TelefoniaCelular');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TelefoniaCelular('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TelefoniaCelular']))
			$model->attributes=$_GET['TelefoniaCelular'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TelefoniaCelular the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TelefoniaCelular::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TelefoniaCelular $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='telefonia-celular-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*
	*Guarda los cambios hechos con x-editable
	*
	*/
	public function actionUpdateEditable() {
		Yii::import('editable.EditableSaver');
		$es = new EditableSaver('TelefoniaCelular');
		$es->update();
	}
	
	/*
	* Obtiene el catalogo de márcas de celulares.
	* @Return JSON El catálogo con keyMa, descripcion.
	*/
	public function actionGetMarcaCelularList()
	{
 		echo CJSON::encode(Editable::source(CatMarcaCelular::model()->findAll(), 'keyMA', 'descripcion')); 
	}
	
	
		/*
     * Actualiza el dropdown de almacenes con los que pernecen a la entidad seleccionada
     *
     */
    public function actionAlmacenesPorEntidad() {
        $entidadSolicitud = $_POST['entidad'];
        $catAlmacenvar = new CatAlmacen();
        $data = $catAlmacenvar::model()->findAll('miniAlmacen!="Si" and entidad=:entidad Order by descripcion', array(':entidad' => $entidadSolicitud)
        );


        //$data=CHtml::listData($data,'almacen','descripcion');
        $data = CMap::mergeArray(array('' => 'Seleccione departamento'), CHtml::listData($data, 'almacen', 'descripcion'));

        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode(ucwords(strtolower($name))), true);
        }
    }
    
    	/**
	 * Displays the qr code label for a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionPrintLabel($id)
	{
		$this->render('_labelqr',array(
			'model'=>$this->loadModel($id),
		));
	}
	
}
