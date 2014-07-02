<h1>Marcas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-marca-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyMA',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatMarca/updateEditable', array('model'=>'CatMarca', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarca/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarca/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarca/delete",array("id"=>$data->primaryKey))',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatMarca/create', array('model'=>'CatMarca')),)); ?>
</div>

