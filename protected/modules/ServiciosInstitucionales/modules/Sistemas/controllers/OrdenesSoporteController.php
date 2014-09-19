<?php

class OrdenesSoporteController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';
    public $usuariosima;
    public $almacenSoporte;

    public function init() {
        if (Yii::app()->user->isGuest)
            throw new CHttpException(401, 'Necesitas iniciar sesión para ver esta página');
        $this->usuariosima = UsuariosSima::model()->find("usuario='" . Yii::app()->user->name . "'");
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(array('CrugeAccessControlFilter'));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Soporte puede activar o terminar ordenes de soporte.
     * Optimizada para celular.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionMobileAdmin() {
        //$this->layout='dasda';
        $this->render('mobileAdmin');
    }
    
    
    /**
     * 
     */
    public function actionScan() {
        //$this->layout='dasda';
        $this->render('scanLabels');
    }
    

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new OrdenesSoporte;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OrdenesSoporte'])) {
            $model->attributes = $_POST['OrdenesSoporte'];
            $model2 = new CatTipoSoporte;
            $model3 = new CatAlmacen;

            $model->observaciones = $model->observaciones . "";
            //Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
            //No se ha cambiado la base de datos para no romper otras instalaciones
            $model->entidad = $this->usuariosima->entidad;
            $model->entidadSolicitud = $_POST['entidadSolicitud'];
            $model->almacen= $_POST['almacen'];
            $model->registro = 0;
            $model->solicitud = 0;
            $model->descripcionSoporte = $model2->findByPk($model->keyTS)->descripcion;
            $model->descripcionTS = $model2->findByPk($model->keyTS)->descripcion;
            $model->descripcionAlmacen = $model3->find('almacen="' . $_POST['almacen'] . '"')->descripcion;
            $model->usuario = Yii::app()->user->name;
            $model->fecha = date('Y-m-d', time());
            $model->hora = date('h:i a', time());
            $model->status = 'pending';
            $model->almacenSoporte = $model->almacenSoporte!="" ? $model->almacenSoporte : ($this->usuariosima->almacenSoporteDefault != "" ? $this->usuariosima->almacenSoporteDefault : 'HSIST');
            $model->usuarioEjecutor = '';
            $model->fechaFinal = null;
            $model->fechaInicio = null;
            $model->fechaFinalEstimada = null;

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->keySOP));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionSave() {
        $model = new OrdenesSoporte;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['OrdenesSoporte'])) {
            $model->attributes = $_POST['OrdenesSoporte'];
            $model2 = new CatTipoSoporte;
            $model3 = new CatAlmacen;


            $model->observaciones = $model->observaciones . "";
            //Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
            //No se ha cambiado la base de datos para no romper otras instalaciones

            $model->entidad = $this->usuariosima->entidad;
            $model->entidadSolicitud = $_POST['entidadSolicitud'];
            $model->almacen= $_POST['almacen'];
            $model->registro = 0;
            $model->solicitud = 0;
            $model->descripcionSoporte = $model2->findByPk($model->keyTS)->descripcion;
            $model->descripcionTS = $model2->findByPk($model->keyTS)->descripcion;
            $almacen = $_POST['almacen'];
            if (!empty($almacen))
                $model->descripcionAlmacen = $model3->find('almacen="' . $almacen . '"')->descripcion;
            $model->usuario = Yii::app()->user->name;
            $model->fecha = date('Y-m-d', time());
            $model->hora = date('h:i a', time());
            $model->status = 'pending';
            $model->almacenSoporte = $model->almacenSoporte!="" ? $model->almacenSoporte : ($this->usuariosima->almacenSoporteDefault != "" ? $this->usuariosima->almacenSoporteDefault : 'HSIST');


            $model->usuarioEjecutor = '';
            $model->fechaFinal = null;
            $model->fechaInicio = null;
            $model->fechaFinalEstimada = null;

            if ($model->save()) {
                Yii::app()->user->setFlash('success', "Orden de soporte para: " . $model->nombre . " registrada con código " . $model->keySOP);
            } else {
                if (empty($model->nombre))
                    Yii::app()->user->setFlash('error', "Escriba el nombre de usuario");

                else if (empty($model->observaciones))
                    Yii::app()->user->setFlash('error', "Faltan observaciones por llenar");

                if (empty($model->entidad))
                    Yii::app()->user->setFlash('error', "No se ha seleccionado la entidad");

                else if (empty($almacen))
                    Yii::app()->user->setFlash('error', "No se ha seleccionado el departamento");

                else if (!empty($model->codigo))
                    if ($model->entidad != substr($model->codigo, 1, 2))
                        Yii::app()->user->setFlash('error', "El codigo no pertenece a esta entidad");
            }
            $this->redirect('index.php?r=ServiciosInstitucionales/Sistemas/OrdenesSoporte/admin&tab=Crear');
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['OrdenesSoporte'])) {
            $model->attributes = $_POST['OrdenesSoporte'];
            $model2 = new CatTipoSoporte;
            $model3 = new CatAlmacen;


            $model->observaciones = $model->observaciones . "";
            //Se han puesto varios de estas pk en la base de datos no pueden ser nulos los campos.
            //No se ha cambiado la base de datos para no romper otras instalaciones
				$model->entidadSolicitud = $_POST['entidadSolicitud'];
            $model->almacen= $_POST['almacen'];
            $model->registro = 0;
            $model->solicitud = 0;
            $model->descripcionSoporte = $model2->findByPk($model->keyTS)->descripcion;
            $model->descripcionTS = $model2->findByPk($model->keyTS)->descripcion;
            $model->descripcionAlmacen = $model3->find('almacen="' . $_POST['almacen'] . '"')->descripcion;
            $model->entidadSolicitud = $_POST['entidadSolicitud'];
            $model->almacen = $_POST['almacen'];


            if ($model->save())
            /* echo '<script type="text/javascript">
              console.log(
              "'.$model->fechaInicio.'"
              );
              </script>';/* */
                $this->redirect(array('view', 'id' => $model->keySOP));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('OrdenesSoporte');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $this->almacenSoporte = isset($_POST['departamentoSoporte']) ? $_POST['departamentoSoporte'] :( ($this->usuariosima->almacenSoporteDefault) ? $this->usuariosima->almacenSoporteDefault : 'HSIST');
        $model = new OrdenesSoporte('search');
        $model->unsetAttributes();  // clear any default values
        $model->keySOP = 0;
        if (isset($_GET['OrdenesSoporte']))
            $model->attributes = $_GET['OrdenesSoporte'];


        $modelPendientes = new CActiveDataProvider('OrdenesSoporte', array(
            'criteria' => array(
                'condition' => 'status="pending" and almacenSoporte like"%'.$this->almacenSoporte.'%"',
                'order' => 'keySOP ASC',
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));

        $modelEnProceso = new CActiveDataProvider('OrdenesSoporte', array(
            'criteria' => array(
                'condition' => 'status="ontransit" and almacenSoporte like"%'.$this->almacenSoporte.'%"',
                'order' => 'fechaInicio ASC',
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));


        $modelTeminadas = new CActiveDataProvider('OrdenesSoporte', array(
            'criteria' => array(
                'condition' => 'status="done" and almacenSoporte like"%'.$this->almacenSoporte.'%"',
                'order' => 'fechaFinal ASC',
            ),
            'pagination' => array(
                'pageSize' => 40,
            ),
        ));

        $this->render('admin', array(
            'model' => $model,
            'modelPendientes' => $modelPendientes,
            'modelEnProceso' => $modelEnProceso,
            'modelTeminadas' => $modelTeminadas,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return OrdenesSoporte the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = OrdenesSoporte::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param OrdenesSoporte $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ordenes-soporte-form') {
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
        $es = new EditableSaver('OrdenesSoporte');
        $es->update();
    }

    /*
     * Obtiene el listado de tipo de soporte
     */

    public function actionGetTipoSoporteList() {
        //echo CJSON::encode(Editable::source(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion'));
        
        return CHtml::listData(CatTipoSoporte::model()->findAll('almacen="'.UsuariosSima::model()->find("usuario='" . Yii::app()->user->name . "'")->almacenSoporteDefault.'"'), 'keyRSA', 'descripcion');
        
    }
    
    /*
     * Renderiza lista de ordenes pendientes o iniciadas con el mismo código de equipo
     */
    public function actionOrdenesByCodigo($codigo) {
    	$listaOrdenes = new CActiveDataProvider('OrdenesSoporte', array(
				'criteria' => array(
					'condition' => 'codigo="'.$codigo.'" and (status="pending" or status="ontransit")',
					'order' => 'fecha ASC',
				 ),
				'pagination' => array(
			 		'pageSize' => 40,
				),
			 ));
    
		$this->render('scanLabels', array(
			'listaOrdenes' => $listaOrdenes,
		));
    }
	
    /*
     * Cambia el status de la orden al siguiente.
     * Puede recibir el id de la tabla de ordenes (GET) o de la activación móvil (POST)
     */

    public function actionActivarOrden() {
            $model = new OrdenesSoporte();
            $page = 'admin';

            if (isset($_POST['codigo']) and $_POST['codigo'] != "") {
                    $page= 'scan';
                    $codigo=$_POST['codigo'];
                    if (OrdenesSoporte::model()->count("codigo='" . $codigo . "' and (status='ontransit' or status='pending')")>1)
                            $this->actionOrdenesByCodigo($codigo);
                    else
                            $model = $this->actionGetKeySOP($codigo);
            }


            else
                    if (isset($_GET['field'])) {
                            $model = $model->findByPK($_GET['field']);
                    } else if (isset($_POST['id']) and $_POST['id'] != "") {
                            $model = $model->findByPK($_POST['id']);
                    }

            if($model){
                    if ($model->status == "pending") {
                            $model->status = "ontransit";
                            $model->usuarioEjecutor = Yii::app()->user->name;
                            $model->fechaInicio = date("Y-m-d H:i:s");
                            $model->fechaFinal = null;
                            //$model->fechaFinal=date("");
                            $model->save();
                    } else if ($model->status == "ontransit") {
                            $model->status = "done";
                            $model->usuarioEjecutor = Yii::app()->user->name;
                            $model->fechaFinal = date("Y-m-d H:i:s");
                            $model->save();
                            //$this->actionFirma($model);
                            //$this->redirect(array('firma', 'id' => $model->keySOP));
                    }
            }
            else {
                    Yii::app()->user->setFlash('notice', "No se encontró la órden");
            }

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array($page)); /**/

    }


    /*
    * Cambia el status de la orden de pending a ontransit
    * debe recibir los parametros GET del scan de qr
    */

    public function actionIniciarOrden() {
        $model = new OrdenesSoporte();
        //$page = array($page);
        $page=array('admin', "tab"=>"En");
        
        $change=true;

        if (isset($_POST['codigo']) and $_POST['codigo'] != "") {
                $codigo=$_POST['codigo'];

                if (isset($_POST['id']) and $_POST['id'] != "") {
                        $model = $model->findByPK($_POST['id']);
                        if($model->codigo!=$codigo){
                                Yii::app()->user->setFlash('notice', "El qr escaneado y el código de la orden no coinciden");
                                $change=false;
                        }
                }		
                else{
                        if (OrdenesSoporte::model()->count("codigo='" . $codigo . "' and (status='ontransit' or status='pending')")>1)
                                $this->redirect(array('OrdenesSoporte/ordenesByCodigo', 'codigo'=>$codigo));
                        else
                                $model = $this->actionGetKeySOP($codigo);
                }
        }
        else{
                if (isset($_POST['id']) and $_POST['id'] != "") {
                        //lanzar alert de comentario
                        //set flag para guardar comentario
                        //Yii::app()->user->setFlash('notice', "No escaneaste un qr");
                        $model = $model->findByPK($_POST['id']);
                }	
        }

        if($model && $change){
                if ($model->status == "pending") {
                        $model->status = "ontransit";
                        $model->usuarioEjecutor = Yii::app()->user->name;
                        $model->fechaInicio = date("Y-m-d H:i:s");
                        $model->fechaFinal = null;
                        //$model->fechaFinal=date("");
                        $model->save();
                        //Yii::app()->user->setFlash('notice', serialize($model->getErrors()));
                } else{
                        Yii::app()->user->setFlash('notice', "La orden que quieres iniciar no está pendiente");
                }
        }
        else if($change){
                Yii::app()->user->setFlash('notice', "No se encontró la órden");
        }

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : $page ); /**/

    }


    /*
     * Cambia el status de la orden al siguiente.
     * Puede recibir el id de la tabla de ordenes (GET) o de la activación móvil (POST)
     */

    public function actionFinalizarOrden() {
            $model = new OrdenesSoporte();
            $page=array('admin', "tab"=>"Terminadas");

            if (isset($_GET['id'])) {
                    $model = $model->findByPK($_GET['id']);
            }

            if($model){
                if ($model->status == "ontransit") {
                    $model->status = "done";
                    $model->usuarioEjecutor = Yii::app()->user->name;
                    $model->fechaFinal = date("Y-m-d H:i:s");
                    $model->save();
                }
            }
            else {
                Yii::app()->user->setFlash('notice', "No se encontró la órden");
            }

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : $page); /**/

    }
    
    

    public function statusPendingToOntransit(){
	
	}
	

    /*
     * Actualiza el dropdown de almacenes con los que pernecen a la entidad seleccionada
     *
     */

    public function actionAlmacenesPorEntidad() {
        $entidadSolicitud = $_POST['entidadSolicitud'];
        $catAlmacenvar = new CatAlmacen();
        $data = $catAlmacenvar::model()->findAll('miniAlmacen!="Si" and entidad=:entidad Order by descripcion', array(':entidad' => $entidadSolicitud)
        );


        //$data=CHtml::listData($data,'almacen','descripcion');
        $data = CMap::mergeArray(array('' => 'Seleccione departamento'), CHtml::listData($data, 'almacen', 'descripcion'));

        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode(ucwords(strtolower($name))), true);
        }
    }

	 /*
     * renderiza una lista simplificada de todas las ordenes de soporte
     * 
     */
    public function actionListadoParaImprimir() {
    
        $model = new OrdenesSoporte('searchOperador');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['OrdenesSoporte'])){
            $model->attributes = $_GET['OrdenesSoporte'];

			}
        $this->render('printOrdenes', array(
            'model' => $model,
        ));
    }
    
    /*
     * renderiza una lista filtrada y simplificada de las ordenes de soporte por fecha y departamento. 
     * 
     */
    public function actionModelParaListadoParaImprimirFiltrado() {
			$model = OrdenesSoporte::model()->findAll("STR_TO_DATE(fecha, '%Y-%m-%d') between '" . $_GET['fecha'] . "' and '" . $_GET['fechafinal'] ."' and (status='ontransit' or status='pending')");
    		return $model;

    }
    

    /*
     *
     * @return string El keySOP de la orden de soporte no "done" que tenga el codigo del equipo.
     */

    public function actionGetKeySOP($codigo) {
        $model = OrdenesSoporte::model()->find("codigo='" . $codigo . "' and (status='ontransit' or status='pending')");
        return $model;
    }
    
    /*
     *
     * @return string El keySOP de la orden de soporte no "done" que tenga el codigo del equipo.
     */

    public function actionGetAllKeySOP($codigo) {
    			$model = new CActiveDataProvider('OrdenesSoporte', array(
            'criteria' => array(
                'condition' => "codigo='" . $codigo . "' and (status='ontransit' or status='pending')",
                'order' => 'fechaInicio ASC',
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        )); 
        return $model;
    }
    
    /**
     * 
     */
    public function actionFirma($id) {
        //$this->layout='dasda';
        $model = new OrdenesSoporte();
        $model = $model->findByPK($id);
        $this->render('firma', array(
            'model' => $model,
        ));
    }
    

}
