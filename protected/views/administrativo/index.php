<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrativo',
);
/*
$this->menu=array(
	array('label'=>'Create Article', 'url'=>array('create'), 'visible' => Yii::app()->user->checkAccess('createArticle')),
	array('label'=>'Manage Article', 'url'=>array('admin'), 'visible' => Yii::app()->user->checkAccess('adminArticles')),
);

$appAssetsUrl = Yii::app()->assetManager->publish(Yii::app()->theme->basePath . DIRECTORY_SEPARATOR . 'assets', false, -1, YII_DEBUG);
Yii::app()->clientScript->registerCssFile($appAssetsUrl . "/css/article.css");

 */ ?>
<h1>Módulo Administrativo</h1>






<div class="btn-group">
  <button type="button" id="button" class="btn btn-default">Agregar <span class="glyphicon glyphicon-search"></span></button>
  <button type="button" id="button" class="btn btn-default">Pendientes</button>
  <button type="button" id="button" class="btn btn-default">EnProceso</button>
  <button type="button" id="button" class="btn btn-default">Completadas</button>
  <button type="button" id="button" class="btn btn-default">Reportes</button>
</div>



 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">


<style>
.toggler {
width: 500px;
height: 400px;
}
#button {
padding: .5em 1em;
text-decoration: none;
}
#effect {
position: relative;
width: 840px;
height: 400px;
padding: 0.4em;
}
#effect h3 {
margin: 0;
padding: 0.4em;
text-align: center;
}
</style>
<script>
$(function() {
// run the currently selected effect
function runEffect() {
// get effect type from
var selectedEffect = $( "#effectTypes" ).val();
// most effect types need no options passed by default
var options = {};
// some effects have required parameters
if ( selectedEffect === "scale" ) {
options = { percent: 0 };
} else if ( selectedEffect === "size" ) {
options = { to: { width: 200, height: 60 } };
}
// run the effect
$( "#effect" ).toggle( selectedEffect, options, 500 );
};
// set effect from select menu value
$( "#button" ).click(function() {
runEffect();
return false;
});
});
</script>

<br><br>


<div class="toggler">
<div id="effect" class="ui-widget-content">

<p>
<?php  echo $this->renderPartial('add_order'); ?>
</p>
</div>
</div>











       
