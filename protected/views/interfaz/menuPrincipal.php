<?php 
$ip=NULL;

$siteSima=substr($_SERVER['REMOTE_ADDR'],0,3);
$siteFinanciero=substr($_SERVER['REMOTE_ADDR'],0,3);

switch ($siteSima) {
    case "10.":
        $ip="10.2.1.201";

        break;

    

    default:
        $ip="www.sshlc.org"; 
        break;
}


switch ($siteFinanciero) {
    case "10.":
        $ipF="10.2.1.8:8080";

        break;

    default:
        $ipF="www.sshlc.org"; 
        break;
    
    
}

switch ($siteFitnes) {
    case "10.":
        $ipF="www.sshlc.org/gm";

        break;


        default:
        $ipF="www.sshlc.org"; 
        break;
    
}

$siteSima=$ip;
$siteFinanciero=$ipF;

//disable=style="opacity:0.4;filter:alpha(opacity=40);"



/*
<div id="navbar-example" class="navbar navbar-static">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <a class="brand" href="#">Modulos</a>
                  
                  
                  
                  <ul class="nav">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">REPORTES <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mis Permisos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mi Cuenta</a></li>
                    
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  <ul class="nav">
                    <li id="fat-menu" class="dropdown">
                      <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">TRANSACCIONES <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mis Permisos</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mi Cuenta</a></li>
                    
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                  
                  
                  
                  
                  
                  
                </div>
              </div>
            </div> */

?>

  
    <?php
    /*
    echo CHtml::textField('Text', '',
 array('id'=>'test', 
                'name'=>'test',
        'width'=>100, 
        'maxlength'=>100)); */
    $divid=1;
    ?>
    
    

        


<script>
function cambiarBorde(id)
{
document.getElementById(id).style.border="1px #42C0FB solid";
document.getElementById(id).style.background ='#F8FBEF';
}
</script>

<script>
function normal(id)
{
document.getElementById(id).style.border="";
document.getElementById(id).style.background ="";
}
</script>

        



















    
<div class="bs-docs-separator">
            <div class="navbar">
              <div class="navbar-inner">
                
                  <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                    
                  <a class="brand" href="#">Módulos Generales</a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preferencias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="index.php?r=modulosGenerales/catModulos">Modulos</a></li>
                          <li><a href="#">Usuarios</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    
                    
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </div>    
    
    
 

         
          <div class="row-fluid" >
            <ul class="thumbnails">
              <li class="span2">
                <div id="1" class="thumbnail" onmouseover="javascript:cambiarBorde('1');" onmouseout="normal('1');">
                  <img height="80" src="./images/admin.jpg" width="80" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Administración</h5>                    
                    <a href="index.php?r=/administracion" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
              
               <li class="span2">
                <div id="2" class="thumbnail" onmouseover="javascript:cambiarBorde('2');" onmouseout="normal('2');">
                  <img height="80" width="80" src="./images/catalogos.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                   <h5>Catalogos</h5>
                   <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="3" class="thumbnail" onmouseover="javascript:cambiarBorde('3');" onmouseout="normal('3');">
                  <img height="80" width="80" src="./images/configuracion.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Configuracion</h5>
                    
                   <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="4" class="thumbnail" onmouseover="javascript:cambiarBorde('4');" onmouseout="normal('4');">
                  <img height="93" width="93" src="./images/reportes.jpeg"  data-src="holder.js/300x200" alt="">
                  <div class="caption" align="center">
                    <h5>Reportes</h5>
                    
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          

          
<div class="bs-docs-separator">
            <div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                    
                  <a class="brand" href="#">Operaciones</a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preferencias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="www.elnorte.com">Usuarios</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    
                    
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </div>    

         
          <div class="row-fluid">
            <ul class="thumbnails">
              
                
                <li class="span2">
                    
                <div id="5" class="thumbnail" onmouseover="javascript:cambiarBorde('5');" onmouseout="normal('5');">
                  <img height="70" width="70" src="./images/caja.jpg"  data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Caja</h5>                   
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="6" class="thumbnail" onmouseover="javascript:cambiarBorde('6');" onmouseout="normal('6');">
                  <img height="80" width="80" src="./images/facturacion.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Facturación</h5>                    
                   <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="7" class="thumbnail" onmouseover="javascript:cambiarBorde('7');" onmouseout="normal('7');">
                  <img height="90" src="./images/compras.jpeg" width="90" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Compras</h5>
                   <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
              
              
              <li class="span2">
                <div id="8" class="thumbnail" onmouseover="javascript:cambiarBorde('8');" onmouseout="normal('8');">
                  <img height="82" width="82" src="./images/inventory.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                   <h5>Inventarios</h5>
                   <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
              
              
              
              
            </ul>
          </div>          
          
          

         
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span2">
                <div id="9" class="thumbnail" onmouseover="javascript:cambiarBorde('9');" onmouseout="normal('9');">
                  <img height="90" src="./images/cxc.jpeg" width="90" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>CXC</h5>
                  <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="10" class="thumbnail" onmouseover="javascript:cambiarBorde('10');" onmouseout="normal('10');">
                  <img height="48" width="48" src="./images/cxp.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>CXP</h5>
                    <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="11" class="thumbnail" onmouseover="javascript:cambiarBorde('11');" onmouseout="normal('11');">
                  <img height="78" width="78" src="./images/servicios.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Servicios</h5>
                    <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
            </ul>
          </div>   

    




<div class="bs-docs-separator">
            <div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                    
                  <a class="brand" href="#">Pacientes</a>
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preferencias <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="www.elnorte.com">Usuarios</a></li>
                          
                        </ul>
                      </li>
                    </ul>
                    
                    
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </div>    





         
          <div class="row-fluid">
            <ul class="thumbnails">
              
              <li class="span2">
                <div id="12" class="thumbnail" onmouseover="javascript:cambiarBorde('12');" onmouseout="normal('12');">
                  <img height="80" width="80" src="./images/admisiones.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Admisiones</h5>
                    <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
              
              
              
              <li class="span2">
                <div id="13" class="thumbnail" onmouseover="javascript:cambiarBorde('13');" onmouseout="normal('13');">
                  <img height="80" width="80" src="./images/archivo.jpeg"  data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Archivo</h5>
                    <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
              
              
              <li class="span2">
                <div id="14" class="thumbnail" onmouseover="javascript:cambiarBorde('14');" onmouseout="normal('14');">
                  <img height="115" src="./images/cargos.jpeg" width="115" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Cargos</h5>                    
                    <a href="#" class="btn btn-primary">Entrar</a>
                  </div>
                </div>
              </li>
              
              
                <li class="span2">
                <div id="15" class="thumbnail" onmouseover="javascript:cambiarBorde('15');" onmouseout="normal('15');">
                  <img height="95" src="./images/citas.jpeg" width="95" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Citas</h5>                    
                    <a href="#" class="btn btn-primary">Entrar</a> 
                  </div>
                </div>
              </li>
            </ul>
          </div>





       