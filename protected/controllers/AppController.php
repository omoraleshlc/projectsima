<?php
/**
 * Catálogo de compañías de teléfono.
 * 
 * @author Mitzimon
 * @version 0.1
 * @package ServiciosInstitucionales.Sistemas
 */
class AppController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */

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

	public function actionError()
	{
		 $error = Yii::app()->errorHandler->error;
		 if ($error)
		 $this->render('error', array('error'=>$error));
		 else
		 throw new CHttpException(404, 'Page not found.');
	}


	
}
