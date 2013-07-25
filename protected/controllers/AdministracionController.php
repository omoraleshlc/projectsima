<?php

class AdministracionController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAjustarCuentas(){
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

