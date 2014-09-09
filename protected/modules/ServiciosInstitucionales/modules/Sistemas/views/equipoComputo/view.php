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


<div  class="visible-print-block">
<?php
echo CHtml::image(Yii::app()->request->baseUrl.'/images/hlclogo2.png'); 
?>
</div>

<div>
	<h1>Ver Equipo de Cómputo #<?php echo $model->keyIE; ?></h1>
	<h2><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:
		<?php echo CHtml::link(CHtml::encode($model->codigo), array('view', 'id'=>$model->keyIE)); ?></h2>
	<h3>Equipo <?php  echo $model->status='A'?'activo':'inactivo'; ?> dado de alta por <?php  echo $model->usuario; ?></h3>
	<div>
			<?php  echo $model->keyTE?$model2->find('keyTE="' . $model->keyTE . '"')->descripcion:'tipo no especificado'; ?> marca <?php echo $model->keyMA?$model3->find('keyMA="' . $model->keyMA . '"')->descripcion:' no especificada'; ?><?php  echo $model->keyP?' proveido por '.$model5->find('keyP="' . $model->keyP . '"')->razonSocial:'.'; ?>
			<br/>
			<?php  echo $model->keyMAM?'Monitor marca '.$model4->find('keyMAM="' . $model->keyMAM . '"')->descripcion:'Monitor no especificado'; ?>
	</div>
	
	<div>
			En <?php  echo $model->descripcionEntidad; ?>, departamento de <?php echo CHtml::encode($model->descripcionAlmacen); ?>.
			<br/>
			<?php  echo $model->descripcionUbicacion; ?>
	</div>

		<br />
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'harddisk',
			'memoriaRam',
			'monitor',
			'tipoProcesador',
			'velocidadProcesador',
			'fecha',
			'hora',
		),
	)); ?>
</div>
<br/>
<div class="visible-print-block" style="padding-top: 80px; padding-bottom: 30px; width: 100%">
	<div style="width: 30%; border-top: solid black 1px; display:inline; float: right;">
		Firma de entregado
		<br/>
	</div>
	<div style="width: 30%; border-top: solid black 1px; diplay: inline; float: left;">
		Firma de recibido
		<br/>
	</div>
	
</div>
<br/>
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
	<?php echo CHtml::button('Imprimir etiqueta', array('submit' => array('equipoComputo/printLabel','id'=>$model->keyIE))); ?>
	<input type="button" value="Imprimir datos de equipo" onclick="window.print();return false;" />
</div>

