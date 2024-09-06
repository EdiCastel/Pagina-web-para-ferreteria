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

    <title>Contacto</title>
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
    <div class="navy-line" style="align:center;"></div>
		<h1 style="text-align:center; margin-top:100px;margin-bottom:100px;"> Contacto </h1>
	<div>
    <div class="linea"></div>
    <form action="" method="POST">
        <div style="background-color:#120755; width:100%;height:150px; display:flex; align-items:center;justify-content:center;">
        </div>
    </form>
                <div>

                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/javyjaja">
                                <i class="fab fa-facebook-square fa-3x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/javyjaja"><i class="fab fa-twitter-square  fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/115137109272773243666/posts/p/pub"><i class="fab fa-google-plus-square fa-3x"></i></a>
                        </li>
                         <li>
                            <a href="javierhr_0321@hotmail.com"><i class="fab fa-skype fa-3x"></i></a>
                        </li>
                         <li>
                            <a href="https://www.linkedin.com/pub/javier-hernandez-rangel/1b/71b/186"><i class="fab fa-linkedin fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    
                </div>
            </div>
	<div class="tabla2">
		<div class="columna1">
			
				<h5>Direción ferreteria</h5>
				<h5>CALLE 3 SUR NO.313, COL. CENTRO, C.P. 75700, TEHUACÁN, PUE. MÉXICO</h5>
				<h4>(238) 38 3 2272</h4>
				<img src="imagenes/map.jpg" width="400px">
			
		</div>
		<div class="columna2">
				<h5>Direción servicio</h5>
				<h5>CALLE 3 SUR NO.313, COL. CENTRO, C.P. 75700, TEHUACÁN, PUE. MÉXICO</h5>
				<h4>(238) 38 23561  (238) 38 23238</h4>
				<img src="imagenes/map.jpg" width="400px">
        </div>
    </div>
		<div style="text-align:center;padding-left: 200px; padding-right: 200px;">
        <section id="sendMsg">
        <form role="form" >
            <br style="clear:both">
            <div class="alert alert-success" style="display:none" id="email-success" role="alert">
                <span>Se ha enviado tu mensaje, en breve nos pondremos en contacto con usted.</span>
            </div>
            <div class="alert alert-danger" style="display:none" id="email-failed" role="alert">
                <span>Ocurrió un error, vuelve a intentarlo.</span>
            </div>
            <div class="alert alert-warning" style="display:none" id="email-alert" role="alert">
                <span>Debes llenar todos los campos.</span>
            </div>
            <h3 onclick="subir();" style="margin-bottom: 25px; text-align: center;">Mandar Mensaje</h3>
            <div class="form-group">
                <input type="text" class="form-control" id="txtName" name="name" placeholder="Nombre*" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="txtEmail" name="email" placeholder="E-mail*" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="txtMobile" name="mobile" placeholder="Teléfono*" required="">
            </div>
            <!--<div class="form-group">
                <input type="text" class="form-control" id="txtMensaje" name="subject" placeholder="Mensaje" required>
            </div>-->
            <div class="form-group">
                <textarea class="form-control" type="textarea" id="txtMensaje" placeholder="Mensaje*" maxlength="140" rows="7"></textarea>
            </div>
            <button type="button" onclick="sendMail();" id="submit" name="submit" class="btn btn-primary pull-right">Enviar</button>
        </form>
        </section>
    </div>
</div><br><br>

<div class="linea"></div>
<div class="pie"> 
        <h6>Ferre Shop</h6>
        <h6>Terminos y condiciones</h6>
</div>
</body>
</html>


 