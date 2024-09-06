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

    <title>Categorias</title>
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
    <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">CATEGORIAS</h1>
</div>
<div class="linea"></div>
    <form action="" method="POST">
        <div style="background-color:#120755; width:100%;height:150px; display:flex; align-items:center;justify-content:center;">
            <input style="width:80%;display:flex;align-items:center;margin:10px;padding:10px;border:none;border-radius:30px;"type="search" name="search" id="search">
            <input style="background-color:#F24E1E;color:white;margin:10px;padding:10px;border:none;border-radius:30px;width:10%;" id="buscar" name="buscar" type="submit" value="Buscar">
        </div>
    </form>


<h1 style="text-align:center; text-align:left; padding-left:100px; padding-top:50px;">Fijación y sujeción</h1>
<div class="row" style="padding-left:100px;">
    <div class="col-md-3" >
        <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/resistol.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>RESISTOL</h3>
                <h5>Resistol 850 Profesional Pegamento Blanco 20 Kg </h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$2,049.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;"src="imagenes/cinta_de_aislar.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>3M</h3>
                <h5>Cintas Aislar 3M Vinil Scotch Súper 33 Industrial 10pzas</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$964.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/cinta_doble_cara.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>3M</h3>
                <h5>CINTA DOBLE CARA VHB GRIS OSCURO 3M 4611 1.8MM X 33M</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$1,493.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/silicon.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>PENNSYLVANIA</h3>
                <h5>SILICON PENNSYLVANIA DURETAN SALCHICHA GRIS 600 ML 20PZAS</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$3,607.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<h6 style="text-align:right;padding-right:80px">Ver mas ></h6>
<h1 style="text-align:center; text-align:left; padding-left:100px">Herramientas electricas</h1>
<div class="row" style="padding-left:100px;">
    <div class="col-md-3" >
        <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/martillo_demoledor.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>MILWAUKEE</h3>
                <h5>MARTILLO DEMOLEDOR INALÁMBRICO MX FUEL MILWAUKEE MXF368-1XC</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$102,069.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;"src="imagenes/cortadora.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>DEWALT</h3>
                <h5>CORTADORA DE METALES DEWALT DW872 DE 14" + DISCO</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$11,339.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/canteadora.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>KNOVA</h3>
                <h5>CANTEADORA PARA MADERA DE PISO KNOVA CM-11B 6 PULG (153 MM)</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$16,334.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>
 
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/rotomartillo.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>DEWALT</h3>
                <h5>MARTILLO CINCELADOR SDS MAX DEWALT D25832K-B3 1350W</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$14,546.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<h6 style="text-align:right;padding-right:80px">Ver mas ></h6>
<h1 style="text-align:center; text-align:left; padding-left:100px">Herramientas manuales</h1>
<div class="row" style="padding-left:100px;">
    <div class="col-md-3" >
        <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/cortadora_azulejo.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>RUBI</h3>
                <h5>CORTADORA DE AZULEJO MANUAL RUBI 26961 HIT 1200 N</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$13,454.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;"src="imagenes/caja_herramientas.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>MILWAUKEE</h3>
                <h5>COMBO PACKOUT MILWAUKEE CAJAS PARA HERRAMIENTAS 3 PZAS</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$7,681.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/dados_impacto.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>CRAFTSMAN</h3>
                <h5>AUTOCLE 48 DADOS DE IMPACTO CRAFTSMAN CMMT16548</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$6,827.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/estante.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>TAMER</h3>
                <h5>ESTANTE GABINETE HERRAMIENTAS 5 CAJONES TAMER EHT-1 120KG</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$5,699.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<h6 style="text-align:right;padding-right:80px">Ver mas ></h6>

<h1 style="text-align:center; text-align:left; padding-left:100px">Baños y plomeria</h1>
<div class="row" style="padding-left:100px;">
    <div class="col-md-3" >
        <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/calentador.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>CAL-O-REX</h3>
                <h5>CALENTADOR DE DEPÓSITO CALOREX MAXIMUS G-60 6 SERVICIOS 200L</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$15,999.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;"src="imagenes/regadera.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>TEKA</h3>
                <h5>REGADERA DE TELÉFONO CUADRADA SOLLER TEKA 85.278.02.00</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$9,299.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/mingitorio.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>HELVEX</h3>
                <h5>MINGITORIO HELVEX FERRY CASCADA ECOLÓGICO 0,5L</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$6,803.00 MXN </h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/llave.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>URREA</h3>
                <h5>MEZCLADORA PARA LAVABO URREA 9290AN.9 ACERO INOX</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$6,150.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<h6 style="text-align:right;padding-right:80px">Ver mas ></h6>


<h1 style="text-align:center; text-align:left; padding-left:100px">Material electrico</h1>
<div class="row" style="padding-left:100px;">
    <div class="col-md-3" >
        <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/lampara.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>TECNOLITE</h3>
                <h5>LÁMPARA SOLAR LED LINEAL 6 W TECNOLITE NEREIDA SENSOR DE MOV</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$2,129.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;"src="imagenes/reflector.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>TECNOLITE</h3>
                <h5>REFLECTOR INDUSTRIAL DE LED SOLAR TECNOLITE KOKAB 40W</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$16,999.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/cable.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>IUSA</h3>
                <h5>CABLE THW NEGRO #8 DE 500 MTS 90°C IUSA</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$15,256.00 MXN</h6>
                </div>
            </div>
        </form>        
    </div>

    <div class="col-md-3">
    <form style="display: flex;justify-content:center;background-color: #F24E1E;flex-direction: column;width:80%;margin-top: 20px; margin-bottom: 20px;align-items: center;" action="detalle1.php" method="post">
            <img style="width: 80%;height: 200px;margin-top: 50px;margin-bottom: 50px;" src="imagenes/carrete_cable.jpg">
            <input class="etiqueta" name="perfil" type="submit" value="Añadir">
            <div class="desc">
                <h3>IUSA</h3>
                <h5>CABLE THW-LS 10 AWG IUSA 301159 ROJO 500M ANTIFLAMA</h5>
                <div class="parrafo1">
                    <h6>Precio:</h6>
                    <h6>$9,999.00 MXN</h6>
                </div>
            </div>
        </form>             
    </div>
</div>
<h6 style="text-align:right;padding-right:80px">Ver mas ></h6><br><br>


<div class="linea"></div>
<div class="pie"> 
        <h6>Ferre Shop</h6>
        <h6>Terminos y condiciones</h6>
</div>
</body>
</html>
