
<?php
	Yii::import('application.extensions.Hzl.google.HzlVisualizationChart');
  
	$duplicateData=Yii::app()->db->createCommand('
		 Select almacen, COUNT(*) as num from  sima.sis_ordenesSOP group by almacen order by num
	')->queryAll();


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
?>
