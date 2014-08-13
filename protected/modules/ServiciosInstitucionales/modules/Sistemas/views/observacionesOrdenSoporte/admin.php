<h1>Observaciones de Orden de Soporte</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-orden-soporte-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keySOP',
		'descripcion',
		'usuario',
		'fecha',
		'hora',
		'entidad',
		/*
		'keyS',
		*/
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
		'url' =>$this->createUrl('ObservacionesOrdenSoporte/create', array('model'=>'ObservacionesOrdenSoporte')),)); ?>
</div>

