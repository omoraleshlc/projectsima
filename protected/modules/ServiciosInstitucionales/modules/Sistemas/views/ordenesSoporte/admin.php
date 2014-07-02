<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	//$this->module->id,
	"Ordenes de soporte",
);
?>


<?php
if(Yii::app()->user->checkAccess('SistemaCapturista')) {
$this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'htmlOptions'=>array('overflow'=>'hidden'),
		'tabs'=>array(
			

			array('label'=>'Pendientes', 'content' => $this->renderPartial('adminListPendientes',
				array('model' => $modelPendientes,),true),'active'=>true),//tab 2
			array('label'=>'En proceso', 'content' => $this->renderPartial('adminListEnProceso',
				array('model' => $modelEnProceso,),true),),//tab 3
			array('label'=>'Terminadas', 'content' => $this->renderPartial('adminListTerminadas',
				array('model' => $modelTeminadas,),true),),//tab 4
			array('label'=>'Reportes','htmlOptions'=>array('overflow'=>'hidden'), 'content' => $this->renderPartial('reportes',
				array('model' => $modelTeminadas,),true),),//tab 5
				
				array(
				'label'=>'Crear nueva',
				'content'=>
				$this->renderPartial(
					'_formmin', array(
						'model' => $model,
					),true
				),//render partial
			),//tab 1
			/**/
		),//tabs
));

}
else{
?> 
<br/>
<?php
	$this->renderPartial(
					'_formmin', array(
						'model' => $model,
					));
}
?>

