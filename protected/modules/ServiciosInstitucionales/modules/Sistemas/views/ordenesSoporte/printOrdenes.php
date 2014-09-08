<?php
/* @var $this EquipoComputoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes',
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

?>

<h1>Impresión de ordenes</h1>
<div id="divordenes">
	<?php echo CHtml::link('Filtrar ordenes','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div>


<div>
	<table>
		<tr>
			<td style="width: 10%">
				<b><?php echo CHtml::encode($model->getAttributeLabel('fecha')); ?></b>
			</td>
			<td style="width: 10%">
				<b>Fecha proceso</b>
			</td>
				
			<td style="width: 15%">
				<b>Tiempo de terminación</b>
			</td>
			
			<td style="width: 10%">
				<b><?php echo CHtml::encode($model->getAttributeLabel('descripcionAlmacen')); ?></b>
			</td>
			
			<td style="width: 10%">
				<b>Soporte</b>
			</td>
			
			<td style="width: 10%">
				<b><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?></b>
			</td>
			
			<td style="width: 26%">
				<b><?php echo CHtml::encode($model->getAttributeLabel('observaciones')); ?></b>
			</td>
			
			<td style="">
				<b><?php echo CHtml::encode($model->getAttributeLabel('usuario')); ?></b>
			</td>
		</tr>
		
		
		
		<?php
		
			$this->widget('zii.widgets.CListView', array(
				'id'=>'ordenes-list',
				'dataProvider'=>$model->searchPrint(),
				'itemView'=>'_view',
			));
		?>
	</div>

