<?php
/* @var $this TelefoniaCelularController */
/* @var $model TelefoniaCelular */

$this->breadcrumbs=array(
	'Telefonia Celular'=>array('admin'),
	$model->keyCTC,
);

$this->menu=array(
	array('label'=>'Crear Equipo de TelefoniaCelular', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo de Telefonia Celular', 'url'=>array('update', 'id'=>$model->keyCTC)),
	array('label'=>'Borrar Equipo de Telefonia Celular', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keyCTC),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Telefonia de Celular', 'url'=>array('admin')),
);

$model2 = new CatCompany;
$model3 = new CatEntidad;
$model4 = new CatAlmacen;
$model5 = new Proveedor;
?>

<div  class="visible-print-block">
<?php
echo CHtml::image(Yii::app()->request->baseUrl.'/images/hlclogo2.png'); 
?>
</div>


<div>
	<h1>Ver Equipo de Telefonía #<?php echo $model->keyCTC; ?></h1>
	<h3><?php echo CHtml::encode($model->getAttributeLabel('codigo')); ?>:
		<?php echo CHtml::link(CHtml::encode($model->codigo), array('view', 'id'=>$model->keyCTC)); ?></h3>
	<div style="width:50%; float: left;">
	<br/><br/>
	<b>Equipo para <?php  echo $model->usuarioCelular; ?> dado de alta por <?php  echo $model->usuario; ?></b>
	
	<div>
			Número telefónico <?php  echo $model->nTelefonico; ?>
			<br/>
				<?php  echo $model->company?$model2->find('keyTS="' . $model->company . '"')->descripcion:'Marca no especificada'; ?> modelo <?php echo $model->modelo?$model->modelo:' no especificado'; ?><?php  echo $model->keyP?' proveido por '.$model5->find('keyP="' . $model->keyP . '"')->razonSocial:' '; ?>
	</div>
	
	<div>
			En <?php echo $model->entidad?$model3->find('keyEntidades="' . $model->entidad . '"')->descripcionEntidad:' no especificada'; ?>, departamento de <?php echo $model->almacen?$model4->find('almacen="' . $model->almacen . '"')->descripcion:' no especificada'; ?>.
			<br/>
			<?php  echo $model->descripcionUbicacion; ?>
	</div>
	</div>
	<div  style="width:30%; float: right;" class="view tetris-thumbnail <?php echo !isset($model->codigo)?'hidden-print':'' ?>">
	<div class="graybox show" style="border: solid 1px LightGray;">
		<span class="visible-print-block" style="text-align:center;"><b>Hospital La Carlota</b></span>
		<span class="visible-print-block" style="text-align:center; zoom:0.7">Código de equipo</span><br/>
		<?php if(isset($model->codigo) && $model->codigo!="") {
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
		<b><?php echo CHtml::link(CHtml::encode($model->codigo),array('telefoniaCelular/update','id'=>$model->keyCTC), array('style'=>'zoom:1.3;')); ?></b>
	</div>
</div>
	
	
	

		<br />
		
		<table style="font-size: 0.9em">
			<tbody>
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('chip')); ?>:</b>
						<?php echo CHtml::encode($model->chip); ?>
					</td>
					<td>
					</td>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('imei')); ?>:</b>
						<?php echo CHtml::encode($model->imei); ?>
					</td>
				</tr>
				
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('plan')); ?>:</b>
						<?php echo CHtml::encode($model->plan); ?>
					</td>
					<td>
					</td>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('precioEquipo')); ?>:</b>
						<?php echo CHtml::encode($model->precioEquipo); ?>
					</td>
				</tr>
				
				
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('costoRenta')); ?>:</b>
						<?php echo CHtml::encode($model->costoRenta); ?>
					</td>
					<td>
					</td>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('minutos')); ?>:</b>
						<?php echo CHtml::encode($model->minutos); ?>
					</td>
				</tr>
				
				
				
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('sms')); ?>:</b>
						<?php echo CHtml::encode($model->sms); ?>
					</td>
					<td>
					</td>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('internet')); ?>:</b>
						<?php echo CHtml::encode($model->internet); ?>
					</td>
				</tr>
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('fechaContratacion')); ?>:</b>
						<?php echo CHtml::encode($model->fechaContratacion); ?>
					</td>
					<td>
					</td>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('fechaInicial')); ?>:</b>
						<?php echo CHtml::encode($model->fechaInicial); ?>
					</td>
				</tr>
				<tr>
					<td>
						<b><?php echo CHtml::encode($model->getAttributeLabel('fechaFinal')); ?>:</b>
						<?php echo CHtml::encode($model->fechaFinal); ?>
					</td>
					<td>
					</td>
					<td>
					
					</td>
				</tr>
				
			</tbody>
		</table>
		
</div>
<br/>
<div>
	<p>
	Notas:
	</p>
	<ol>
		<li>
		El equipo cuenta con un año de garantía contra defectos de fábrica.
		</li>
		<li>
		Ante cualquier daño ocasionado al equipo celular por mal funcionamiento será responsabilidad del usuario cubrir los gastos para que el eequipo esté en óptimas condiciones mientras dure el plazo forzoso de renta.
		</li>
		<li>
		El equipo celular y la línea son propiedad del Hospital La Carlota (podrá el HLC solicitar el equipo al término del contrato forzoso).
		</li>
	</ol>
</div>

<div class="visible-print-block" style="padding-top: 20px; padding-bottom: 30px; width: 100%">
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



<div class="row buttons hidden-print" style="clear:both">
	<?php echo CHtml::button('Actualizar', array('submit' => array('telefoniaCelular/update','id'=>$model->keyCTC))); ?>
	<?php echo CHtml::button('Imprimir etiqueta', array('submit' => array('telefoniaCelular/printLabel','id'=>$model->keyCTC))); ?>
	<input type="button" value="Imprimir datos de equipo" onclick="window.print();return false;" />
</div>

