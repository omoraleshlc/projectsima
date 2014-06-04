<h1>Equipo de Computo</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equipo-computo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header' => '#',
			'name' => 'keyIE',
			'htmlOptions' => array('style' => 'width: 10%; text-align: center;'),
		),
		/*		array(
			'class' => 'editable.EditableColumn',
			'name' => 'registro',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'registro')),
		'placement' => 'left',
			)
		),*/
		'departamento',
		'descripcionUbicacion',
		array(
			'class' => 'editable.EditableColumn',
			'header' => 'Tipo de equipo',
			'name' => 'keyTE',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'keyTE')),
				'source'    => $this->createUrl('EquipoComputo/getTipoEquipoList'),
				'placement' => 'left',
			)
		),		
		array(
			'class' => 'editable.EditableColumn',
			'header' => 'Marca',
			'name' => 'keyMA',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'keyMA')),
				'source'    => $this->createUrl('EquipoComputo/getMarcaList'),
				'placement' => 'left',
			)
		),
		'status',
		/*
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'motherboard',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'motherboard')),
		'placement' => 'left',
			)
		),		
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'drives',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'drives')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'harddisk',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'harddisk')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'memoriaRam',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'memoriaRam')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyMAM',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'keyMAM')),
		'placement' => 'left',
			)
		),				array(
			'class' => 'editable.EditableColumn',
			'name' => 'monitor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'monitor')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'usuario')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'fecha')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'hora')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'entidad')),
		'placement' => 'left',
			)
		),				array(
			'class' => 'editable.EditableColumn',
			'name' => 'solicitud',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'solicitud')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionEntidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'descripcionEntidad')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionAlmacen',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'descripcionAlmacen')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoProcesador',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'tipoProcesador')),
		'placement' => 'left',
			)
		),		array(
			'class' => 'editable.EditableColumn',
			'name' => 'velocidadProcesador',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('EquipoComputo/updateEditable', array('model'=>'EquipoComputo', 'field'=>'velocidadProcesador')),
		'placement' => 'left',
			)
		),		*/
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
		'url' =>$this->createUrl('EquipoComputo/create', array('model'=>'EquipoComputo')),)); ?>
</div>

