<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Impuesto x pagar';
$this->breadcrumbs=array(
	'ivaxPagar',
);
?>
<?php require("menuAdministracion.php");?>

  
<script language="javascript" type="text/javascript">   

function vacio(q) {   
        for ( i = 0; i < q.length; i++ ) {   
                if ( q.charAt(i) != " " ) {   
                        return true   
                }   
        }   
        return false   
}   
  

function valida(F) {   
      
        if( vacio(F.almacen.value) == false ) {   
                alert("Por Favor, escoje el almacen/departamento!")   
                return false   
        } else if( vacio(F.descripcion.value) == false ) {   
                alert("Por Favor, escribe la descripci�n de este almacen!")   
                return false   
        } else if( vacio(F.ctaContable.value) == false ) {   
                alert("Por Favor, escoje la cuenta mayor!")   
                return false   
        }            
}   

</script> 


<script language=javascript> 
function ventanaSecundaria6 (URL){ 
   window.open(URL,"ventana6","width=600,height=300,scrollbars=YES") 
} 
</script> 

<script language=javascript> 
function ventanaSecundaria1 (URL){ 
   window.open(URL,"ventana1","width=600,height=400,scrollbars=YES") 
} 
</script> 
<script language=javascript> 
function ventanaSecundaria5 (URL){ 
   window.open(URL,"ventana5","width=700,height=600,scrollbars=YES") 
} 
</script>
<script language=javascript> 
function ventanaSecundaria51 (URL){ 
   window.open(URL,"ventanaSecundaria51","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundaria511 (URL){ 
   window.open(URL,"ventanaSecundaria511","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA (URL){ 
   window.open(URL,"ventanaSecundariaA","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA2 (URL){ 
   window.open(URL,"ventanaSecundariaA2","width=800,height=600,scrollbars=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundariaA1 (URL){ 
   window.open(URL,"ventanaSecundariaA1","width=800,height=600,scrollbars=YES") 
} 
</script>


<script language=javascript> 
function ventanaSecundaria5111(URL){ 
   window.open(URL,"ventanaSecundaria5111","width=800,height=600,scrollbars=YES") 
} 
</script>






<?php 



if($_POST['fv'] and !$_POST['resumen'] ){
 $random=rand(1,900000000);

$q = "insert into contador 
(
usuario,random)
values
('".$usuario."','".$random."')";
mysql_db_query($basedatos,$q);
echo mysql_error();

$sSQL7ab="SELECT * 
FROM
contador
WHERE
usuario='".$usuario."'
and
random='".$random."'
order by keyConta DESC

";
$result7ab=mysql_db_query($basedatos,$sSQL7ab);
$myrow7ab = mysql_fetch_array($result7ab);	
?>
<script>
//javascript:ventanaSecundaria511('despliegaxFV.php?numeroE=<?php echo $numeroE; ?>&nCuenta=<?php echo $nCuenta; ?>&paciente=<?php echo $_POST['paciente']; ?>&numeroConfirmacion=<?php echo $numeroConfirmacion; ?>&hora1=<?php echo $hora1; ?>&keyClientesInternos=<?php echo $myrow3['keyClientesInternos'];?>&random=<?php echo $myrow7ab['random'];?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>');
//window.alert("Se genero el numero de reporte: <?php print $myrow7ab['random'];?>");

</script>
<?php 
}
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


</head>

<body>
    
    
    
  
    

 <h4 align="center" >Impuesto por Pagar </h4>

<?php /*
$this->widget('zii.widgets.CMenu', array(
    'items'=>array(
       
        array('label'=>'Google','url'=>'http://www.google.com'),
       
    )));*/
?>
    
        
<?php echo CHtml::beginForm(); ?>  

 
        <div class="well" align="center">
        <fieldset>    
    
    <div class="input-append date" id="dp1"  data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input placeholder="Fecha Inicial" data-toggle="tooltip" title="Proporcione la Fecha Inicial" name="fechaInicial" class="span2" type="text" value="<?php echo $_POST['fechaInicial'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    </div>   
        
        
    
    <div class="input-append date" id="dp2" data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input placeholder="Fecha Final" data-toggle="tooltip" title="Proporcione la Fecha Final" name="fechaFinal" class="span2" type="text" value="<?php echo $_POST['fechaFinal'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    
    </div> 
    
            <div class="input btn-small">         
    <button type="submit" name="search" class="btn btn-primary" data-loading-text="Cargando...">Buscar</button>    
            </div>
    
    </fieldset> 
    </div> 
 <?php echo CHtml::endForm(); ?>
 
 
   

    
   
       
 



   
   <?php if(isset($_POST['search'])!=null){  ?>
   
   
   

<!--
<div id="container">
<div >
    
<a href="javascript:ventanaSecundariaA('../ventanas/ivaPxExternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas externos </a><br />
<a href="javascript:ventanaSecundariaA('../ventanas/ivaDetallesExternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles externos </a><a href="javascript:ventanaSecundariaA('../ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&entidad=<?php echo $entidad;?>');"></a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas internos </a>

<div >
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirIvaDetalles.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles internos</a> <br />
<a href="javascript:ventanaSecundariaA('../ventanas/ivaVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Ventas diectas</a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles ventas directas </a>
</div>


<div >
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Abonos aseguradoras</a> <br />
<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles abonos aseguradoras </a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Abonos otros </a><br />

<a href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">Detalles abonos otros </a>
</div>


</div>
</div>


    <button type="button" class="btn btn-small" data-toggle="collapse" data-target="#pxEG">
    Agrupado
    </button>
-->


<?php if($_POST['fechaInicial']!='' and $_POST['fechaFinal']!=''){ ?>
<table class="table table-condensed">
     
    
    
    <th>
<div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Px EXTERNOS <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  
                  <li><a href="#"  data-toggle="collapse" data-target="#pxEG">Agrupado</a></li>
                  <li><a href="#">Detallado</a></li>
                  
                </ul>
              </div><!-- /btn-group -->
     </th>
    
    
     
    
    <th>
         
<div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Px INTERNOS <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  
                  <li><a href="#">Agrupado</a></li>
                  <li><a href="#">Detallado</a></li>
                  
                </ul>
              </div><!-- /btn-group -->         
     </th>  
    
    
     
    
    <th>
    <div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">VENTAS DIRECTAS<span class="caret"></span></button>
                <ul class="dropdown-menu">
                  
                  <li><a href="#">Agrupado</a></li>
                  <li><a href="#">Detallado</a></li>
                  
                </ul>
              </div><!-- /btn-group -->        
     </th>     
     <th><div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">PAGOS ASEGURADORAS<span class="caret"></span></button>
                <ul class="dropdown-menu">
                  
                  <li><a href="#">Agrupado</a></li>
                  <li><a href="#">Detallado</a></li>
                  
                </ul>
              </div><!-- /btn-group -->    </th>     
    
    
    
    
    <th><div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">PAGOS OTROS<span class="caret"></span></button>
                <ul class="dropdown-menu">
                  
                  <li><a href="#">Agrupado</a></li>
                  <li><a href="#">Detallado</a></li>
                  
                </ul>
              </div><!-- /btn-group -->    </th>     
     
     <tr>
        
         
         <!--
         <td>
            
        
             
             
             
         <a data-toggle="tooltip" title="Generar archivo pdf para impresión" href="javascript:ventanaSecundariaA('../ventanas/ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         General
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
         
         
         <td>
         <a data-toggle="tooltip" title="Generar archivo pdf para impresión" href="javascript:ventanaSecundariaA('../ventanas/ivaPxInternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         General
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
         <td>
         <a data-toggle="tooltip" title="Generar archivo pdf para impresión" href="javascript:ventanaSecundariaA('../ventanas/ivaVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         General
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         

         <td>
         <a data-toggle="tooltip" title="Generar archivo pdf para impresión" href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         General
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         

          <td>
         <a data-toggle="tooltip" title="Generar archivo pdf para impresión" href="javascript:ventanaSecundariaA('../ventanas/imprimirAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         General
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
     </tr>
     
     
     
     <tr>
        <td>
         <a data-toggle="tooltip" title="Detalles de Impuesto de Pacientes Externos" href="javascript:ventanaSecundariaA('../ventanas/ivaDetallesExternos.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         Detalles
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
      
         <td>
         <a data-toggle="tooltip" title="Detalles de Impuesto de Pacientes Internos" href="javascript:ventanaSecundariaA('../ventanas/imprimirIvaDetalles.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         Detalles
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
         <td>
         <a data-toggle="tooltip" title="Detalles de Impuesto de Ventas Directas" href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesVentasDirectas.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         Detalles
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
         <td>
         <a data-toggle="tooltip" title="Detalles de Abonos de Aseguradoras" href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosAseguradoras.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         Detalles
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
         <td>
         <a data-toggle="tooltip" title="Detalles de Abonos de Otros" href="javascript:ventanaSecundariaA('../ventanas/imprimirDetallesAbonosOtros.php?fechaInicial=<?php echo $_POST['fechaInicial'];?>&amp;fechaFinal=<?php echo $_POST['fechaFinal'];?>&amp;entidad=<?php echo $entidad;?>');">
         Detalles
             <img src="./images/ipdf.jpg" height="20"  width="20"></img>
         </a>
         </td>
         
     </tr>    
         
     -->
     
</table>


   
    
    <?php //include("/var/www/projectsima/wds/ivaPxExternos.php");<div id="demo" class="collapse out"></div> ?>
   <!--PACIENTES EXTERNOS GENERAL-->
   <div id="pxEG" class="collapse out">
       <table width="570" class="table table-hover">

    <tr>
         <th width="40" ><span class="label label-info">#</span></th>

      <th width="40" ><span class="label label-info">Grupo</span></th>
<th width="40" ><span class="label label-info">Debe</span></th>
<th width="40" ><span class="label label-info">Haber</span></th>
    </tr>
<?php	
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
$cI=null;
$clientes=null;
	  
#####variables para exportar


$fecha1=date("Y-m-d");
$users=Usuarios::model()->findByAttributes(array('usuario'=>Yii::app()->user->name));
$entidad=$users->entidad;
$usuario=Yii::app()->user->name;
$role=$users->role;

$sSQL= "SELECT * FROM cargosCuentaPaciente
WHERE
entidad='".$entidad."'
and
(fechaCierre>='".$_POST['fechaInicial']."' and fechaCierre<='".$_POST['fechaFinal']."')
and
gpoProducto!=''
and
tipoPaciente='externo' 
and
gpoProducto!='HONMED'
and
statusCuenta='cerrada'


and
ventasDirectas!='si'
group by gpoProducto
order by gpoProducto
";


$command4=$connection->createCommand($sSQL);
$dataReader4=$command4->query();
while(($myrow=$dataReader4->read())!==false) {  
$a+=1;
 
/*
$sSQLf= "SELECT *
FROM
clientesInternos 
WHERE 
entidad='".$entidad."'
AND
folioVenta='".$myrow['folioVenta']."'";
*/
//$command4=$connection->createCommand($sSQLf);
//$dataReaderf=$commandf->query();
//$rowf=$dataReaderf->read(); 
//$cI=ClientesInternos::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'folioVenta'=>$myrow['folioVenta']));
/*
if(isset($cI->seguro)){
$cli=Clientes::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'numCliente'=>$cI->seguro));
//$result40=mysql_db_query($basedatos,$sSQL40);
//$myrow40 = mysql_fetch_array($result40);
//print $cli->nomCliente;
}else{
$myrow40['nomCliente']='Particular';
}
*/



	  ?>    
    
    
   <tr  > 
       
             <td height="40"><span ><?php echo $a;
?></span></td>
             
       
       
       

      
      

      
      
      
      
      <td>
    
	  <?php echo $cI->paciente;
//****************************CARGO A LA CAJA*************************
$sSQL1a= "SELECT * FROM gpoProductos
WHERE

codigoGP='".$myrow['gpoProducto']."' 

";
 
$command1a=$connection->createCommand($sSQL1a);
$dataReader1a=$command1a->query();
while(($myrow1a=$dataReader1a->read())!==false) {  
    echo '<br>';
    echo $myrow1a['descripcionGP'];
    
$ccp=  CargosCuentaPaciente::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'gpoProducto'=>$myrow['gpoProducto'],
'fechaCierre'=>$_POST['fechaInicial'], 'fechaCierre'=>$_POST['fechaFinal'] ,'naturaleza'=>'C',
'tipoPaciente'=>'externo','ventasDirectas'=>'si','statusCuenta'=>'cerrada'
    ));

/*********************************************************************************
$sSQLefectivo="SELECT sum(cantidadParticular*cantidad)  as cargosParticular

FROM
cargosCuentaPaciente
WHERE
entidad='".$entidad."'
and
gpoProducto='".$myrow['gpoProducto']."'
and
(fechaCierre>='".$_POST['fechaInicial']."' and fechaCierre<='".$_POST['fechaFinal']."')
and
naturaleza='C'

and

tipoPaciente='externo' 
and
ventasDirectas!='si'
and
statusCuenta='cerrada'
";
$resultefectivo=mysql_db_query($basedatos,$sSQLefectivo);
$myrowefectivo = mysql_fetch_array($resultefectivo);

$sSQLefectivod="SELECT sum(cantidadParticular*cantidad) as devolucionesParticular

FROM
cargosCuentaPaciente
WHERE
entidad='".$entidad."'
and

gpoProducto='".$myrow['gpoProducto']."'
and
(fechaCierre>='".$_POST['fechaInicial']."' and fechaCierre<='".$_POST['fechaFinal']."')
and
naturaleza='A'
and
tipoPaciente='externo' 
and
ventasDirectas!='si'
and
statusCuenta='cerrada'

";
$resultefectivod=mysql_db_query($basedatos,$sSQLefectivod);
$myrowefectivod = mysql_fetch_array($resultefectivod); 


$pagoEfectivo=$myrowefectivo['cargosParticular']-$myrowefectivod['devolucionesParticular'];
$totalEfectivo[0]+=$myrowefectivo['cargosParticular']-$myrowefectivod['devolucionesParticular'];
*/




//**********************************************************

//*************************************************************************
//$pdf->SetX('170');
//$pdf->Cell(0,0,'$'.number_format($pagoEfectivo,2),0,0,M);




}
	  ?>
</td>
        
        
     
        
        
        
      
   
       <td></td>
      
      <td></td>
      
      
        
        
        
        
  
    
    
    <?php  }?>
    
     </tr>
</table>
   </div>


<?php }else{?>
<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Alerta!</h4>
  Favor de seleccionar la fecha inicial y fecha final correctamente!
</div>
   <?php }} ?>
   
   <p align="center">
     <input type="hidden" name="bandera" id="bandera" value="<?php echo $a;?>" />
     
     
     <input type="hidden" name="random" id="random" value="<?php echo $random;?>" />
   </p>
   <p align="center">
<a href="javascript:ventanaSecundaria5111('resumenGlobalCerradas.php?numeroE=<?php echo $numeroE; ?>&nCuenta=<?php echo $nCuenta; ?>&paciente=<?php echo $_POST['paciente']; ?>&numeroConfirmacion=<?php echo $numeroConfirmacion; ?>&hora1=<?php echo $hora1; ?>&keyClientesInternos=<?php echo $myrow3['keyClientesInternos'];?>&random=<?php echo $myrow7ab['random'];?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>')" ></a>   </p>

 
<p align="center">&nbsp;</p>
 </form>  

 
 
 
 
 
 
 
 

<?php /*
<div class="accordion" id="accordion2">
  
    
    <div class="accordion-group">
    
      <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
       Externos
      </a>
    </div>
    
      
      <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        ../ventanas/ivaPxExternos.php
      </div>
    </div>
  </div>
    
    
    
    
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Internos
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        ../ventanas/ivaPxExternos.php
      </div>
    </div>
  </div>
</div>
<?php */?>
 
 
 
 
 
 
 
 
 
 
<script src="./assets/bootstrap-datepicker.js"></script>
	<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'yyyy-mm-dd'
			});
			//$('#dp2').datepicker();
			//$('#dp3').datepicker();
			//$('#dp3').datepicker();
			//$('#dpYears').datepicker();
			//$('#dpMonths').datepicker();
			$('#dp2').datepicker({
				format: 'yyyy-mm-dd'
			});
                        
                        
                        
			
			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			$('#dp4').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() > endDate.valueOf()){
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').datepicker('hide');
				});
			$('#dp5').datepicker()
				.on('changeDate', function(ev){
					if (ev.date.valueOf() < startDate.valueOf()){
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').datepicker('hide');
				});

        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
	</script>
</body>
</html>