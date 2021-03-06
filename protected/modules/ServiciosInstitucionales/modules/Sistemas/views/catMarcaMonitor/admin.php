<?php
/* @var $this CatMarcaMonitorController */
/* @var $model CatMarcaMonitor */

$this->breadcrumbs=array(
	'Catálogo de Equipo'=>array('default/CatalogoEquipos'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CatMarcaMonitor', 'url'=>array('index')),
	array('label'=>'Create CatMarcaMonitor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cat-marca-monitor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Marcas de Monitor</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-marca-monitor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyMAM',
		 array( 
            'class' => 'editable.EditableColumn',
            'name' => 'descripcion',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('catMarcaMonitor/updateEditable', array('model'=>'catMarca', 'field'=>'descripcion')),
                'placement' => 'left',
            	)
       	),  
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
