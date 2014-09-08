<?php
/* @var $this CatTipoEquipoController */
/* @var $model CatTipoEquipo */

$this->breadcrumbs=array(
	'Cat Tipo Equipos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CatTipoEquipo', 'url'=>array('index')),
	array('label'=>'Create CatTipoEquipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cat-tipo-equipo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Tipo de Equipos</h1>

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
	'id'=>'cat-tipo-equipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyTE',
		 array( 
            'class' => 'editable.EditableColumn',
            'name' => 'descripcion',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('catTipoEquipo/updateEditable', array('model'=>'catMarca', 'field'=>'descripcion')),
                'placement' => 'left',
            	)
       	),  
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
