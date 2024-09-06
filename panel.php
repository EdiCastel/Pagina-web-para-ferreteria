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

    <title>Menu principal</title>
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

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/2.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/3.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/4.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/5.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/6.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/7.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/8.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/9.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>
        <div class="carousel-item">
            <img src="imagenes/10.jpg" class="d-block w-100" alt="..."style="height: 500px;">
        </div>   
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev" style="height: 500px;">
        <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next" style="height: 500px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<div>
    <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">Productos mas vendidos</h1>
</div>
<div class="tabla2">
    <div class="columna1">
        <form class="tarjeta" action="detalle1.php" method="post">
            <img class="image" src="imagenes/resistol.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>RESISTOL</h1>
                <h5>Resistol 850 Profesional Pegamento Blanco 20 Kg </h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$2,049.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="columna2">
       <form class="tarjeta" action="detalle2.php" method="post">
            <img class="image" src="imagenes/cinta_de_aislar.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>3M</h1>
                <h5>Cintas Aislar 3M Vinil Scotch Súper 33 Industrial 10pzas</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$964.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<div class="tabla2">
    <div class="columna1">
        <form class="tarjeta" action="detalle1.php" method="post">
            <img class="image" src="imagenes/cinta_doble_cara.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>3M</h1>
                <h5>CINTA DOBLE CARA VHB GRIS OSCURO 3M 4611 1.8MM X 33M</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$1,493.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="columna2">
       <form class="tarjeta" action="detalle2.php" method="post">
            <img class="image" src="imagenes/rotomartillo.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>DEWALT</h1>
                <h5>MARTILLO CINCELADOR SDS MAX DEWALT D25832K-B3 1350W</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$14,546.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
        <form class="tarjeta" action="detalle1.php" method="post">
            <img class="image" src="imagenes/cortadora.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>DEWALT</h1>
                <h5>CORTADORA DE METALES DEWALT DW872 DE 14" + DISCO</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$11,339.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="columna2">
       <form class="tarjeta" action="detalle2.php" method="post">
            <img class="image" src="imagenes/estante.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>TAMER</h1>
                <h5>ESTANTE GABINETE HERRAMIENTAS 5 CAJONES TAMER EHT-1 120KG</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$5,699.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
        <form class="tarjeta" action="detalle1.php" method="post">
            <img class="image" src="imagenes/calentador.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>CAL-O-REX</h1>
                <h5>CALENTADOR DE DEPÓSITO CALOREX MAXIMUS G-60 6 SERVICIOS 200L</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$15,999.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="columna2">
       <form class="tarjeta" action="detalle2.php" method="post">
            <img class="image" src="imagenes/regadera.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h1>TEKA</h1>
                <h5>REGADERA MANUAL REDONDA CON DESVIADOR P/ PLATO ANCHO HELVEX RM-14</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$9,299.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>

<div class="linea"></div>
<div class="pie"> 
        <h6>Ferre Shop</h6>
        <h6>Terminos y condiciones</h6>
</div>
</body>
</html>
