<?php

    session_start();
    $usuario=$_SESSION['username'];

    if(!isset($usuario)){
        header("location: login.php");
    }else{
        //echo"<h1>BIENVENIDO $usuario</h1>";

         //echo"<a href='logica/salir.php'> SALIR </a>";
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Parallax</title>
    <link rel="stylesheet" href="css/estilos2.css" type="text/css" media="all" />
    <link id="icon" rel="icon" type="images" href="images/pestanaicon.jpg">
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
     crossorigin="anonymous"-->
</head>

<body>

    <header>
        <nav>
           
            <ul id="menu">
            <li><a href="#"> <?php          
                                if(!isset($usuario)){
                                    header("location: login.php");
                                }   else{
                                        echo"<h1>Usuario: $usuario</h1>";       
                                    }
                            ?></a></li>
                <li><a href="#">Inicio</a></li>               
                <li><a href="#">Opcion 1</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="logica/salir.php">Salir</a></li>
            </ul>
        </nav>
    </header>

    
    <div id="contenido wrapper">
        
        <section id="bloque1" class="contenido wrapper"  >
            <!--img id="img1"class="img"src="images/f5.jpg" alt="imagen no carga">
            <a href="paisajes.html"><img id="img2"class="img2"src="images/f4.jpg" alt="imagen no carga"></a-->
            
            <!--div id="centro">
            </div-->
        </section>
        <section id="bloque2" class="contenido wrapper">

            <h2></h2>
        </section>
     
      
       
    </div>

    <footer>
        <div class="card text-white bg-primary">
            <h3>PIE DE PAGINA</h3>
        </div>
    </footer>
</body>

</html>