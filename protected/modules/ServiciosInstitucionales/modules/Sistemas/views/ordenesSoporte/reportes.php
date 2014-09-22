Filtrar reportes por fecha y departamento
<form id="ordenes-soporte-form" action="/projectsima/index.php?r=ServiciosInstitucionales/Sistemas/ordenesSoporte/admin" method="post">
		<?php 
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		 	$this->widget('CJuiDateTimePicker',array(
				'model'=>ordenesSoporte::model(), //Model object
				'attribute'=>'fecha', //attribute name
				'mode'=>'date', //use "time","date" or "datetime" (default)
				'options'=>array('timeFormat'=>'hh:mm:ss',
        			'dateFormat' => 'yy-mm-dd') // jquery plugin options
			));
		?>

a		
				<?php 
			Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		 	$this->widget('CJuiDateTimePicker',array(
				'model'=>ordenesSoporte::model(), //Model object
				'attribute'=>'fechaFinal', //attribute name
				'mode'=>'date', //use "time","date" or "datetime" (default)
				'options'=>array('timeFormat'=>'hh:mm',
        			'dateFormat' => 'yy-mm-dd') // jquery plugin options
			));
			?>
			
			<?php 
			
				echo CHtml::dropDownList('departamentoSoporteReportes', $this->almacenSoporte,array(''=>'Todos','HMANT' => 'Mantenimiento', 'HSIST' => 'Sistemas'), array('style'=>'width:30%' ));
			?>

				<?php 
			echo CHtml::submitButton('Generar reporte', array('style'=>'margin-bottom: 10px;'));
		?>
		</form>
<br/>



<?php
		$urlappendage="";
	if (isset($_POST['OrdenesSoporte'])){
		$orden=$_POST['OrdenesSoporte'];
		
		$fechas= "";
		$labelFecha="";
		if(isset($orden['fecha']) and isset($orden['fechaFinal']) and $orden['fecha']!="" and $orden['fechaFinal']!=""){
			$fechas =  ' and fecha between "'.$orden['fecha'].'" and "'.$orden['fechaFinal'].'"';
			$labelFecha="de ".$orden['fecha'].' a '.$orden['fechaFinal'];
			$urlappendage=$urlappendage."&fecha=".$orden['fecha'].'&fechafinal='.$orden['fechaFinal'];
		}
		
		$depto="'%%'";
		if(isset($_POST['departamentoSoporteReportes'])){
			$depto="'".$_POST['departamentoSoporteReportes']."'";
			$labelFecha=$labelFecha." de ".($_POST['departamentoSoporteReportes']=="HSIST"?"sistemas":($_POST['departamentoSoporteReportes']=="HMANT"?"mantenimiento":"todos"));
			$urlappendage=$urlappendage.'&depto='.$_POST['departamentoSoporteReportes'];
		}
		
		$duplicateData=Yii::app()->db->createCommand(
		'Select almacen, COUNT(*) as num from  sima.sis_ordenesSOP where almacenSoporte like '.$depto.' '.$fechas.' group by almacen order by num'
		)->queryAll();
	}
	else if(isset($_GET['OrdenesSoporte'])){
		$fechas= "";
		$labelFecha="";
		if(isset($_GET['fecha']) and isset($_GET['fechafinal'])){
			$fechas =  ' and fecha between "'.$_GET['fecha'].'" and "'.$_GET['fechafinal'].'"';
			$labelFecha="de ".$_GET['fecha'].' a '.$_GET['fechafinal'];
			$urlappendage=$urlappendage."&fecha=".$_GET['fecha'].'&fechafinal='.$_GET['fechafinal'];
		}
		
		$depto="'%%'";
		if(isset($_GET['depto'])){
			$depto="'".$_GET['depto']."'";
			$labelFecha=$labelFecha." de ".($_GET['depto']=="HSIST"?"sistemas":($_GET['depto']=="HMANT"?"mantenimiento":"todos"));
			$urlappendage=$urlappendage.'&depto='.$_GET['depto'];
		}
		
		$duplicateData=Yii::app()->db->createCommand(
		'Select almacen, COUNT(*) as num from  sima.sis_ordenesSOP where almacenSoporte like '.$depto.' '.$fechas.' group by almacen order by num'
		)->queryAll();
	}
	else{
		$duplicateData=Yii::app()->db->createCommand('
			 Select almacen, COUNT(*) as num from  sima.sis_ordenesSOP group by almacen order by num
		')->queryAll();
		
		$labelFecha='de todos los tiempos de todos los departamentos de soporte.';
	}
?>

<?php
	$this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Imprimir ordenes',
    'url'=>'index.php?r=ServiciosInstitucionales/Sistemas/OrdenesSoporte/listadoParaImprimir'.$urlappendage,
)); ?>
<br/>
<h3>Reporte <?php echo $labelFecha;?></h3>



<?php
	if(!empty($duplicateData)){
	Yii::import('application.extensions.Hzl.google.HzlVisualizationChart');
	
	



	$stack = array(array("", "Almacen"));	
		foreach($duplicateData as $arrrr){
			array_push($stack, array($arrrr['almacen'], intval($arrrr['num'])));
	  }
  
	$this->widget('ext.Hzl.google.HzlVisualizationChart', array(
		'visualization' => 'BarChart',
		'data'=>$stack,
		'options' => array(
			'title' => 'Incidencias por departamento',
			'width' => 800,
			'height' => 600,
	)));
	}
	else
	echo "No hay registros disponibles";
?>

