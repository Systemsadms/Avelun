<?php
session_start();
if ($_SESSION['admin'] == 'admin')
{
include ("../../cnx.php");
?>



<!DOCTYPE html>
<html>
<head>
    <title>Avelun</title>
    <meta charset="UTF-8">
  <meta name=”description” content="Avelun es el mejor sitio para mujeres, encontrar una tienda online, consultorias medicas, farmacologicas, mentorias, ayudas profesionales y mas" />
  <meta name="keywords" content="tienda, ropa, calzado, joyeria, zapatos, moda, salud, medicina"/>
  <meta name="author" content="Systems Admins C.A" />
  <meta name="copyright" content="Systems Admins C.A" />
  <meta name="robots" content="index, follow">
  <meta name="google" content="nositelinkssearchbox">

<link rel="icon" type="image/png" href="img/lun.png">
<link href="../css/estilos.css"  rel="stylesheet" type="text/css">
<link href="../css/mediaStyle.css"  rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




<script type="text/javascript" src="script/scripts.js"></script>


</head>

<body style="margin: 0px;">

    <?php

include ('menu.php');











if(isset($_POST['cargar'])){



         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $correo = $_POST['correo'];
         $password = $_POST['password'];
         $telefono = $_POST['telefono'];
         $direccion = $_POST['direccion'];
         $fecha_registro = date('Y-m-d');
  


        //Conexión Servidor Remoto
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("avelun_bd",$conexion); 
require ('../../cnx.php');

  $ssql = "SELECT * FROM usuarios_admin_tienda WHERE correo='$correo'";
    //$rs = mysqli_query($ssql,$conexion);
    $rs = $conexion->query($ssql);

    if (mysqli_num_rows($rs)>0)
        { 
          

          echo "Este Usuario ya fue regristrado";

      
    }else{

            echo "El usuario se ha registrado con exito";

            $conexion->query("INSERT INTO usuarios_admin_tienda VALUES (
                '',
                '$nombre',
                '$apellido',
                '$correo',
                '$password',
                '$direccion',
                '$telefono',
                '$fecha_registro'
                )");


          
        }
    }
?>








<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Registro de Usuario</h3>
<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">


   <form method='post' action='#'>
<div class="row">
    <div class="col">
      <input type="text" name='nombre' class="form-control" placeholder="Nombre">
    </div>
</div>

<br>
<div class="row">
    <div class="col">
      <input type="text" name='apellido' class="form-control" placeholder="Apellido">
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <input type="text" name='correo' class="form-control" placeholder="Correo">
    </div>
</div>
<br>


<div class="row">
    <div class="col">
      <input type="text" name='password' class="form-control" placeholder="Contraseña">
    </div>
</div>
<br>


<div class="row">
    <div class="col">
      <input type="text" name='telefono' class="form-control" placeholder="Telefono">
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <textarea class="form-control" id="direccion" name='direccion' placeholder="Direccion" rows="3"></textarea>
    </div>
</div>
<br>


    <input type='submit' value='Cargar' name='cargar'/>
<br><br><br>
  </div>
</form>
    
</div> 
</div>






<?php     
}
else
{     
session_destroy();    
header("location:index.php");  
}
?>






</body>
</html>