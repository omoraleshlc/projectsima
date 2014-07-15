<?php

/**
 * UsuariosSimaController class file.
 *
 * Extended descripcion of UsuariosSimaController class file.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package 
 */

class UsuariosSimaController extends Controller
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
		$model=new UsuariosSima;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UsuariosSima']))
		{
			$model->attributes=$_POST['UsuariosSima'];
			if($model->save())
				$this->actionCopiarACruge($model->folio);
				$this->redirect(array('view','id'=>$model->folio));
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

		if(isset($_POST['UsuariosSima']))
		{
			$model->attributes=$_POST['UsuariosSima'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->folio));
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
		$dataProvider=new CActiveDataProvider('UsuariosSima');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UsuariosSima('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UsuariosSima']))
			$model->attributes=$_GET['UsuariosSima'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return UsuariosSima the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=UsuariosSima::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param UsuariosSima $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-sima-form')
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
		$es = new EditableSaver('UsuariosSima');
		$es->update();
	}
	
	/**
	 * Copia el usuario a cruge para poder usar permisos.
	 * Sólo lo copia si no existe el username en la tabla de cruge.
	 * @param isUsuario de sima v2
	 */
	 public function actionCopiarACruge($id)
	{
		$model=$this->loadModel($id);

		$results = Yii::app()->db->createCommand()->
          select('*')->
          from('cruge_user')->
          where('username=:username', array(':username'=>$model->usuario))->
          queryAll();

			if(count($results)==0){		
				$command = Yii::app()->db->createCommand();
				$command->insert('cruge_user', array(
					 'username'=>$model->usuario,
					 'email'=>$model->email,
					 'password'=>$model->passwd,
					 'state'=>'1',
				));
			}
			
			if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));/**/
		
	}
}
