<?php

return array(
 
    'elements'=>array(
        'status'=>array(
            'type'=>'text',
        ),
        'departamento'=>array(
            'type'=>'text',
        ),
        'descripcionUbicacion'=>array(
            'type'=>'text',
        ),
        
        'descripcionAlmacen'=>array(
            'type'=>'text',
        ),
        
        'entidad'=>array(
            'type'=>'dropdownlist',
    			'items'=>CHtml::listData(CatEntidad::model()->findAll(), 'codigoEntidad', 'descripcionEntidad'),
    			'prompt'=>'Seleccione la entidad',
    			'options' => array($this->model->entidad=>array('selected'=>true))
        ),
        'keyTE'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'keyMA'=>array(
            'type'=>'text',
        ),
        
        'memoriaRam'=>array(
            'type'=>'text',
        ),
        'harddisk'=>array(
            'type'=>'text',
        ),
        'keyMAM'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'monitor'=>array(
            'type'=>'text',
        ),
        
        'tipoProcesador'=>array(
            'type'=>'text',
        ),
        'motherboard'=>array(
            'type'=>'text',
        ),
        'registro'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'drives'=>array(
            'type'=>'text',
        ),
        
        'velocidadProcesador'=>array(
            'type'=>'text',
        ),
         'usuario'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'fecha'=>array(
            'type'=>'text',
        ), 'keyMAM'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'hora'=>array(
            'type'=>'text',
        ), 'keyMAM'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'solicitud'=>array(
            'type'=>'text',
        ),
        'descripcionEntidad'=>array(
            'type'=>'text',
        )
    ),
 
    /*'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Crear',
        ),
    ),*/
);

?>
