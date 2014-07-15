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
			array('label'=>'Buscar','content' => $this->renderPartial('adminListBuscar',
				array('model' => $model, 'pagination'=>!Yii::app()->user->checkAccess('SistemasOperador'),),true),),//tab 5
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
?> 



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar observaciones</h4>
      </div>
      <div class="modal-body">
      	<iframe style="width:100%; height:0px"
      	src="" id="idorden">
			</iframe>
      </div>
    </div>
  </div>
</div>





<br/>
<?php
}
else{
$this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'htmlOptions'=>array('overflow'=>'hidden'),
		'tabs'=>array(
				array(
				'label'=>'Crear nueva',
				'content'=>
				$this->renderPartial(
					'_formmin', array(
						'model' => $model,
					),true
				),//render partial
			'active'=>true),//tab 2

			array('label'=>'Buscar','content' => $this->renderPartial('adminListBuscar',
				array('model' => $model, 'pagination'=>Yii::app()->user->checkAccess('SistemaCapturista'),),true),),//tab 1
				
		),//tabs
));









/*	$this->renderPartial(
					'_formmin', array(
						'model' => $model,
					));*/
}
?>

