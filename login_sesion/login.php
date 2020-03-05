<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN CON SESION</title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link id="icon" rel="icon" type="images" href="img/pestanaicon.jpg">
</head>
<body>

    <!--center>
    <form action="logica/logear.php" method="POST">

    <input type="text" name="usuario" placeholder="usuario">
    <br><br>
    <input type="password"name="clave" placeholder="password">
    <br><br>
    <button type="submit">INGRESAR</button>
    
    </form>
    </center-->

    <div class="content">
        <div id="separa"></div>
    <form action="logica/logear.php" method="POST" id="form">
   
        <div  >
  
              <input type="text" class="form-control" name="usuario" placeholder="usuario" >
      
        </div>
        <br>
        <div class="form-group">
  
            <input type="password" class="form-control"   name="clave" placeholder="password" >
        </div>
        <br>
        <button type="submit" class="form-control" id="btn">INGRESAR</button>
    </form>

    </div>
   

</body>
</html>