<?php

class OrdenesSoporteController extends Controller
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
		$model=new OrdenesSoporte;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrdenesSoporte']))
		{
			$model->attributes=$_POST['OrdenesSoporte'];
			$model2 = new CatTipoSoporte;
			$model3 = new CatAlmacen;
			
			
			$model->observaciones=$model->observaciones."";
			//Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
			//No se ha cambiado la base de datos para no romper otras instalaciones
			$model->entidad=$model->entidadSolicitud;
			$model->registro=0;
			$model->solicitud=0;
			$model->descripcionSoporte=$model2->findByPk($model->keyTS)->descripcion;
			$model->descripcionTS=$model2->findByPk($model->keyTS)->descripcion;
			$model->descripcionAlmacen=$model3->find('almacen="'.$_POST['almacen'].'"')->descripcion;
			$model->usuario=Yii::app()->user->name;
			$model->fecha=date('Y-m-d', time());
			$model->hora=date('h:i a', time());
			$model->status='pending';
			$model->almacenSoporte='HSIST';
			$model->usuarioEjecutor='null';
			$model->fechaFinal='1900-01-01';
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->keySOP));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionSave()
	{
		$model=new OrdenesSoporte;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrdenesSoporte']))
		{
			$model->attributes=$_POST['OrdenesSoporte'];
			$model2 = new CatTipoSoporte;
			$model3 = new CatAlmacen;
			
			
			$model->observaciones=$model->observaciones."";
			//Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
			//No se ha cambiado la base de datos para no romper otras instalaciones
			$model->entidad=$_POST['entidadSolicitud'];
			$model->registro=0;
			$model->solicitud=0;
			$model->descripcionSoporte=$model2->findByPk($model->keyTS)->descripcion;
			$model->descripcionTS=$model2->findByPk($model->keyTS)->descripcion;
			if(isset($_POST['almacen']))
			$model->descripcionAlmacen=$model3->find('almacen="'.$_POST['almacen'].'"')->descripcion;
			$model->usuario=Yii::app()->user->name;
			$model->fecha=date('Y-m-d', time());
			$model->hora=date('h:i a', time());
			$model->status='pending';
			$model->almacenSoporte='HSIST';
			$model->usuarioEjecutor='null';
			$model->fechaFinal='1900-01-01';
			
			if($model->save()){
				Yii::app()->user->setFlash('success', "Orden de soporte para: ".$model->nombre." registrada.");
			}else{
				if (!isset($_POST['almacen']))
					Yii::app()->user->setFlash('error', "No se ha seleccionado la entidad");
					
				if(isset($model->codigo))
					if ($_POST['entidadSolicitud'] != substr($model->codigo, 1, 2))
					Yii::app()->user->setFlash('error', "El codigo no pertenece a esta entidad");
				
				if (!isset($_POST['entidadSolicitud']))
					Yii::app()->user->setFlash('error', "No se ha seleccionado el departamento");
				else	if (!isset($model->observaciones))
					Yii::app()->user->setFlash('error', "Faltan observaciones por llenar");
					
			}//$this::actionAdmin();
			$this->redirect('index.php?r=ServiciosInstitucionales/Sistemas/OrdenesSoporte/admin');
		}
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

		if(isset($_POST['OrdenesSoporte']))
		{
			$model->attributes=$_POST['OrdenesSoporte'];
			$model2 = new CatTipoSoporte;
			$model3 = new CatAlmacen;
			
			
			$model->observaciones=$model->observaciones."";
			//Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
			//No se ha cambiado la base de datos para no romper otras instalaciones
			$model->entidad=$_POST['entidadSolicitud'];
			$model->registro=0;
			$model->solicitud=0;
			$model->descripcionSoporte=$model2->findByPk($model->keyTS)->descripcion;
			$model->descripcionTS=$model2->findByPk($model->keyTS)->descripcion;
			$model->descripcionAlmacen=$model3->find('almacen="'.$_POST['almacen'].'"')->descripcion;
			
			
			
			if($model->save())
				/*echo '<script type="text/javascript">
				  console.log(
					  "'.$model->fechaInicio.'"
				  );
		     </script>';/**/
				$this->redirect(array('view','id'=>$model->keySOP));
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
		$dataProvider=new CActiveDataProvider('OrdenesSoporte');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{	
		
		$model=new OrdenesSoporte('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OrdenesSoporte']))
			$model->attributes=$_GET['OrdenesSoporte'];
			
			$modelPendientes=new OrdenesSoporte('search');
			$modelPendientes->attributes=$model->attributes;
			$modelPendientes->status="pending";
			
			$modelEnProceso=new OrdenesSoporte('search');
			$modelEnProceso->attributes=$model->attributes;
			$modelEnProceso->status="ontransit";
			
			$modelTeminadas=new OrdenesSoporte('search');
			$modelTeminadas->attributes=$model->attributes;
			$modelTeminadas->status="done";
			
			
			
		$this->render('admin',array(
			'model'=>$model,
			'modelPendientes'=>$modelPendientes,
			'modelEnProceso'=>$modelEnProceso,
			'modelTeminadas'=>$modelTeminadas,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return OrdenesSoporte the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=OrdenesSoporte::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param OrdenesSoporte $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ordenes-soporte-form')
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
		$es = new EditableSaver('OrdenesSoporte');
		$es->update();
	}
	
	
	public function actionGetTipoSoporteList()
	{
 		echo CJSON::encode(Editable::source(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion')); 
	}
	
	public function actionActivarOrden()
	{
        
		$model = new OrdenesSoporte();
		$model = $model->findByPK($_GET['field']);
		
		echo '<script type="text/javascript">
		     console.log(
				 "--'.$model->status.'"
		     );
        </script>';
		if ($model->status=="pending"){
			$model->status="ontransit";
			$model->fechaInicio=date("Y-m-d H:i:s");
			//$model->fechaFinal=date("");
			$model->save();
		}else if ($model->status=="ontransit"){
			$model->status="done";
			$model->fechaFinal=date("Y-m-d H:i:s");
			$model->save();
		}
		
		
		$model = $model->findByPK($_GET['field']);
		
		echo '<script type="text/javascript">
		     console.log(
				 "..'.$model->status.'"
		     );
        </script>';
		

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));/**/
	}
	
	/*
	*Actualiza el dropdown de almacenes con los que pernecen a la entidad seleccionada
	*
	*/
	public function actionAlmacenesPorEntidad()
	{
		$entidadSolicitud=$_POST['entidadSolicitud'];
		$catAlmacenvar = new CatAlmacen();
		$data=$catAlmacenvar::model()->findAll('entidad=:entidad Order by descripcion', 
			array(':entidad'=>$entidadSolicitud)
		);
		

		//$data=CHtml::listData($data,'almacen','descripcion');
		$data = CMap::mergeArray(array(''=>'Seleccione departamento'),CHtml::listData($data,'almacen','descripcion'));

		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
			array('value'=>$value),CHtml::encode($name),true);
		}
		
		
	}
}
