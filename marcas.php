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

    <title>Marcas</title>
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
        <h1 style="text-align:center; margin-top:100px;margin-bottom:100px;">CATALOGO DE MARCAS</h1>
    </div>
    <div class="linea"></div>
    <form action="" method="POST">
        <div style="background-color:#120755; width:100%;height:150px; display:flex; align-items:center;justify-content:center;">
            
        </div>
    </form>

<div>
    <h4 style="text-align:left;margin-left:50px; margin-top:10px;margin-bottom:10px;">ESTE ES EL CATALOGO DE MARCAS QUE MANEJAMOS</h4>
    <h4 style="text-align:left;margin-left:50px; margin-bottom:100px;">DA CLICK E INGRESA A LA MARCA QUE TE INTERESA</h4>
</div>

<div class="tabla2">
    <div class="columna1">
        <a href="https://www.ferrepat.com/landing?search=KARCHER&amp;q=|18||&amp;bandera=1">
            <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_KARCHER185x91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_KARCHER185x91.png">
        </a>
    </div>

    <div class="columna2">
        <a href="https://www.ferrepat.com/landing?search=SKIL&amp;q=|24||&amp;bandera=1">
            <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_SKIL_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_SKIL_185X91.png">
        </a> 
    </div>
</div>
<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=HONDA&amp;q=|38||&amp;bandera=1">
        <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_HONDA_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_HONDA_185X91.png">
    </a>       
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=MAKITA&amp;q=|40||&amp;bandera=1">
        <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/5_MAKITA_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/5_MAKITA_185X91.png">
    </a>            
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=PHILLIPS&amp;q=|65||&amp;bandera=1">
        <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/PHILLIPSlogo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/PHILLIPSlogo.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=YALE&amp;q=|66||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_logoyale.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_logoyale.png">
                </a>           
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=BONASA&amp;q=|78||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91BONASA.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91BONASA.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=STIHL&amp;q=|96||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/3_185X91STIHL.png" src="https://cms.grupoferrepat.net/assets/img/marcas/3_185X91STIHL.png">
                </a>           
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=BOSCH&amp;q=|97||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_BOSCH_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_BOSCH_185X91.png">
                </a>
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=HELVEX&amp;q=|98||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/3_Estevez185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/3_Estevez185X91.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=AUSTROMEX&amp;q=|99||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_AUSTROMEX185x91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_AUSTROMEX185x91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=CIPSA&amp;q=|101||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/13_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/13_logo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=BLACK+%26+DECKER&amp;q=|102||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_blackdecker_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_blackdecker_185X91.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TEKA&amp;q=|104||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_TEKALOGOPEQUEO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_TEKALOGOPEQUEO.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=DEWALT&amp;q=|105||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_DEWALT_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_DEWALT_185X91.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=MILWAUKEE&amp;q=|107||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/8_LOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/8_LOGO.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=SIEMENS&amp;q=|110||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/3_Siemens185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/3_Siemens185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=EVANS&amp;q=|115||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91EVANS.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91EVANS.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=DREMEL&amp;q=|116||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/3_DREMEL_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/3_DREMEL_185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=GONI&amp;q=|117||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_Goni185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_Goni185X91.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=BELLOTA&amp;q=|121||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91BELLOTA.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91BELLOTA.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=STANLEY&amp;q=|123||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_STANLEY_185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_STANLEY_185X91.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=CAL-O-REX&amp;q=|125||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_machoteparalogospequeosferrepat.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_machoteparalogospequeosferrepat.png">
                </a>    
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=CUPRUM&amp;q=|132||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_LOGOPEQUEOCUPRUM.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_LOGOPEQUEOCUPRUM.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=TRUPER&amp;q=|137||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_TRUPER185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_TRUPER185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=WELLER&amp;q=|138||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/21_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/21_logo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=BTICINO&amp;q=|144||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_Bticino185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_Bticino185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TRAMONTINA&amp;q=|148||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_TRAMONTINA185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_TRAMONTINA185X91.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=SWISSMEX&amp;q=|149||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/LOGOSWISSMEX.png" src="https://cms.grupoferrepat.net/assets/img/marcas/LOGOSWISSMEX.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TOOLCRAFT&amp;q=|153||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/TOOLCRAFTlogo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/TOOLCRAFTlogo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=VICTORINOX&amp;q=|158||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_Victorinox185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_Victorinox185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=MASTERLOCK&amp;q=|161||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_masterlocklogo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_masterlocklogo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=TECNOCOR&amp;q=|171||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/12_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/12_logo.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=SENTRY+SAFE&amp;q=|192||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_SENTRYSAFE185x91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_SENTRYSAFE185x91.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=HUSQVARNA&amp;q=|200||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91HUSQVARNA.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_185X91HUSQVARNA.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=MAXXI&amp;q=|202||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_MAXXI.png" src="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_MAXXI.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=IUSA&amp;q=|205||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_LOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_LOGO.png">
                </a>    
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=DEACERO&amp;q=|213||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/deacerologo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/deacerologo.png">     
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=ENERGAIN&amp;q=|215||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91ENERGAIN.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91ENERGAIN.png">
                </a>    
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=ESTEVEZ&amp;q=|219||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_Estevez185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_Estevez185X91.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=PENNSYLVANIA&amp;q=|221||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/PENNSYLVANIALOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/PENNSYLVANIALOGO.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TULMEX&amp;q=|238||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/TULMEXLOGOPEQUEO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/TULMEXLOGOPEQUEO.png">
                </a>        
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=RIDGID&amp;q=|241||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_RIDGID185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_RIDGID185X91.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TORILLO&amp;q=|242||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/TORILLOLOGOPEQUEO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/TORILLOLOGOPEQUEO.png">
                </a>      
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=3M&amp;q=|243||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/4_3M185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/4_3M185X91.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=WEG&amp;q=|244||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91WEG.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_185X91WEG.png">
                </a>      
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=RHINO&amp;q=|247||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_RHINO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_RHINO.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=SQUARED&amp;q=|264||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_LOGOSQUARD.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_LOGOSQUARD.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=KOBLENZ&amp;q=|279||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/3_185X91KOBLENZ.png" src="https://cms.grupoferrepat.net/assets/img/marcas/3_185X91KOBLENZ.png">
                </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=SWEISS&amp;q=|280||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/20_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/20_logo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=NACOBRE&amp;q=|289||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/NACOBRELOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/NACOBRELOGO.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=SIKA&amp;q=|296||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/1_SIKA_PEQUEO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/1_SIKA_PEQUEO.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=VALMEX&amp;q=|308||&amp;bandera=1">
        <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_VALMEX.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_VALMEX.png">
    </a>      
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=KAWASHIMA&amp;q=|315||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/KAWASHIMAlogo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/KAWASHIMAlogo.png">
                </a>      
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=MASTERFAN&amp;q=|320||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/6_LOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/6_LOGO.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=KLEIN+TOOLS&amp;q=|325||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_Klein185X91.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_Klein185X91.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=CEMIX&amp;q=|338||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/8_machoteparalogospequeosferrepat.png" src="https://cms.grupoferrepat.net/assets/img/marcas/8_machoteparalogospequeosferrepat.png">
                </a>     
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=SATCO&amp;q=|370||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_SATCO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/LOGO_SATCO.png">
                </a>     
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=FEROX&amp;q=|378||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/LOGOPEQUEOferox.png" src="https://cms.grupoferrepat.net/assets/img/marcas/LOGOPEQUEOferox.png">
                </a>    
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=TECNOLITE&amp;q=|403||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/22_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/22_logo.png">
                </a>       
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=PHILIPS&amp;q=|426||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/philipslogo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/philipslogo.png">
                </a>
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=RESISTOL&amp;q=|474||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/9_LOGO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/9_LOGO.png">
                </a> 
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=CAT&amp;q=|493||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/2_CATLOGOPEQUEO.png" src="https://cms.grupoferrepat.net/assets/img/marcas/2_CATLOGOPEQUEO.png">
                </a>
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=KNOVA&amp;q=|516||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/19_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/19_logo.png">
                </a> 
    </div>
</div>

<div class="tabla2">
    <div class="columna1">
    <a href="https://www.ferrepat.com/landing?search=HOOVER&amp;q=|522||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/16_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/16_logo.png">
                </a>
    </div>

    <div class="columna2">
    <a href="https://www.ferrepat.com/landing?search=MIKELS&amp;q=|559||&amp;bandera=1">
                    <img data-lazy="https://cms.grupoferrepat.net/assets/img/marcas/18_logo.png" src="https://cms.grupoferrepat.net/assets/img/marcas/18_logo.png">
                </a> 
    </div>
</div>


<div class="linea"></div>
<div class="pie"> 
        <h6>Ferre Shop</h6>
        <h6>Terminos y condiciones</h6>
</div>
</body>
</html>