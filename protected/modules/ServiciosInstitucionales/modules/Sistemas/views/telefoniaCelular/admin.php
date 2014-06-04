<h1>Telefonia Celular</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'telefonia-celular-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyCTC',
		'fechaInicial',
		'fechaFinal',
		'descripcionUbicacion',
		'usuarioCelular',
		'plan',
		array(
			'class' => 'editable.EditableColumn',
			'header' => 'Tipo de equipo',
			'name' => 'keyMA',
			'editable' => array(
				'type' => 'select',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'keyMA')),
				'source'    => $this->createUrl('TelefoniaCelular/getMarcaCelularList'),
				'placement' => 'left',
			)
		),
		/*array(
			'class' => 'editable.EditableColumn',
			'name' => 'precioEquipo',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'precioEquipo')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'cantidadAutorizada',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'cantidadAutorizada')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'costoRenta',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'costoRenta')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fechaContratacion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'fechaContratacion')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'plazoForzoso',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'plazoForzoso')),
				'placement' => 'left',
			)
		),		/*

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keySW',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'keySW')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'modelo',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'modelo')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'chip',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'chip')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'imei',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'imei')),
				'placement' => 'left',
			)
		),
		
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuarioCelular',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'usuarioCelular')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionUbicacion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'descripcionUbicacion')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'almacen',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'almacen')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'codigoEntidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'codigoEntidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'usuario')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'fecha')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'hora')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'entidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'ruta',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'ruta')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'nTelefonico',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'nTelefonico')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'registro',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'registro')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'solicitud',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'solicitud')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fechaInicial',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'fechaInicial')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fechaFinal',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'fechaFinal')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'minutos',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'minutos')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'red',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'red')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'sms',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'sms')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'internet',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'internet')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'roaming',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'roaming')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'plan',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'plan')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'moduloAdicional',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'moduloAdicional')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'company',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('TelefoniaCelular/updateEditable', array('model'=>'TelefoniaCelular', 'field'=>'company')),
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
		'url' =>$this->createUrl('TelefoniaCelular/create', array('model'=>'TelefoniaCelular')),)); ?>
</div>

