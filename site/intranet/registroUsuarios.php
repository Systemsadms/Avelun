<?php
session_start();
if ($_SESSION['admin'] == 'admin')
{
include ("../../cnx.php");



include ("header.php");
?>




<body>

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
  



  $ssql = "SELECT * FROM usuarios_admin_tienda WHERE correo='$correo'";
    $rs = $conexion->query($ssql);

    if (mysqli_num_rows($rs)>0)
        { 
          

          echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>Este usuario ya fue registrado!!</h4></div>";

      
    }else{

            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El usuario se ha registrado con exito!!</h4></div>";

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