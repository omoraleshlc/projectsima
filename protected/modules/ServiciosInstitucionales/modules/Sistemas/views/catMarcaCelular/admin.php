<h1>Marcas de celular</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-marca-celular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyMA',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatMarcaCelular/updateEditable', array('model'=>'CatMarcaCelular', 'field'=>'keyMA')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatMarcaCelular/updateEditable', array('model'=>'CatMarcaCelular', 'field'=>'descripcion')),
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
		'url' =>$this->createUrl('CatMarcaCelular/create', array('model'=>'CatMarcaCelular')),)); ?>
</div>

