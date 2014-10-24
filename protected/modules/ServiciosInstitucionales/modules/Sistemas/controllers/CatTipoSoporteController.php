<?php
/**
 * Catálogo de tipo de soporte.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package ServiciosInstitucionales.Sistemas
 */
class CatTipoSoporteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
		$model=new CatTipoSoporte;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CatTipoSoporte']))
		{
			$model3 = new CatAlmacen;
			
			$model->attributes=$_POST['CatTipoSoporte'];
			$model->entidad=UsuariosSima::model()->find("usuario='" . Yii::app()->user->name . "'")->entidad;
			$model->almacen=$_POST['almacen'];
			$model->descripcionAlmacen = $model3->find('almacen="' . $_POST['almacen'] . '"')->descripcion;
			if($model->save())
				$this->redirect(array('default/CatalogoSoporte'));
				//$this->redirect(array('view','id'=>$model->keyTS));
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

		if(isset($_POST['CatTipoSoporte']))
		{
			$model3 = new CatAlmacen;
		
			$model->attributes=$_POST['CatTipoSoporte'];
			$model->almacen=$_POST['almacen'];
			$model->descripcionAlmacen = $model3->find('almacen="' . $_POST['almacen'] . '"')->descripcion;
			if($model->save())
				$this->redirect(array('OrdenesSoporte/admin'));
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
		$dataProvider=new CActiveDataProvider('CatTipoSoporte');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CatTipoSoporte('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CatTipoSoporte']))
			$model->attributes=$_GET['CatTipoSoporte'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return CatTipoSoporte the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CatTipoSoporte::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CatTipoSoporte $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cat-tipo-soporte-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/**
	 * Actualiza el campo editado en la gridview con x editable
	 */
	public function actionUpdateEditable() {
		Yii::import('editable.EditableSaver');
		$es = new EditableSaver('CatTipoSoporte');
		$es->update();
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
	
}
