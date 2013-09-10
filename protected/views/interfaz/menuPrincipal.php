<?php 
$ip=NULL;
/*
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
$entidad=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$entidad->entidad;
?>
    
    

        


<script>
function cambiarBorde(id)
{
document.getElementById(id).style.border="1px #42C0FB solid";
document.getElementById(id).style.background ='';
}
</script>

<script>
function normal(id)
{
document.getElementById(id).style.border="";
document.getElementById(id).style.background ="";
}
</script>

        





<?php 
/*
$watermark_options  = array(
                        'watermark'     => './images/logoCarlota.jpg',
                        'halign'        => Watermarker::ALIGN_RIGHT,
                        'valign'        => Watermarker::ALIGN_BOTTOM,
                        'hshift'        => -10,
                        'vshift'        => -10,
                        'type'          => IMAGETYPE_JPEG,          // Save result in JPEG to minimize file size
                        'jpeg-quality'  => 90,
                );
                // Save watermarked image to file
                Watermarker::output($finalImageName, $finalImageName, $watermark_options);
 * 
 */


/*
 Catalogo de modulos generales: <a href="index.php?r=usersModulosGenerales">
 */
?>







<div class="barra_separadora">
     
     <span >Módulos Generales</span>
     
</div>


   
<br>
















         
          <div class="row-fluid" >
            <ul class="thumbnails">
              
                
                
                <a href="index.php?r=/administracion">  
              <li class="span2">
                <div id="1" class="thumbnail" onmouseover="javascript:cambiarBorde('1');" onmouseout="normal('1');">
                  <img height="80" src="./images/iadmin.jpeg" width="80" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Administración</h5>                    
                    
                  </div>
                </div>
              </li>
                </a>
              
               <li class="span2">
                <div id="2" class="thumbnail" onmouseover="javascript:cambiarBorde('2');" onmouseout="normal('2');">
                  <img height="80" width="80" src="./images/icatalogos.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                   <h5>Catalogos</h5>
                   
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="3" class="thumbnail" onmouseover="javascript:cambiarBorde('3');" onmouseout="normal('3');">
                  <img height="80" width="80" src="./images/iconfiguracion.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Configuracion</h5>
                    
                  
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="4" class="thumbnail" onmouseover="javascript:cambiarBorde('4');" onmouseout="normal('4');">
                  <img height="80" width="80" src="./images/ireportes.jpeg"  data-src="holder.js/300x200" alt="">
                  <div class="caption" align="center">
                    <h5>Reportes</h5>
                    
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          

          







<div class="barra_separadora">
     
     <span >Operaciones</span>
     
</div>

<br>
  







         
          <div class="row-fluid">
            <ul class="thumbnails">
              
                
                <li class="span2">
                    
                <div id="5" class="thumbnail" onmouseover="javascript:cambiarBorde('5');" onmouseout="normal('5');">
                  <img height="80" width="80" src="./images/icaja.jpeg"  data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Caja</h5>                   
                    
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="6" class="thumbnail" onmouseover="javascript:cambiarBorde('6');" onmouseout="normal('6');">
                  <img height="80" width="80" src="./images/ifacturacion.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Facturación</h5>                    
                 
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="7" class="thumbnail" onmouseover="javascript:cambiarBorde('7');" onmouseout="normal('7');">
                  <img height="80" src="./images/icompras.jpeg" width="80" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Compras</h5>
              
                  </div>
                </div>
              </li>
              
              
              <li class="span2">
                <div id="8" class="thumbnail" onmouseover="javascript:cambiarBorde('8');" onmouseout="normal('8');">
                  <img height="95" width="95" src="./images/iinventarios.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                   <h5>Inventarios</h5>
              
                  </div>
                </div>
              </li>
              
              
              
              
            </ul>
          </div>          
          
          

         
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span2">
                <div id="9" class="thumbnail" onmouseover="javascript:cambiarBorde('9');" onmouseout="normal('9');">
                  <img height="90" src="./images/icxc.jpeg" width="90" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>CXC</h5>
         
                  </div>
                </div>
              </li>
              <li class="span2">
                <div id="10" class="thumbnail" onmouseover="javascript:cambiarBorde('10');" onmouseout="normal('10');">
                  <img height="90" width="90" src="./images/icxp.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>CXP</h5>
     
                  </div>
                </div>
              </li>
              
              <li class="span2">
                <div id="11" class="thumbnail" onmouseover="javascript:cambiarBorde('11');" onmouseout="normal('11');">
                  <img height="90" width="90" src="./images/iservicios.jpeg" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Servicios</h5>
          
                  </div>
                </div>
              </li>
              
            </ul>
          </div>   

    




<div class="barra_separadora">
     
     <span >Pacientes</span>
     
</div>
<br>





         
          <div class="row-fluid">
            <ul class="thumbnails">
              
              <li class="span2">
                <div id="12" class="thumbnail" onmouseover="javascript:cambiarBorde('12');" onmouseout="normal('12');">
                  <img height="120" width="120" src="./images/iadmisiones.jpeg" data-src="holder.js/160x120" alt="">
                  
                  <div class="caption" align="center">
                    <h5>Admisiones</h5>
              
                  </div>
                </div>
              </li>
              
              
              
              
              <li class="span2">
                <div id="13" class="thumbnail" onmouseover="javascript:cambiarBorde('13');" onmouseout="normal('13');">
                  <img height="80" width="80" src="./images/iarchivo.jpeg"  data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Archivo</h5>
     
                  </div>
                </div>
              </li>
              
              
              <li class="span2">
                <div id="14" class="thumbnail" onmouseover="javascript:cambiarBorde('14');" onmouseout="normal('14');">
                  <img height="80" src="./images/icargos.jpeg" width="80" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Cargos</h5>                    
               
                  </div>
                </div>
              </li>
              
              
                <li class="span2">
                <div id="15" class="thumbnail" onmouseover="javascript:cambiarBorde('15');" onmouseout="normal('15');">
                  <img height="80" src="./images/icitas.jpeg" width="80" data-src="holder.js/160x120" alt="">
                  <div class="caption" align="center">
                    <h5>Citas</h5>                    
      
                  </div>
                </div>
              </li>
            </ul>
          </div>





       