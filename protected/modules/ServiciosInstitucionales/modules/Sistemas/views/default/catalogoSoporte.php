<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	//$this->module->id,
	"Catalogo de soporte",
);
?>


<?php $this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(

			array(
				'label'=>'Tipos de soporte',
				'content'=>$this->renderPartial(
					'adminListCatTipoSoporte', array(
						'model' => CatTipoSoporte::model(),
					),true
				),'active'=>true,//render partial
			'linkOptions'=>array('class'=>'cambio'),),//tab 1
			/**/
		),//tabs
));?>

