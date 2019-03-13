<?php
session_start();
$servername = "127.0.0.1";
$database = "registro";
$username = "root";
$password = "";

$CONN = mysqli_connect($servername, $username, $password, $database);

 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellido'];
 $edad = $_POST['edad'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 $correo = $_POST['correo'];
 $cantidad = $_POST['cantidad'];

 $consulta = "INSERT INTO users (nombre, apellidos, edad, direccion, telefono, correo, cantidad) 
 VALUES ('$nombre','$apellidos','$edad','$direccion','$telefono', '$correo', '$cantidad')";

$resultado = mysqli_query($CONN,$consulta);

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$cantidad = $_POST['cantidad'];

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Pago referenciado Tours Chiapas</title>
<link href="pago.css" rel="stylesheet" type="text/css">
</head>
<body background="images/colage2.jpg">
<div class="whitepaper">
	<div class="Header">
	<div class="Logo_empresa">
    	<img src="images/chiapas.png" alt="Logo">
    </div>
    <div class="Logo_paynet">
    	<div>Servicio a pagar</div>
    	<img src="images/banamex.gif" alt="Logo Paynet">
    </div>
    </div>
    <div class="Data">
    	<div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Fecha límite de pago</h3>
            <h4>11 de Diciembre 2018, a las 4:30 AM</h4>
            <h4>Nombre: <?php echo $nombre;?></h4>
            <h4>Apellidos: <?php echo $apellidos;?></h4>
            <h4>Telefono: <?php echo $telefono;?></h4>
            <h4>Correo: <?php echo $correo;?></h4>
            <h4>Cantidad: <?php echo $cantidad;?></h4>
        </div>
        <div class="col2">
        	<h2>Total a pagar</h2>
            <h1>$4,800<span>.00</span><small> MXN</small></h1>
            <span class="note">La comisión por recepción del pago varía de acuerdo a los términos y condiciones que cada cadena comercial establece.</span>
        </div>
    </div>
    <div class="DT-margin"></div>
    <div class="Data">
    	<div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Detalles de la compra</h3>
        </div>
	</div>
    <div class="Table-Data">
    	<div class="table-row color1">
        	<div>Descripción</div>
            <span>Espero esto pueda salvarnos del corte :'v</span>
        </div>
    	<div class="table-row color2">
        	<div>Fecha y hora</div>
            <span>30 de Noviembre de 2018 a las 4:00 A.M.</span>
        </div>
    	
    	<div class="table-row color2"  style="display:none">
        	<div>&nbsp;</div>
            <span>&nbsp;</span>
        </div>
    	<div class="table-row color1" style="display:none">
        	<div>&nbsp;</div>
            <span>&nbsp;</span>
        </div>
    </div>
    <div class="DT-margin"></div>
    <div>
        <div class="Big_Bullet">
        	<span></span>
        </div>
    	<div class="col1">
        	<h3>Como realizar el pago</h3>
            <ol>
            	<li>Acude a cualquier tienda afiliada</li>
                <li>Entrega al cajero el código de barras y menciona que realizarás un pago de servicio Paynet</li>
                <li>Realizar el pago en efectivo por $4,800.00 MXN </li>
                <li>Conserva el ticket para cualquier aclaración</li>
            </ol>
            <small>Dudas o aclaraciones comunícate a Tours Chiapas al teléfono: 055 855 98 98 o al correo: tourschiapas@gmail.com</small>
        </div>
    	<div class="col1">
            <h3>Paga con Google Pay</h3>
            <img src="http://www.codigos-qr.com/qr/php/qr_img.php?d=file%3A%2F%2F%2FC%3A%2Fpruebas%2FVisual%2Fprueba%2FnuevoIndex.html&s=6&e=m" alt="Generador de Códigos QR Codes"/>
            <small>Para cualquier duda sobre como cobrar, por favor llamar al teléfono +52 (55) 5351 7371 en un horario de 8am a 9pm de lunes a domingo</small>
        </div>
    </div>

    <div class="logos-tiendas">

	    <ul>
            <li><img src="images/bancomer.jpg" width="156" height="60"></li>
		    <li><img src="images/santander.png" width="156" height="50"></li>
		   
	    </ul>
       

    </div>
    <div class="Powered">
    	
        <a input type="button" value="Imprimir" onclick="window.print()">Imprimir</a>
    	<a href="#">Seguir comprando</a>
    </div>
</div>
<div style="height: 40px; width: 100%; float left;"></div>

</body>
</html>