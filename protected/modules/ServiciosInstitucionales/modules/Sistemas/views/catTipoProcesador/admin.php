<?php
/* @var $this CatTipoProcesadorController */
/* @var $model CatTipoProcesador */

$this->breadcrumbs=array(
	'Cat Tipo Procesadors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CatTipoProcesador', 'url'=>array('index')),
	array('label'=>'Create CatTipoProcesador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cat-tipo-procesador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Tipos de Procesador</h1>

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
	'id'=>'cat-tipo-procesador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyTP',
		 array( 
            'class' => 'editable.EditableColumn',
            'name' => 'descripcion',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('catTipoProcesador/updateEditable', array('model'=>'catMarca', 'field'=>'descripcion')),
                'placement' => 'left',
            	)
       	),  
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
