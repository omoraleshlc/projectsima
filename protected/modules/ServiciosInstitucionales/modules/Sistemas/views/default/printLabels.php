<?php
/* @var $this EquipoComputoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imprimir Etiquetas',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#equipoLabels-list').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

Yii::app()->clientScript->registerScript('searcht', "
$('.search-buttont').click(function(){
	$('.search-formt').toggle();
	return false;
});
$('.search-formt form').submit(function(){
	$('#telefoniaLabels-list').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

Yii::app()->clientScript->registerScript('toggle', "
$('#chkEquipo').click(function(){
	if(document.getElementById('chkEquipo').checked){
		document.getElementById('divequipo').style.display= 'block' ;
	}
	else {
		document.getElementById('divequipo').style.display= 'none' ;
	}
});

$('#chkTelefonía').click(function(){
	if(document.getElementById('chkTelefonía').checked){
		document.getElementById('divtelefonia').style.display= 'block' ;
	}
	else {
		document.getElementById('divtelefonia').style.display= 'none' ;
	}
});


");


?>

<h1>Impresión de etiquetas</h1>


<input type="checkbox" name="chkEquipo" value="chkEquipo" id="chkEquipo" checked> <span class="chklabel">Mostrar equipo de computo</span><br>
<input type="checkbox" name="chkTelefonía" value="chkTelefonía" id="chkTelefonía" checked> <span class="chklabel">Mostrar telefonía celular</span><br>


<div id="divequipo">
	<h2>Equipos de cómputo</h2>
	<?php echo CHtml::link('Filtrar equipos','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_searchEquipoComputo',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
	<div>
		<?php
			$this->widget('zii.widgets.CListView', array(
				'id'=>'equipoLabels-list',
				'dataProvider'=>$model->searchLabels(),
				'itemView'=>'_viewLabel',
			));
		?>
	</div>
</div>
<br/>
<br/>
<div id="divtelefonia">
	<h2>Telefonía</h2>
	<?php echo CHtml::link('Filtrar telefonía','#',array('class'=>'search-buttont')); ?>
	<div class="search-formt" style="display:none">
		<?php $this->renderPartial('_searchTelefoniaCelular',array(
			'model'=>$modelt,
		)); ?>
	</div><!-- search-form -->


	<div id="test">
		<?php
			$this->widget('zii.widgets.CListView', array(
				'id'=>'telefoniaLabels-list',
				'dataProvider'=>$modelt->searchLabels(),
				'itemView'=>'_viewLabelt',
			));
		?>
	</div>
</div>

