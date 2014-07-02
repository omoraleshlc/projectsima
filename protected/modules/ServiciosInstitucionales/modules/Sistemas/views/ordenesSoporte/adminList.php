<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	//$this->module->id,
	"Catálogo de equipos",
);
?>


<?php $this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
			array(
				'label'=>'Crear nueva',
				'content'=>$this->renderPartial(
					'adminListCatTipoSoporte', array(
						'model' => CatTipoSoporte::model(),
					),true
				),//render partial
				'active'=>true
			),//tab 1

			array('label'=>'Pendientes', 'content' => $this->renderPartial('adminListCatTipoEquipo',
				array('model' => CatTipoEquipo::model(),),true),),//tab 2
			array('label'=>'En proceso', 'content' => $this->renderPartial('adminListCatSistemaOperativo',
				array('model' => CatSistemaOperativo::model(),),true),),//tab 3
			array('label'=>'Terminadas', 'content' => $this->renderPartial('adminListCatMarcaMonitor',
				array('model' => CatMarcaMonitor::model(),),true),),//tab 4
			array('label'=>'Reportes', 'content' => $this->renderPartial('adminListCatMarca',
				array('model' => CatMarca::model(),),true),),//tab 5
			/**/
		),//tabs
));?>

