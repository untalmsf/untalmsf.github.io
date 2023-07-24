<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/estilos.css">
    <title>Formulario de Registro</title>
</head>
<body>
    <div >
        <header>
            <section class= "botonera_principal">
                <ul>
                    <li><a href="paginas/lago.php">Lago escondido</a></li>
                    <li><a href="paginas/palmares.php">Reserva los palmares</a></li>
                    <li><a href="paginas/viñedos.php">Viñedos de mendoza</a></li>
                    <li><a href="paginas/salir.php">salir</a></li>
                </ul>
            </section>
            <div id="marca"></div>
        </header>
        <section id="contenido">
            <?php
            if(isset($_GET['ruta'])){
                if(
                    $_GET['ruta'] == 'registro' ||
                    $_GET['ruta'] == 'ingreso' ||
                    $_GET['ruta'] == 'inicio' ||
                    $_GET['ruta'] == 'salir' 
                ){
                    include  "paginas/" . $_GET["ruta"] .  ".php";
                }else{
                    include "paginas/error404.php";
                    }
            }
             
            ?>
        </section>

    </div>
    
</body>
</html>

