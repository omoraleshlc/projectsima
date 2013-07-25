<?php if(Yii::app()->user->name!==null and Yii::app()->user->name!=='Guest'){
        echo $this->renderPartial('/interfaz/menuPrincipal');
        }else{
        echo $this->renderPartial('/interfaz/inicio');    
        }

//echo 'views/site';