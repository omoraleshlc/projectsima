
<?php

$vare = $this->createUrl('ObservacionesOrdenSoporte/createPopup');
$vare2 = $this->createUrl('ObservacionesOrdenSoporte/viewPopup');

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'ordenes-soportependientes-grid',
    'dataProvider' => $model,
    'columns' => array(
        array(
            'name' => 'keySOP',
            'htmlOptions' => array('style' => 'width: 5%; text-align: center;'),
        ),
        'codigo',
        'observaciones',
        'nombre',
        array(
            'header' => 'Tipo de soporte',
            'value' => "isset(\$data->keyTS):(new CatTipoSoporte)->findByPk(\$data->keyTS)->descripcion:'-'",
            'headerHtmlOptions' => array('style' => 'width: 9%;'),
            'filter' => CHtml::activeDropDownList($model->model, 'keyTS', CHtml::listData(CatTipoSoporte::model()->findAll(), 'keyTS', 'descripcion'), array('prompt' => '')),
        ),
        'descripcionAlmacen',
        array(
            'name' => 'fecha',
            'htmlOptions' => array('style' => 'width: 9%; text-align: center;'),
        ),
        'fechaFinalEstimada',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{begin}',
            'header' => 'Iniciar',
            'buttons' => array(
                'begin' => array(//the name {reply} must be same
                    'label' => 'Iniciar', // text label of the button
                    'url' => 'Yii::app()->controller->createUrl("ordenesSoporte/scan", array("model"=>"ordenesSoporte", "field"=>"$data->keySOP"))',
                    'icon' => 'play',
                    'htmlOptions' => array('href' => 'dfsf'),
                ),
            ),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{obser}{verobser}',
            'header' => 'Obsevaciones',
            'buttons' => array(
                'obser' => array(//the name {reply} must be same
                    'label' => 'Agregar', // text label of the button
                    'icon' => 'plus',
                    'url' => '$data->keySOP',
                    'options' => array(
                        'onclick' => 'js:document.getElementById("idorden").src="' . $vare . '"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
                        'data-target' => '#myModal', 'data-toggle' => 'modal',
                        'type' => "submit"
                    ),
                ),
                'verobser' => array(//the name {reply} must be same
                    'label' => 'Agregar', // text label of the button
                    'icon' => 'list',
                    'url' => '$data->keySOP',
                    'options' => array(
                        'onclick' => 'js:document.getElementById("idorden").src="' . $vare2 . '"+"&OrdenSoporteId="+$(this).attr("href");document.getElementById("idorden").style.height="200px";return false;',
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

