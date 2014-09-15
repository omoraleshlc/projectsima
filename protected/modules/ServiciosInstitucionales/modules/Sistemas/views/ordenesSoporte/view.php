<?php
/* @var $this OrdenesSoporteController */
/* @var $model OrdenesSoporte */

$this->breadcrumbs=array(
	'Ordenes de Soporte'=>array('admin'),
	$model->keySOP,
);

$this->menu=array(
	array('label'=>'Crear Ordenes de Soporte', 'url'=>array('create')),
	array('label'=>'Actualizar Ordenes de Soporte', 'url'=>array('update', 'id'=>$model->keySOP)),
	array('label'=>'Borrar Ordenes de Soporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->keySOP),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Lista de Ordenes de Soporte', 'url'=>array('admin')),
);

$model2 = new CatTipoSoporte;
$model3 = new CatEntidad;

?>
<div class="page-header" style="margin: 0">
	<h2>Orden de Soporte #<?php echo $model->keySOP; ?> <small>Código de equipo: <span style='color:black'><?php echo CHtml::encode($model->codigo); ?></span></small></h2>
</div>

<div>
		En <?php  echo $model->entidadSolicitud?$model3->find('codigoEntidad="' . $model->entidadSolicitud . '"')->descripcionEntidad:'entidad no especificada'; ?>, departamento de <?php echo CHtml::encode($model->almacen); ?>.
		<br/>
		<?php echo CHtml::encode($model->nombre); ?> solicita soporte tipo <?php echo $model->keyTS?$model2->find('keyRSA="' . $model->keyTS . '"')->descripcion:'no especificado'; ?> de <?php echo CHtml::encode($model->almacenSoporte); ?>.
</div>

<h2><?php echo CHtml::encode($model->observaciones); ?></h2>
Orden creada por 	<?php echo CHtml::encode($model->usuario); ?> de <?php echo $model->entidad?$model3->find('codigoEntidad="' . $model->entidad . '"')->descripcionEntidad:'entidad no especificada'; ?> el <?php echo CHtml::encode($model->fecha); ?> a las <?php echo CHtml::encode($model->hora); ?>
<br/>
<div>
	<?php
		$observaciones = new ObservacionesOrdenSoporte();
		$observaciones = $observaciones::model();
		$observaciones->keySOP=$model->keySOP;
		$this->renderPartial('/observacionesOrdenSoporte/adminList',array(
			'model'=>$observaciones,
		));
	?>
</div>
	
<div>
			<h4>Orden <span style='color:DodgerBlue'><?php echo $model->status=='pending'?'pendiente':($model->status=='ontransit'?'en proceso':'terminada') ?></span> atendida por <?php
			
			$simauser= UsuariosSima::model()->find('usuario=:usuario',array(':usuario'=>$model->usuarioEjecutor,));
			echo CHtml::encode(
			 ucwords(strtolower($simauser->nombre.' '.$simauser->aPaterno))
			); ?>.</h4>
</div>	
		
<div>
	<?php $fechaCreacion = date_create_from_format('Y-m-d h:i a', $model->fecha.' '.$model->hora); ?>
	Se creó el <?php echo CHtml::encode($fechaCreacion->format('Y-m-d H:i:s')); ?>
	<br/>
	Se inició el <?php echo CHtml::encode($model->fechaFinal); ?>
	<br/>
	Se terminó el <?php echo CHtml::encode($model->fechaInicio); ?>
	<br/>
	<?php 
		//$fechaCreacion = date_create_from_format('Y-m-d h:i:s', $model->fecha.' '.$model->hora);

		$now = new DateTime('now');
		$fechaFinal = new DateTime($model->fechaFinal);
		$fechaInicial = new DateTime($model->fechaInicio);

		$total = (isset($fechaFinal)?$fechaFinal->getTimestamp():$now->getTimestamp()) - $fechaCreacion->getTimestamp();
		$intervaloPendiente = $fechaInicial->getTimeStamp() - $fechaCreacion->getTimeStamp();
		$intervaloProceso = $fechaFinal->getTimeStamp() - $fechaInicial->getTimeStamp();
	
		$labelPendiente = ($intervaloPendiente!=''?(
				(intval(date('m', $intervaloPendiente))-1>0)?
				(intval(date('m', $intervaloPendiente))-1)." meses, ":""
		):"").(empty($model->fecha)?'-':date_diff(new DateTime($model->fecha.' '.$model->hora), new DateTime($model->fechaFinal))->format("%d días, %h horas, %i minutos."));
	
		//echo "Tiempo en empezar: ".$labelPendiente;
	?>
	
	<?php
		$labelProceso =($intervaloProceso!=''?(
				(intval(date('m', $intervaloProceso))-1>0)?
				(intval(date('m', $intervaloProceso))-1)." meses, ":""
		):"").(empty($model->fechaInicio)?'-':date_diff(new DateTime($model->fechaInicio), new DateTime($model->fechaFinal))->format("%d días, %h horas, %i minutos."));
		//echo "<br/>Tiempo de proceso: ".$labelProceso;
	?>
</div>



<div>			
	<?php
		Yii::import('application.extensions.Hzl.google.HzlVisualizationChart');
		$porcentajePendiente = $intervaloPendiente*100/$total;
		$porcentajeProceso = $intervaloProceso*100/$total;
	
		$stack3=array(array("Status","Tiempo", array('role'=>'style'),array('role'=>'annotation')),array("Pendiente",$porcentajePendiente, '#F08080', $labelPendiente),array("En proceso",$porcentajeProceso,'#008080', $labelProceso));
		$this->widget('ext.Hzl.google.HzlVisualizationChart', array(
			'visualization' => 'ColumnChart',
			'data'=>$stack3,
			'options' => array(
				'title' => 'Porcentaje de tiempos',
				'width' => 800,
				'height' => 600,
				'colors' => array('#F08080', '#008080'),
				'isStacked'=>'true',
		)));
	?>
</div>
		<br/>
	<h3>Firma de usuario:</h3>
	<?php
	$imgurl= 'protected/firmas/signature'.$model->keySOP.'.png';
	echo file_exists($imgurl)?CHtml::image($imgurl, 'Firma de aceptada'):"El usuario no ha firmado la orden";
	?>	



<br/>

