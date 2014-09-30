<?php

$vare = $this->createUrl('ObservacionesOrdenSoporte/createPopup');
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'ordenes-soporteterminadas-grid',
    'dataProvider' => $model,
    //'filter'=>$model,
    'columns' => array(
        array(
            'name' => 'idSOPAlmacen',
            'htmlOptions' => array('style' => 'width: 5%; text-align: center;'),
        ),
        'codigo',
        'observaciones',
        array(
            'header' => 'Tipo de soporte',
            'value' => "\$data->keyTS",
            'headerHtmlOptions' => array('style' => 'width: 9%;'),
            'filter' => CHtml::activeDropDownList($model->model, 'keyTS', CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion'), array('prompt' => '')),
        ),
        'descripcionAlmacen',
        array(
            'name' => 'fecha',
            'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
        ),
        array(
            'name' => 'Tiempo',
            'header' => 'Tiempo de terminacion',
            'value' => 'empty($data->fechaInicio)?\'\':date_diff(new DateTime($data->fechaInicio), new DateTime($data->fechaFinal))->format("%d días, %h horas, %i minutos.")'
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{obser}',
            'header' => 'Obsevaciones',
            'buttons' => array(
                'obser' => array(
                    'label' => 'Agregar',
                    'icon' => 'plus',
                    'url' => '$data->keySOP',
                    'options' => array(
                        'onclick' => 'js:document.getElementById("idorden").src="' . $vare . '"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
                        'data-target' => '#myModal', 'data-toggle' => 'modal',
                        'type' => "submit"
                    ),
                ),
            ),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'visible' => "Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionAvanzada')",
                ),
                'delete' => array(
                    'visible' => "Yii::app()->user->checkAccess('tarea_ordenesSoporte_edicionAvanzada')",
                ),
            ),
        ),
    ),
));
?>

