<h1>Tipos Equipo</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-equipo-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyTE',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatTipoEquipo/updateEditable', array('model'=>'CatTipoEquipo', 'field'=>'descripcion')),
		'placement' => 'left',
			)
		),		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoEquipo/view",array("id"=>$data->primaryKey))',
			'updateButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoEquipo/update",array("id"=>$data->primaryKey))',
			'deleteButtonUrl' =>'Yii::app()->createUrl("ServiciosInstitucionales/Sistemas/CatTipoEquipo/delete",array("id"=>$data->primaryKey))',
		),
	),
)); ?>

<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('CatTipoEquipo/create', array('model'=>'CatTipoEquipo')),)); ?>
</div>

