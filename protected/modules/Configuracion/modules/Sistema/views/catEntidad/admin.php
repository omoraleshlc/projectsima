<h1>Entidades</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-entidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'keyEntidades',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'keyEntidades')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'codigoEntidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'codigoEntidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'descripcionEntidad',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'descripcionEntidad')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'status',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'status')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'fechaApertura',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'fechaApertura')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'prefijoEfectivo',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'prefijoEfectivo')),
				'placement' => 'left',
			)
		),		/*

		array(
			'class' => 'editable.EditableColumn',
			'name' => 'prefijoCxC',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'prefijoCxC')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'digitosFactura',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'digitosFactura')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'rutaRecibo',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'rutaRecibo')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'rutaReciboPaquete',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'rutaReciboPaquete')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'statusExistencias',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'statusExistencias')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'direccion',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'direccion')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'cp',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'cp')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'telefono',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'telefono')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'url',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'url')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'id_ccosto',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'id_ccosto')),
				'placement' => 'left',
			)
		),
		array(
			'class' => 'editable.EditableColumn',
			'name' => 'version',
			'editable' => array(
				'type' => 'text',
				'url' => $this->createUrl('CatEntidad/updateEditable', array('model'=>'CatEntidad', 'field'=>'version')),
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
		'url' =>$this->createUrl('CatEntidad/create', array('model'=>'CatEntidad')),)); ?>
</div>

