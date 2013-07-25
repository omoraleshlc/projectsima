<?php


##TODAS LAS VISTAS LAS DEBES PROTEGER
class AdministracionController extends Controller
{
	public function actionIndex()
	{
		
            /*
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
               $this->render('index'); 
            }else{
              
               $this->redirect(array('site/login')); 
            }*/
            $this->render('index'); 
	}

	public function actionAjustarCuentas(){
               /* if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
               $this->render('ajustarCuentas'); 
            }else{
              
               $this->redirect(array('site/login')); 
            }*/
            $this->render('ajustarCuentas'); 
        }
        
        public function accessRules()
{
         return array(
                 array('allow',  
                         'actions'=>array('admin','update'),
                         'roles'=>array('rol_edicion'),
                         'expression'=>'$user->id == '.$this->idPropio // Esta es la idea, entonces debe ajustarse a su propia configuración
                  ),);
         
         
}
       
}

