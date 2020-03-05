<?php
require'conexion.php';
session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$q="SELECT COUNT(*) as contar from usuarios where usuario='$usuario' and clave='$clave' ";
$consulta=mysqli_query($conexion,$q);
$array=mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username']=$usuario;
    header("location: ../index.php");

}else{
    //echo"DATOS INCORRECTOS";
    header('Refresh: 1; URL=../login.php');
    //echo '<p class="alert alert-success agileits" role="alert">  </ p>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link id="icon" rel="icon" type="images" href="img/pestanaicon.jpg">
</head>
<body>
<div class="content">
        <div id="separa"></div>
    <form action="" method="" id="form1">
   
      <img src="../img/error.png" alt="no se pudo cargar la imagen" width="400" height="300" id="error">
      <h2 id="msg_error">DATOS INCORRECTOS</h2>
        
    </form>

    </div>
</body>
</html>