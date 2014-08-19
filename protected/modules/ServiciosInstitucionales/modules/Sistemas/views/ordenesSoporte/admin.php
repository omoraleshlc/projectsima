<script>
	function cambio(obj) {
    $( this ).trigger( 'click' );
	}
</script>

<?php
/* @var $this DefaultController */

Yii::app()->clientScript->registerScript('cambio', "
		$('.cambio').hover(function(){
			$(this).trigger('click');
		});
	");

$this->breadcrumbs=array(
	//$this->module->id,
	"Ordenes de soporte",
);


?>
<?php
echo CHtml::beginForm();
      echo CHtml::dropDownList('departamentoSoporte', $this->almacenSoporte,array(''=>'Todos','HMANT' => 'Mantenimiento', 'HSIST' => 'Sistemas'), array('style'=>'width:100%', 'submit'=>"" ));
echo CHtml::endForm();
?>
     
     
<?php
if(Yii::app()->user->checkAccess('SistemaCapturista')) {
$this->widget(
	'bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'htmlOptions'=>array('overflow'=>'hidden', 'class'=>'cambio'),
		'tabs'=>array(
			

			array('label'=>'Pendientes', 'content' => $this->renderPartial('adminListPendientes',
				array('model' => $modelPendientes,),true),'active'=>true, 'linkOptions'=>array('class'=>'cambio'),),//tab 1
			array('label'=>'En proceso', 'content' => $this->renderPartial('adminListEnProceso',
				array('model' => $modelEnProceso,),true), 'linkOptions'=>array('class'=>'cambio'),),//tab 2
			array('label'=>'Terminadas', 'content' => $this->renderPartial('adminListTerminadas',
				array('model' => $modelTeminadas,),true), 'linkOptions'=>array('class'=>'cambio'),),//tab 3
			array('label'=>'Buscar','content' => $this->renderPartial('adminListBuscar',
				array('model' => $model, 'pagination'=>!Yii::app()->user->checkAccess('SistemasOperador'),),true), 'linkOptions'=>array('class'=>'cambio'),),//tab 4
			array('label'=>'Reportes','htmlOptions'=>array('overflow'=>'hidden'), 'content' => $this->renderPartial('reportes',
				array('model' => $modelTeminadas,),true), 'linkOptions'=>array('class'=>'cambio'),),//tab 5
				
				array(
				'label'=>'Crear nueva',
				'content'=>
				$this->renderPartial(
					'_formmin', array(
						'model' => $model,
					),true
				),//render partial
				'linkOptions'=>array('class'=>'cambio'),
			),//tab 6
			/**/
		),//tabs
));
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
