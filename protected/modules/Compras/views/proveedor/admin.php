<h1>Proveedors</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyP',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'keyP')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'id_proveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'id_proveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'razonSocial',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'razonSocial')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'ciudad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'ciudad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'estado',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'estado')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'cp',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'cp')),
				'placement' => 'left',
			)
		),		/*

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'telefono',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'telefono')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'telefono1',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'telefono1')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'rfc',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'rfc')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'calle',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'calle')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'colonia',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'colonia')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'usuario',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'usuario')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fecha',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'fecha')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'hora',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'hora')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'status',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'status')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoPersona',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'tipoPersona')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'curp',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'curp')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'ctaContable',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'ctaContable')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaCedula',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'copiaCedula')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaActa',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'copiaActa')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'copiaHacienda',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'copiaHacienda')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'comprobanteDomicilio',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'comprobanteDomicilio')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'retenciones',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'retenciones')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'tipoProveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'tipoProveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'procedenciaProveedor',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'procedenciaProveedor')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'entidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'entidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'id_fiscal',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'id_fiscal')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'codigoPostal',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'codigoPostal')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite1',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'limite1')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite2',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'limite2')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite3',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'limite3')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'limite4',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('Proveedor/updateEditable', array('model'=>'Proveedor', 'field'=>'limite4')),
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
		'url' =>$this->createUrl('Proveedor/create', array('model'=>'Proveedor')),)); ?>
</div>

