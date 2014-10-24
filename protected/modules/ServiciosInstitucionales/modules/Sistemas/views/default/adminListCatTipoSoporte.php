<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-soporte-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyRSA',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoSoporte/updateEditable', array('model'=>'CatTipoSoporte', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),
		array(
			'header' => 'Almacen',
			'name' => 'descripcionAlmacen',
		),	
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoSoporte/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoSoporte/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoSoporte/delete",array("id"=>$data->primaryKey))',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatTipoSoporte/create', array('model'=>'CatTipoSoporte')),)); ?>
</div>

