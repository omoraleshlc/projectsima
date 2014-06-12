<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	//$this->module->id,
	"Catalogo de equipos",
);
?>


<?php $this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(

			array('label'=>'Marcas de celular', 'content' => $this->renderPartial('adminListCatMarcaCelular',
				array('model' => CatMarcaCelular::model(),),true),'active'=>true),//tab 1
			array('label'=>'Compañia de telefonos', 'content' => $this->renderPartial('adminListCatCompany',
				array('model' => CatCompany::model(),),true),),//tab 2
			array('label'=>'Planes de celular', 'content' => $this->renderPartial('adminListCatTipoPlanCelular',
				array('model' => CatTipoPlanCelular::model(),),true),),//tab 3
			/**/
		),//tabs
));?>

