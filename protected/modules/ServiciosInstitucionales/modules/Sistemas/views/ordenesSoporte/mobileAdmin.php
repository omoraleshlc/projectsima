<style>
body{
	margin: 0 auto;
	text-align: center;
}
</style>
<?php


$this->breadcrumbs=array(
	'Ordenes Soportes'=>array('admin'),
	'Activar orden',
);
?>
<br/><br/>




<input type="file" accept="image/*" capture="camera">

















<br/><br/>
<?php
	foreach(Yii::app()->user->getFlashes() as $key => $message) {
		echo '<div class="alert alert-warning" role="alert">' . $message . '</div>';
	}
?>
<br/>
<?php
echo CHtml::beginForm();
echo CHtml::textField('codigo', '',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:90%; zoom:2','pattern'=> '0[0-9]{2}-[A-Za-z][0-9]{2}([A-Fa-f|0-9]){4}', 'placeholder'=>'Codigo'
		)); ?>
<br/>
<?php echo CHtml::textField('id', '',
			array('size'=>12,'maxlength'=>12, 'style'=>'width:90%; zoom:2','pattern'=> '[0-9]{1,4}', 'placeholder'=>'Id'
		)); ?>
<br/>
<br/>

<?php
	echo CHTML::button('Aceptar',  array('submit' => $this->createUrl("OrdenesSoporte/activarOrden"), 'style'=>'zoom:2',));
	
	echo CHtml::endForm(); 
?>

