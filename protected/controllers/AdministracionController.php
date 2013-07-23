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
        
        
       
}

