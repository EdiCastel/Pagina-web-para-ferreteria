<?php
session_start();
require 'conexion_db.php';

	// verifico si el usuario tiene creada la sesion previamente, si el email esta en la variable de sesion.
	if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

		$email = $_SESSION['email'];
		
		// Traigo los datos del email correspondiente, por ej. nombre de usuario, apellido, nombre ,etc
		$get_datos_usuario = mysqli_query($db_connection, "SELECT * FROM `usuarios` WHERE email = '$email'");
		$datosUsuario =  mysqli_fetch_assoc($get_datos_usuario);

	}else{
		//si no esta es porque no pasó por el formulario de login, asi que afuera
		header('Location: salir.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=StyleSheet href="estilos/estilos.css" type="text/css" media=screen>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <title>Detalles</title>
</head>
<body>
<nav class="navB">
        <div class="header">
            <img src="imagenes/logo1.png">
            <h2>Ferre Shop</h2>
        </div>
        <div class="seccion">
            <a style="text-decoration:none" href="index.php">INICIO</a>
            <a style="text-decoration:none" href="categorias.php">CATEGORIAS</a>
            <a style="text-decoration:none" href="marcas.php">MARCAS</a>
            <a style="text-decoration:none" href="contacto.php">CONTACTO</a>
            <a style="text-decoration:none" href="salir.php">SALIR</a>
        </div>
    </nav>
    <div class="linea"></div>
    <div>
        <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">DETALLES DE PRODUCTO</h1>
    </div>
    <div style="background-color:#F24E1E; height:100px; display:flex; align-items:center;">
        
    </div>
    <div style="background-color:#120755;">
    <div style="width:100%;display:flex;flex-direction:row;">
        <div style="width:50%;height:100%;display:flex;">
            <img style="width:100%;height:500px;margin-left:20px;margin-top:40px;border:solid;border-color:black;border-width:20px;" src="imagenes/cinta_de_aislar.jpg"/>
        </div>
        <div style="width:50%;height:500px;display:flex;background-color:#120755;flex-direction:column; color:white;align-items:center;margin-top: 40px;">
            <form style="margin-top:20px;"action="#" method="post">
                <h1></h1><br>
                <h5>3M</h5><br>
                <h5>CINTAS DE AISLAR 3M VINIL SCOTCH SÚPER 33 INDUSTRIAL 10PZAS</h5>
                <h6>CÓDIGO PROVEEDOR: 18554654</h6><br>
                <h5>DE: $1,050.00 MXN</h5>
                <h5>A: $964.00 MXN IVA INCLUIDO</h5><br><br>                  
                <input type="submit"value="COMPRAR" style="width: 100%;height:50px;font-family:'Italiana',serif;font-size: 30px;background-color: #F24E1E;border-style:none;border-radius: 30px;color: white;"><br><br>
                <h6>FORMAS DE PAGO ACEPTADAS:</h6>
                <img src="imagenes/pago.svg">  
            </form>
        </div>
    </div><br>
    </div>
    
    
    </div>
    <div class="linea"></div>
<footer class="pie"> 
    <h6>Ferre Shop</h6>
    <h6>Terminos y condiciones</h6>
</footer>
</body>
</html>