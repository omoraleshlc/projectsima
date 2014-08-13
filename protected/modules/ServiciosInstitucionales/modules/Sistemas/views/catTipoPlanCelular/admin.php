<h1>Tipo de Planes de Celular</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-plan-celular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyTS',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoPlanCelular/updateEditable', array('model'=>'CatTipoPlanCelular', 'field'=>'keyTS')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoPlanCelular/updateEditable', array('model'=>'CatTipoPlanCelular', 'field'=>'descripcion')),
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
		'url' =>$this->createUrl('CatTipoPlanCelular/create', array('model'=>'CatTipoPlanCelular')),)); ?>
</div>

