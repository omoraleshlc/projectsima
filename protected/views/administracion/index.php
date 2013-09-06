<?php
/* @var $this AdministracionController */

$this->breadcrumbs=array(
	'Administracion',
);
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




<div class="barra_separadora">
     
     <span >Módulo de Administración Hospitalaria</span>
     
</div>


   
<br>

    


<div class="tabbable"> <!-- Only required for left/right tabs -->
    
    <ul class="nav nav-tabs">
    <li class="active">
        <a href="#tab1" data-toggle="tab">
            Reportes
        </a>
    </li>
    
    <li>
        <a href="#tab2" data-toggle="tab">
            Transacciones
        </a>
    </li>
    </ul>
        
        
        
        
    <div class="tab-content">
    <div class="tab-pane active" id="tab1">
    
 
<div class="row-fluid" >  
<ul class="thumbnails">    
<?php ###MOSTRAR PROGRAMAS
$entidad='01';            
$b=null;           

$connection=Yii::app()->db;   // assuming you have configured a "db" connection
$entidad='01';
$sql4="SELECT *
FROM `extensionmodules`
WHERE 
entidad='".$entidad."'
    and
mainmodulename = 'ADMINISTRACION'
AND mainmodule = 'REPORTES'
ORDER BY name ASC
limit 0,5
";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command4=$connection->createCommand($sql4);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader4=$command4->query();
// calling read() repeatedly until it returns false


while(($row4=$dataReader4->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
   $b+=1;
       /* 
                  print '<td>'.$b.'</td>';
                  print '<td>'.strtolower($row4["name"]).'</td>';
                  print '<td><div align="top"><button class="btn btn-mini btn-primary" type="button">Entrar</button></div></td>';
                  */
       
?>
            

<li class="span2">
    <a href="index.php?r=/administracion/<?php echo basename($row4["ruta"], '.php');?>" >
                <div id="<?php print '<td>'.$b.'</td>';?>" class="thumbnail" onmouseover="javascript:cambiarBorde('<?php print '<td>'.$b.'</td>';?>');" onmouseout="normal('<?php print '<td>'.$b.'</td>';?>');">
                  <img height="40" src="./images/iadmin.jpeg" width="40" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <p><?php print '<td>'.strtolower($row4["name"]).'</td>';?></p>                    
                    
                  </div>
                </div>
        </a> 
              </li>    
   
            
  
            
            
<?php         
}  
?>
              
              
              
              
              
              
</ul>    
</div>      
        
    
    
    </div>
   
    
        
        
        
        
        
        
        
        
     
        
        
 <div class="tab-pane" id="tab2">
        
  
            
<div class="row-fluid" >  
<ul class="thumbnails">    
<?php ###MOSTRAR PROGRAMAS
            
           

//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
//$entidad='01';
$sql4="SELECT *
FROM `extensionmodules`
WHERE 
entidad='".$entidad."'
    and
mainmodulename = 'ADMINISTRACION'
AND mainmodule = 'TRANSACCIONES'
ORDER BY name ASC
";            
//$connection=Yii::app()->db;   // assuming you have configured a "db" connection
// If not, you may explicitly create a connection:
// $connection=new CDbConnection($dsn,$username,$password);
$command4=$connection->createCommand($sql4);
// if needed, the SQL statement may be updated as follows:
// $command->text=$newSQL;                
$dataReader4=$command4->query();
// calling read() repeatedly until it returns false


while(($row4=$dataReader4->read())!==false) {  
    //$items=array($row["name"]);
    //$ruta=array($row["ruta"]);
   $b+=1;
       /* 
                  print '<td>'.$b.'</td>';
                  print '<td>'.strtolower($row4["name"]).'</td>';
                  print '<td><div align="top"><button class="btn btn-mini btn-primary" type="button">Entrar</button></div></td>';
                  */
       
?>
            

<li class="span2">
                <div id="<?php print '<td>'.$b.'</td>';?>" class="thumbnail" onmouseover="javascript:cambiarBorde('<?php print '<td>'.$b.'</td>';?>');" onmouseout="normal('<?php print '<td>'.$b.'</td>';?>');">
                  <img height="90" src="./images/iadmin.jpeg" width="90" data-src="holder.js/64x64" alt="">
                  <div class="caption" align="center">
                    <p><?php print '<td>'.strtolower($row4["name"]).'</td>';?></p>                    
                    
                  </div>
                </div>
              </li>    
            
            
  
            
            
<?php         
}  
?>
</ul> 
    
    
    
    
    
    
    
    
</div>   
    
     
     
     
     
   <link rel="stylesheet" type="text/css" href="./css/demo.css" />
        <link rel="stylesheet" type="text/css" href="./css/style1.css" />
   
                
			<section>
				<ul class="lb-album">
					<li>
						<a href="#image-1">
							<img src="images/thumbs/1.jpg" alt="image01">
							<span>Pointe</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="images/full/1.jpg" alt="image01" />
							<div>
								<h3>pointe <span>/point/</h3>
								<p>Dance performed on the tips of the toes</p>
							</div>
							
						</div>
					</li>
                                        
                                        
					
					
					<li>
						<a href="#image-4">
							<img src="images/thumbs/4.jpg" alt="image04">
							<span>Adagio</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/full/4.jpg" alt="image04" />
							<div>							
								<h3>a·da·gio <span>/əˈdäjō/</h3>
								<p>A movement or composition marked to be played adagio</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/thumbs/5.jpg" alt="image05">
							<span>Frappé</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/full/5.jpg" alt="image05" />
							<div>							
								<h3>frap·pé<span>/fraˈpā/</h3>
								<p>Involving a beating action of the toe of one foot against the ankle of the supporting leg</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/thumbs/6.jpg" alt="image06">
							<span>Glissade</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/full/6.jpg" alt="image06" />
							<div>							
								<h3>glis·sade <span>/gliˈsäd/</h3>
								<p>One leg is brushed outward from the body, which then takes the weight while the second leg is brushed in to meet it</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/thumbs/7.jpg" alt="image07">
							<span>Jeté</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/full/7.jpg" alt="image07" />
							<div>							
								<h3>je·té <span>/zhə-ˈtā/</h3>
								<p>A springing jump made from one foot to the other in any direction</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/thumbs/8.jpg" alt="image08">
							<span>Piqué</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/full/8.jpg" alt="image08" />
							<div>							
								<h3>pi·qué <span>/pēˈkā/</h3>
								<p>Strongly pointed toe of the lifted and extended leg sharply lowers to hit the floor then immediately rebounds upward</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-9">
							<img src="images/thumbs/9.jpg" alt="image09">
							<span>Arabesque</span>
						</a>
						<div class="lb-overlay" id="image-9">
							<img src="images/full/9.jpg" alt="image09" />
							<div>							
								<h3>ar·a·besque <span>/ˌarəˈbesk/</h3>
								<p>Position of the body supported on one leg, with the other leg extended behind the body with the knee straight</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-10">
							<img src="images/thumbs/10.jpg" alt="image10">
							<span>Ballerina</span>
						</a>
						<div class="lb-overlay" id="image-10">
							<img src="images/full/10.jpg" alt="image10" />
							<div>							
								<h3>bal·le·ri·na <span>/ˌbaləˈrēnə/</h3>
								<p>A female ballet dancer</p>
							</div>
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
				</ul>
			</section>
        </div>   
     

    </div>
    </div>
    </div>
    














    