<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	//$this->module->id,
	"Catálogo de equipo",
);
?>


<?php $this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
			

			array('label'=>'Tipos de equipo', 'content' => $this->renderPartial('adminListCatTipoEquipo',
				array('model' => CatTipoEquipo::model(),),true),'active'=>true),//tab 2
			array('label'=>'Sistemas operativos', 'content' => $this->renderPartial('adminListCatSistemaOperativo',
				array('model' => CatSistemaOperativo::model(),),true),),//tab 2
			array('label'=>'Marcas de monitor', 'content' => $this->renderPartial('adminListCatMarcaMonitor',
				array('model' => CatMarcaMonitor::model(),),true),),//tab 2
			array('label'=>'Marcas', 'content' => $this->renderPartial('adminListCatMarca',
				array('model' => CatMarca::model(),),true),),//tab 2
			array('label'=>'Tipos de procesador', 'content' => $this->renderPartial('adminListCatTipoProcesador',
				array('model' => CatTipoProcesador::model(),),true),),//tab 2
			array('label'=>'Software', 'content' => $this->renderPartial('adminListCatSoftware',
				array('model' => CatSoftware::model(),),true),),//tab 2
			/**/
		),//tabs
));?>

