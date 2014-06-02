<?php

class AdministrativoController extends Controller
{
    
    
    
        public function actionIndex()
	{

            
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
                
                
                $usuario = Yii::app()->user->name;
                $users = Usuarios::model()->findByAttributes(array('usuario' => Yii::app()->user->name));
                $entidad = $users->entidad;

                $role = UserRoles::model()->findByAttributes(array('username' => Yii::app()->user->name));
                //$role->role;
                if ($role->role==='ADMISIONES_ADMIN') {
                $this->render('index');
                }else{
                    throw new CHttpException(403, 'No estás autorizado para ver ésta página!');
                    //$this->redirect(array('/site')); 
                }
        }else{
            
            $this->redirect(array('/site')); 
            }
            
            
            
            
	}
        
        
        
        
        
        
        
        public function actionAgregarorden()
        {
            
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