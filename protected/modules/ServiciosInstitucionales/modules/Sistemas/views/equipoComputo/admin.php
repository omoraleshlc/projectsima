<h1>Equipo de Cómputo</h1>

<div style="text-align: right">
<?php
	 $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Crear nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    /*'url'=>array('create')*/
		'url' =>$this->createUrl('EquipoComputo/create', array('model'=>'EquipoComputo')),)); ?>
</div>
<?php
$model2 = new CatTipoEquipo;

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equipo-computo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'codigo',
			'headerHtmlOptions' => array('style' => 'width: 10%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
			'filter'=>"<i class='icon-search'></i>&nbsp;&nbsp;".CHtml::activeTextField($model, 'codigo', 
                 array('style'=>'width:60%')),
		),
		array(
			'name' => 'departamento',
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeTextField($model, 'departamento', 
                 array('style'=>'width:88%')),
		),
		array(
			'name' => 'descripcionUbicacion',
			'headerHtmlOptions' => array('style' => 'width: 30%;'),
			'filter'=>CHtml::activeTextField($model, 'descripcionUbicacion', 
                 array('style'=>'width:88%')),
		),
		
		array(
			'header' => 'Tipo de equipo',
			'value' => "(new CatTipoEquipo)->findByPk(\$data->keyTE)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeDropDownList($model,'keyTE',CHtml::listData(CatTipoEquipo::model()->findAll(), 'keyTE', 'descripcion' ), array('prompt'=>'')),
		),
		array(
			'header' => 'Marca',
			'value' => "(new CatMarca)->findByPk(\$data->keyMA)->descripcion",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeDropDownList($model,'keyMA',CHtml::listData( CatMarca::model()->findAll(), 'keyMA', 'descripcion' ), array('prompt'=>'')),
		),
		array(
			'header' => 'Proveedor',
			'value' => "\$data->keyP?((new Proveedor)->findByPk(\$data->keyP)->razonSocial):'-'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'filter'=>CHtml::activeDropDownList($model,'keyP',CHtml::listData(Proveedor::model()->findAll('tipoProveedor="sistemas" order by razonSocial'), 'keyP', 'razonSocial' ), array('prompt'=>'')),
		),
		array(
			'header'=>'Status',
			'value' => "\$data->status=='A'?'Activo':'Inactivo'",
			'headerHtmlOptions' => array('style' => 'width: 9%;'),
			'htmlOptions' => array('style' => 'text-align: center;'),
		),
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

