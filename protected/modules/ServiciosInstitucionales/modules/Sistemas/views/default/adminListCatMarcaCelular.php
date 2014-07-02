<h1>Marcas de celular</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-marca-celular-grid',
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
				'url' => $this->createUrl('CatMarcaCelular/updateEditable', array('model'=>'CatMarcaCelular', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarcaCelular/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarcaCelular/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatMarcaCelular/delete",array("id"=>$data->primaryKey))',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatMarcaCelular/create', array('model'=>'CatMarcaCelular')),)); ?>
</div>

