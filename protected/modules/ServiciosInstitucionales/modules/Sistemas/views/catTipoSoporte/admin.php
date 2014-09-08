<?php
/* @var $this CatTipoSoporteController */
/* @var $model CatTipoSoporte */

$this->breadcrumbs=array(
	'Cat Tipo Soportes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CatTipoSoporte', 'url'=>array('index')),
	array('label'=>'Create CatTipoSoporte', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cat-tipo-soporte-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Tipo de Soporte</h1>

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
	'id'=>'cat-tipo-soporte-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'keyRSA',
		 array( 
            'class' => 'editable.EditableColumn',
            'name' => 'descripcion',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('catTipoSoporte/updateEditable', array('model'=>'catMarca', 'field'=>'descripcion')),
                'placement' => 'left',
            	)
       	),
       'almacen', 
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 


?>
<div style="text-align: right">
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Nuevo',
    'size'=>'small', // null, 'large', 'small' or 'mini'
    'url'=>array('create')
)); ?>

</div>


<br/>
<br/>
<br/>
<br/>
AAAAAAAAAAAAAAAA
<?php 
	$model2= CatTipoProcesador::model();
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cat-tipo-soporte-grid',
	'dataProvider'=>$model2->search(),
	'filter'=>$model2,
	'columns'=>array(
		'keyTP',
		 array( 
            'class' => 'editable.EditableColumn',
            'name' => 'descripcion',
            'editable' => array(
                'type'      => 'text',
                'url'       => $this->createUrl('catTipoProcesador/updateEditable', array('model'=>'catTipoProcesador', 'field'=>'descripcion')),
                'placement' => 'left',
            	)
       	),  
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
?>
