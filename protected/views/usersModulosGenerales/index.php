<?php
/* @var $this UsersModulosGeneralesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Modulos Generales',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('admin')),
);
?>

    <div class="hero-unit">
    <h1>Módulos Generales</h1>
    <p>Catálogo</p>
    
    </div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
