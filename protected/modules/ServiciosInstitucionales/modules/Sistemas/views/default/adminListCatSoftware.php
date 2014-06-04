<h1>Software</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-software-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keySW',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatSoftware/updateEditable', array('model'=>'CatSoftware', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatSoftware/create', array('model'=>'CatSoftware')),)); ?>
</div>

