<?php

/**
 * ObservacionesOrdenSoporteController class file.
 *
 * Extended descripcion of ObservacionesOrdenSoporteController class file.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package 
 */

class ObservacionesOrdenSoporteController extends Controller
{
	/**
	 * @var string the default layout for the views. 
	 * Defaults to '//layouts/column2', meaning using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * Filtros de acceso.
	 *
	 * Actualmente usa el módulo cruge.
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
		
		$model=new ObservacionesOrdenSoporte;
		$model->usuario=Yii::app()->user->name;
		$model->fecha=date('Y-m-d', time());
		$model->hora=date('h:i a', time());
		$model->entidad=UsuariosSima::model()->find("usuario='".Yii::app()->user->name."'")->entidad;
		$model->keySOP=$_GET['OrdenSoporteId'];
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ObservacionesOrdenSoporte']))
		{
			$model->attributes=$_POST['ObservacionesOrdenSoporte'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyS, 'OrdenSoporteId'=>$_GET['OrdenSoporteId']));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionCreatePopup()
	{
		$this->layout='//layouts/column1css';
		
		$model=new ObservacionesOrdenSoporte;
		$model->usuario=Yii::app()->user->name;
		$model->fecha=date('Y-m-d', time());
		$model->hora=date('h:i a', time());
		$model->entidad=UsuariosSima::model()->find("usuario='".Yii::app()->user->name."'")->entidad;
		$model->keySOP=$_GET['OrdenSoporteId'];

		if(isset($_POST['ObservacionesOrdenSoporte']))
		{
			$model->attributes=$_POST['ObservacionesOrdenSoporte'];
			$model->save();
		}

		$this->render('_formpopup',array(
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

		if(isset($_POST['ObservacionesOrdenSoporte']))
		{
			$model->attributes=$_POST['ObservacionesOrdenSoporte'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->keyS));
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
		$dataProvider=new CActiveDataProvider('ObservacionesOrdenSoporte');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ObservacionesOrdenSoporte('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ObservacionesOrdenSoporte']))
			$model->attributes=$_GET['ObservacionesOrdenSoporte'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ObservacionesOrdenSoporte the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ObservacionesOrdenSoporte::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ObservacionesOrdenSoporte $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='observaciones-orden-soporte-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*
	* Guarda los cambios hechos con x-editable
	*
	*/
	public function actionUpdateEditable() {
		Yii::import('editable.EditableSaver');
		$es = new EditableSaver('ObservacionesOrdenSoporte');
		$es->update();
	}
}
