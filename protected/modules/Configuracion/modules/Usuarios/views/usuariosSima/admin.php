<h1>Usuarios Simas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-sima-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'folio',
		'usuario',
		'nombre',
		'aPaterno',
		'aMaterno',
		'email',
		/*
		'llave',
		'ejercicio',
		'fecha',
		'medico',
		'tipoUsuario',
		'status',
		'fechaIngreso',
		'fechaSalida',
		'horaIngreso',
		'horaSalida',
		'entidad',
		'language',
		'ip',
		'roles',
		'almacenSoporteDefault',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{cruge}',
			'header' => 'Cruge',
			'buttons' => array(
				'cruge' => array( //the name {reply} must be same
					'label' => 'Copiar a cruge', // text label of the button
					'url' => 'Yii::app()->controller->createUrl("usuariosSima/copiarACruge", array("model"=>"usuariosSima", "id"=>"$data->folio"))',
					'icon'=>'arrow-right',
					'htmlOptions'=>array('href'=>'dfsf'),
				),	
			),
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('UsuariosSima/create', array('model'=>'UsuariosSima')),)); ?>
</div>

