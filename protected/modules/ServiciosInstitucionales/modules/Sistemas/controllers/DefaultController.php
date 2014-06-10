<?php

class DefaultController extends Controller
{

	public $layout='//layouts/column1';
	
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionCatalogoEquipos()
	{
		$this->render('catalogoEquipo');
	}
	
	public function actionCatalogoTelefonia()
	{
		$this->render('catalogoTelefonia');
	}
	
	
	
	public function actionPrintLabels()
	{
		Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/protected/views/layouts/styles/print.css');
		$model=new EquipoComputo('searchLabels');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EquipoComputo']))
			$model->attributes=$_GET['EquipoComputo'];
			

		$modelt=new TelefoniaCelular('searchLabels');
		$modelt->unsetAttributes();  // clear any default values
		if(isset($_GET['TelefoniaCelular']))
			$modelt->attributes=$_GET['TelefoniaCelular'];

		$this->render('printLabels',array(
			'model'=>$model,
			'modelt'=>$modelt,
		));
	}
	
}
