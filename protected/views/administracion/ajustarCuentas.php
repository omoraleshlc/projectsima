<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Ajustar Cuentas';
$this->breadcrumbs=array(
	'ajustarCuentas',
);
?>
<?php require("menuAdministracion.php");?>






   




              
  


        
        
   




    <form method="post" action="#">
    
    <div class="well">
        <fieldset>    
    <p>Fecha Inicial</p>
    <div class="input-append date" id="dp1"  data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input name="fechaInicial" class="span2" type="text" value="<?php echo $_POST['fechaInicial'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    </div>   
        
        
    <p>Fecha Final</p>
    <div class="input-append date" id="dp2" data-date="<?php echo date("Y-m-d");?>" data-date-format="yyyy-mm-dd">
    <input name="fechaFinal" class="span2" type="text" value="<?php echo $_POST['fechaFinal'];?>">
    <span class="add-on"><i class="icon-th"></i></span>
    </div> 
    
    <div class="input">
    <button type="submit" class="btn">Buscar</button>
    </div>
    </fieldset> 
    </div>  
        
    
    
    
    </form>













<table width="570" class="table table-hover">

    <tr>
         <th width="40" >#</th>

      <th width="40" >Folio</th>
      <th width="100" >Datos del Paciente</th>
      <th width="100" >Aseguradora</th>
      <th width="50" >Actual</th>
      <th width="50" >Historial</th>
    </tr>
<?php	
$connection=Yii::app()->db;   // assuming you have configured a "db" connection
$cI=null;
$clientes=null;
	  

$sSQL= "SELECT *
FROM
historialCuentas 
WHERE 
entidad='".$entidad."'
and
(fechaCargo>='".$_POST['fechaInicial']."' and fechaCargo<='".$_POST['fechaFinal']."')
group by folioVenta
ORDER BY folioVenta ASC";

$command4=$connection->createCommand($sSQL);
$dataReader4=$command4->query();
while(($myrow=$dataReader4->read())!==false) {  
$a+=1;
 

$sSQLf= "SELECT *
FROM
clientesInternos 
WHERE 
entidad='".$entidad."'
AND
folioVenta='".$myrow['folioVenta']."'";

//$command4=$connection->createCommand($sSQLf);
//$dataReaderf=$commandf->query();
//$rowf=$dataReaderf->read(); 
$cI=ClientesInternos::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'folioVenta'=>$myrow['folioVenta']));

if(isset($cI->seguro)){
$cli=Clientes::model()->findByAttributes(array('entidad'=>$myrow['entidad'],'numCliente'=>$cI->seguro));
//$result40=mysql_db_query($basedatos,$sSQL40);
//$myrow40 = mysql_fetch_array($result40);
//print $cli->nomCliente;
}else{
$myrow40['nomCliente']='Particular';
}
	  ?>    
    
    
   <tr  > 
       
             <td height="40"><span ><?php echo $a;
?></span></td>
             
       
       
       
      <td height="40"><span ><?php echo $myrow['folioVenta'];
?></span></td>
      
      

      
      
      
      
      <td>
    
	  <?php echo $cI->paciente;

	  ?>

        <br /><span >Departamento: 
      <?php
$al=$myrow['almacen'];
		   $sSQL17= "
	SELECT 
descripcion
FROM
almacenes
WHERE 
entidad='".$entidad."'
and
almacen = '".$al."'
";
//$result17=mysql_db_query($basedatos,$sSQL17);
//$myrow17 = mysql_fetch_array($result17);
 echo $myrow17['descripcion'];
?></td>
        
        
     
        
        
        
      <td ><?php echo $cli->nomCliente;?><br />
	<span >  Cuarto: 
	  <?php 
	  if($myrow['cuarto']){
	  echo $myrow['cuarto'];
	  }else{
	  echo '---';
	  }
?></span></td>    
   

      
      
      
      
      
        <td>
            <a href="#abonos<?php echo $a;?>" name="abonos<?php echo $a;?>" id="abonos<?php echo $a;?>" 
onclick="javascript:ventanaSecundaria11('../ventanas/verDetallesHistorial.php?numeroE=<?php echo $myrow['numeroE']; ?>&amp;nCuenta=<?php echo $myrow['nCuenta']; ?>&amp;almacen=<?php echo $ALMACEN; ?>&amp;almacenFuente=<?php echo $ALMACEN; ?>&amp;nT=<?php echo $myrow['keyClientesInternos']; ?>&amp;tipoCliente=<?php echo $tipoCliente;?>&amp;tipoMovimiento=<?php echo 'cierreCuenta';?>&amp;tipoPaciente=interno&amp;folioVenta=<?php echo $myrow['folioVenta'];?>&numSolicitud=<?php echo $myrow['numSolicitud'];?>')">
	  Ver
          </a>    
        </td>       
        
        
        
        
 <td >
         
<a href="#abonos<?php echo $a;?>" name="abonos<?php echo $a;?>" id="abonos<?php echo $a;?>" 
onclick="javascript:ventanaSecundaria11('../ventanas/verHistorialPaginado.php?paciente=<?php echo $myrowf['paciente'];?>&numeroE=<?php echo $myrow['numeroE']; ?>&amp;nCuenta=<?php echo $myrow['nCuenta']; ?>&amp;almacen=<?php echo $ALMACEN; ?>&amp;almacenFuente=<?php echo $ALMACEN; ?>&amp;nT=<?php echo $myrow['keyClientesInternos']; ?>&amp;tipoCliente=<?php echo $tipoCliente;?>&amp;tipoMovimiento=<?php echo 'cierreCuenta';?>&amp;tipoPaciente=interno&amp;folioVenta=<?php echo $myrow['folioVenta'];?>&numSolicitud=<?php echo $myrow['numSolicitud'];?>')">
Ver
</a>    
         
    </td>    
    
    
    <?php  }?>
    
     </tr>
</table>





































  
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
