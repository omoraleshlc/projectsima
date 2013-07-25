<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        


    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
    <link href="./css/docs.css" rel="stylesheet">
    <link href="./css/prettify.css" rel="stylesheet">

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-carousel.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
    <script src="./assets/js/bootstrap-affix.js"></script>

    <script src="./assets/js/holder/holder.js"></script>
    <script src="./assets/js/google-code-prettify/prettify.js"></script>

    <script src="./assets/js/application.js"></script>
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<link href="./css/armazon.css" media="screen" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./assets/m4a.js"></script>   
<link href="./css/bootstrap-editable.css" media="screen" rel="stylesheet" type="text/css"></link>


  
      <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet"></link>
    
</head>

<body>

<div class="container" id="page">





  
  

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top" >
      <div class="navbar-inner" >
        <div class="container" >
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html" >
          <img height="20" src="./images/healthcare.jpeg" width="20"></img>
          SIMA  
          </a>
            
            
            
            
            
            <?php if(Yii::app()->user->name!='Guest'){?>
            <div  class="nav-collapse collapse" >
            <ul class="nav pull-right">
                <li id="fat-menu" class="dropdown">
             <a href="#" id="drop3"><img height="20" src="./images/salir.jpeg" width="20"></a>
                </li>
            </ul>
            </div>    
             
             <div  class="nav-collapse collapse" >
            <ul class="nav pull-right">
               
                    
                
                <li id="fat-menu" class="dropdown">
                       
                        
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Usuario: <?php echo Yii::app()->user->name;?><b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mis Permisos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mi Cuenta</a></li>
                    
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
                      </ul>
                    </li>
                    
                    
                  </ul>
              
               
               </ul>
                   
                  
                  
              
          </div>
            <?php }?>
            
          
            
          
        </div>
      </div>
        
        
    </div> 
    
    
    
    
    
    
    
    
          
    <br>
            
                
                  
<?php 
#####variables para exportar


$fecha1=date("Y-m-d");



$users=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$users>entidad;
$usuario=Yii::app()->user->name;
?>        
    
    
    
    






        
        
        <!--
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
        --!>
        
        
        
        
        
        
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Hospital La Carlota.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
