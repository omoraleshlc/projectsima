<?php if(!Yii::app()->user->isGuest){
        echo $this->renderPartial('/interfaz/menuPrincipal');
        }else{
        echo $this->renderPartial('/interfaz/inicio');    
        }

//echo 'views/site';
