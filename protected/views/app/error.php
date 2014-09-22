<?php
	$erroractual = $error['code'];
?>


<h1>Error  <?= $erroractual ?></h1>

<?php
	if($erroractual=="404"){
?>
	<p>
    La página a la que intentas acceder no existe o no funciona temporalmente. Intenta alguna de las siguientes opciones:
    </p>
    <ul>
		<li><a href="#" onclick="history.go(-2);">Regresar a la página anterior</a></li>
		<li><a href="<?php echo $this->createUrl('site/index'); ?>">Ir a la página principal</a></li>
		<li><a href="<?php echo $this->createUrl('cruge/ui/login'); ?>">Ingresar de nuevo al sistema</a></li>
    </ul>
	<br/>
    <p><strong>Mensaje:</strong> <?= $error['message']; ?></p>
<?php
	}
	else if($erroractual=="401"){
?>
	<p>
    No tienes permiso de acceso a esta página. <strong><a href="<?php echo $this->createUrl('cruge/ui/login', array('param'=>$_SERVER['REQUEST_URI'])); ?>">Ingresa al sistema</a></strong> o intenta alguna de las siguientes opciones:
    </p>
    <ul>
		<li><a href="#" onclick="history.go(-2);">Regresar a la página anterior</a></li>
		<li><a href="<?php echo $this->createUrl('site/index'); ?>">Ir a la página principal</a></li>
    </ul>
    <br/>
    <p><strong>Mensaje:</strong> <?= $error['message']; ?></p>
<?php
	}
	else{
?>
<div class="errorSummary">
    <p>
    Ocurrió un error <?= $error['code']; ?> durante tu petición.
    </p>

    <p><strong>Mensaje:</strong> <?= $error['message']; ?></p>
</div>

<?php
	}
?>
