<?php
/* @var $this UsersModulosGeneralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Módulos Generales',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('admin')),
);
?>


    <div class="page-header">
    <h1>Módulos Generales</h1>
    </div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
