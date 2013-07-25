<?php


##TODAS LAS VISTAS LAS DEBES PROTEGER
class AdministracionController extends Controller
{
	public function actionIndex()
	{
		
            
            if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
               $this->render('index'); 
            }else{
              
               $this->redirect(array('site/login')); 
            }
	}

	public function actionAjustarCuentas(){
                if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){
               $this->render('ajustarCuentas'); 
            }else{
              
               $this->redirect(array('site/login')); 
            }
        }
        
        
       
}

