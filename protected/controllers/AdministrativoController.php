<?php

class AdministrativoController extends Controller
{
    
    
    
        public function actionIndex()
	{

            
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
                
                
                $usuario = Yii::app()->user->name;
                $users = Usuarios::model()->findByAttributes(array('usuario' => Yii::app()->user->name));
                $entidad = $users->entidad;

                $oRoles = UserRoles::model()->findByAttributes(array('username' => Yii::app()->user->name));
                
                
                
                if ($oRoles!=null && $oRoles->role=='ADMISIONES_ADMIN') {
                $this->render('index');
                }else{
                    //throw new CHttpException(403, 'No estás autorizado para ver ésta página!');
                    $this->redirect(array('administrativo/deny')); 
                }
        }else{
            
            $this->redirect(array('/site')); 
            }
            
            
            
            
	}
        
        
        
        
        
        
        
        public function actionAgregarorden()
        {
           
        if (isset($_POST_['keyRSA'])!=null && isset($_POST['agregar']) && $_POST['agregar']=='Agregar orden'){    
        $agregarOrden=new SisOrdenesSOP();
        //$agregarOrden->almacen=$_POST['almacen'];
        //$agregarOrden->codigoEntidad=$_POST['codigoEntidad']; 
        
        
        
        //$validar = $agregarOrden->validate();
        
        //if($validar){
        //$agregarOrden->save(true);
        //}
        $agregarOrden->keyTS                = $_POST_['keyRSA'];
        $agregarOrden->entidadSolicitud     = 'codigoEntidad';
        $agregarOrden->nombre               = $_POST['nombre'];
        $agregarOrden->status               = 'standby';
        $agregarOrden->usuarioEjecutor      = $_POST['usuarioAplicacion'];
        $agregarOrden->observaciones        = $_POST['observaciones'];
        $agregarOrden->almacen              = 'almacen';
        $agregarOrden->keyTS                = 1;
        $agregarOrden->usuario              = Yii::app()->user->name;
        $agregarOrden->save(false);
        
        }else{
         echo '<script>window.alert("TE FALTA LLENAR CAMPOS");</script>'; 
         $this->redirect(array('/administrativo'));    
            
        }
        }
        
        
        
            public function actionDeny(){               
                return $this->redirect(array('/site'),array('a'=>'S'));
                throw new CHttpException(403, 'No estás autorizado para ver ésta página!');
            }


            
        
        
        
        
            public function actionCreate() {
            $a = new A;
            $b = new B;
            if (isset($_POST['A'], $_POST['B'])) {
                // populate input data to $a and $b
                $a->attributes = $_POST['A'];
                $b->attributes = $_POST['B'];

                // validate BOTH $a and $b
                $valid = $a->validate();
                $valid = $b->validate() && $valid;

                if ($valid) {
                    // use false parameter to disable validation
                    $a->save(false);
                    $b->save(false);
                    // ...redirect to another page
                }
            }

            $this->render('create', array(
                'a' => $a,
                'b' => $b,
            ));
            }
        
        
        
        
        
        
        
        
        
        
        

        public function accessRules()
{
         return array(
                 array('allow',  
                         'actions'=>array('admin','update'),
                         'roles'=>array('rol_edicion'),
                         'expression'=>'$user->id == '.$this->idPropio 
      
                  ),);
         
         
}
        
        
        
        
        
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}