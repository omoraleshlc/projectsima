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

    
    
    <div class="registros">
            <table class="table table-hover" size="100">
              <thead>
                <tr>
                  <th></th>
                    
                </tr>
              </thead>
              <tbody>    
    
<?php ###MOSTRAR PROGRAMAS
$users=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$users->entidad;          
           
$b=0;
$connection=Yii::app()->db;   // assuming you have configured a "db" connection

$sql4="SELECT *
FROM `extensionmodules`
WHERE 
entidad='".$entidad."'
    and
mainmodulename = 'ADMINISTRACION'
AND mainmodule = 'REPORTES'
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
            
    <tr>
        <td>
            <div class="media">
  <a class="pull-left" href="#">
    <img height="20" src="./images/iadmin.jpeg" width="20" class="media-object" data-src="holder.js/64x64">
  </a>
  <div class="media-body">
    <?php print $row4["name"].'   ';?> <a href="<?php print $row4["ruta"];?>"><i class="icon-eye-open"></i></a>
    
 
    <!-- Nested media object -->
    <div class="media">
      <?php echo $row4["keyEM"];?>
    </div>
  </div>
</div>
        </td>            
           
              
              
              
              

                
            
            
            
<?php 
/*
 * <tr>
                  <td width="4"><?php print $b;?></td>
                  <td width="4"><?php print $row4["name"].'  ('.$row4["keyEM"].')';?></td>
                <td width="4"><a href="<?php echo $row4["ruta"];?>"><li><i class="icon-th-list"></i></li></a></td>
 */
}  
?>

                    </tr>
                
                
                
              </tbody>
            </table>
          </div>
              
              
              
              
              
</ul>    
</div>      
        
    
    
    </div>
   
    
        
        
        
        
        
        
        
        
     
        
        
 <div class="tab-pane" id="tab2">
        
  
            
<div class="row-fluid" >  
<ul class="thumbnails">   
    
    
    
    
    
    
    
    
    
    


         
          <div class="registros">
            <table class="table table-striped" size="100">
              <thead>
                <tr>
                  <th></th>
                  <th>NOMBRE DEL MENU</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>    
    
<?php ###MOSTRAR PROGRAMAS
            
           
$b=0;
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
            
    
            
            
              
              
              
              

                <tr>
                  <td width="4"><?php print $b;?></td>  
                  
                  <td width="4"><?php print '<a href="'.strtolower($row4["ruta"]).'">'.$row4["name"].'</a>';?></td>
                <td width="4"><li><i class="icon-th-list"></i></li></td>
            
            
            
<?php         
}  
?>

                    </tr>
                
                
                
              </tbody>
            </table>
          </div>

</ul> 
    
    
    

    
    
    
    
    
    
</div>   
    
     
     