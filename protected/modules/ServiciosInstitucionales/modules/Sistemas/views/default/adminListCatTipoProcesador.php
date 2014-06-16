<h1>Tipos Procesador</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-procesador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyTP',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoProcesador/updateEditable', array('model'=>'CatTipoProcesador', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoProcesador/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoProcesador/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoProcesador/delete",array("id"=>$data->primaryKey))',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatTipoProcesador/create', array('model'=>'CatTipoProcesador')),)); ?>
</div>

