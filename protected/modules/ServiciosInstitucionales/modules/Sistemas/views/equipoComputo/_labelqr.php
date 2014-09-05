<?php
/* @var $this EquipoComputoController */
/* @var $model EquipoComputo */

$this->breadcrumbs=array(
	'Equipo Computo'=>array('admin'),
	$model->keyIE,
);

$this->menu=array(
	array('label'=>'Crear Equipo de Computo', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo de Computo', 'url'=>array('update', 'id'=>$model->keyIE)),
	array('label'=>'Borrar Equipo de Computo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyIE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Equipo de Computo', 'url'=>array('admin')),
);

$model2 = new CatTipoEquipo;
$model3 = new CatMarca;
$model4 = new CatMarcaMonitor;
$model5 = new Proveedor;
?>
<div class="hidden-print">
	<h1>Etiqueta de Equipo de Cómputo #<?php echo $model->keyIE; ?></h1>
	<h2><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:
		<?php echo CHtml::link(CHtml::encode($model->codigo), array('view', 'id'=>$model->keyIE)); ?></h2>
</div>
<div class="view tetris-thumbnail <?php echo !isset($model->codigo)?'hidden-print':'' ?>">
	<div class="graybox" style="border: solid 1px LightGray;">
		<span class="visible-print-block" style="text-align:center;"><b>Hospital La Carlota</b></span>
		<span class="visible-print-block" style="text-align:center; zoom:0.7">Código de equipo</span><br/>
		<?php if(isset($model->codigo)) {
				$this->widget('application.extensions.qrcode.QRCodeGenerator',array(
				'data' => $model->codigo,
				'subfolderVar' => true,
				'matrixPointSize' => 5,
			));
			}else{
				echo '<br />Sin codigo asignado<br />';
			}
		?>
		<br />
		<b><?php echo CHtml::link(CHtml::encode($model->codigo),array('equipoComputo/update','id'=>$model->keyIE), array('style'=>'zoom:1.3;')); ?></b>
	</div>
</div>
<div class="row buttons hidden-print" style="clear:both">
	<?php echo CHtml::button('Actualizar', array('submit' => array('equipoComputo/update','id'=>$model->keyIE))); ?>
	<input type="button" value="Imprimir código de equipo" onclick="window.print();return false;" />
</div>

