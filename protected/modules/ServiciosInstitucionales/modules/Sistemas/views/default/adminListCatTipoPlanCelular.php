<h1>Tipo de planes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-plan-celular-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyTS',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoPlanCelular/updateEditable', array('model'=>'CatTipoPlanCelular', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoPlanCelular/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoPlanCelular/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoPlanCelular/delete",array("id"=>$data->primaryKey))',
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

