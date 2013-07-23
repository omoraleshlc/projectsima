
<?php
/* @var $this SiteController */

//$this->pageTitle=Yii::app()->name;
//echo CHtml::encode(Yii::app()->name);
//$this->render("contact");

//$this->renderPartial('../interfaz/index', array('examtypes'=>$examtypes)); 
//echo $this->renderPartial('/interfaz/login', array('examtypes'=>$examtypes)); 
//echo Yii::app()->user->name;
/* HIGLIGHT
 * <!DOCTYPE html>
<html>
<head>
  <style>
  li { margin: 3px; padding: 3px; background: #EEEEEE; }
  li.hilight { background: yellow; }
  </style>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
  <ul>
    <li><b>Click me!</b></li>
    <li>You can also <b>Click me!</b></li>
  </ul>
<script>
  $( document ).on("click", function( e ) {
    $( e.target ).closest("li").toggleClass("hilight");
  });
</script>
 
</body>
</html>
 */
?>



<?php if(Yii::app()->user->name!=null and Yii::app()->user->name!='Guest'){?>

 
 
<?php 
echo $this->renderPartial('/interfaz/menuPrincipal', array('examtypes'=>$examtypes));
?>      
   



<?php }else{?>
<div class="pager">
 <h4>SOFTWARE HOSPITALARIO MEDICO ADVENTISTA</h4>
 
<p>
    
Haced todas las cosas sin murmuraciones ni discusiones, para que seáis irreprensibles y sencillos,
hijos de Dios sin tacha en medio de una generación torcida y perversa, en medio de la cual resplandecéis como luminares en el mundo,
sosteniendo firmemente la palabra de vida,
a fin de que yo tenga motivo para gloriarme en el día de Cristo, ya que no habré corrido en vano ni habré trabajado en vano.      
Filipenses 2:14-16.
<br>


    <a href="index.php?r=site/login" class="btn btn-primary btn-primary">
      Accesar al sistema
    </a>
<!-- Button to trigger modal 




<a href="#myModal" role="button" class="btn" data-toggle="modal">Accesar al sistema</a>
 
<!-- Modal 
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <?php 
//echo $this->render('/site/login', array('examtypes'=>$examtypes));
?>  
      
      
      
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
-->



</p>
</div>
</div>
<?php }?>


