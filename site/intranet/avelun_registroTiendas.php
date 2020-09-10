<?php
session_start();
$nombreUsu = $_SESSION["user"];

if ($nombreUsu)
{


include ("../../cnx.php");


$ssql = "SELECT * FROM usuarios_admin_tienda WHERE correo = '$nombreUsu'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$tiendaProv = $row['tienda'];


echo $tiendaProv;

include ("header.php");
?>




<body>

    <?php

include ('avelun_menu.php');











if(isset($_POST['cargar'])){



         $nombre = $_POST['nombre'];
         $gerente = $_POST['gerente'];
         $correo = $_POST['correo'];
         $descripcion = $_POST['descripcion'];
         $direccion = $_POST['direccion'];
         $telefono_1 = $_POST['telefono_1'];
         $telefono_2 = $_POST['telefono_2'];
         $pais = $_POST['pais'];
         $link = $_POST['link'];
         $fecha_registro = date('Y-m-d');
  



  $ssql = "SELECT * FROM tiendas WHERE nombre='$nombre' AND correo='$correo'";
    $rs = $conexion->query($ssql);

    if (mysqli_num_rows($rs)>0)
        { 
          

          echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>Este usuario ya fue registrado!!</h4></div>";

      
    }else{

            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>la Tienda se ha registrado con exito!!</h4></div>";

            $conexion->query("INSERT INTO tiendas VALUES (
                '',
                '$nombre',
                '$gerente',
                '$correo',
                '$telefono_1',
                '$telefono_2',
                '$descripcion',
                '$direccion',
                '$pais',
                '$link',
                '',
                '',
                '$fecha_registro'
                )");

            $conexion->query("INSERT INTO marcas VALUES (
                '',
                '$nombre',
                '$pais',
                '$fecha_registro',
                '$descripcion',
                '0',
                '$nombre'
                )");


          
        }
    }
?>








<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Registro de Tienda</h3>
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
      <input type="text" name='gerente' class="form-control" placeholder="Gerente">
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
      <textarea class="form-control" name='descripcion' placeholder="Descripcion" rows="3"></textarea>
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <textarea class="form-control" name='direccion' placeholder="Direccion" rows="3"></textarea>
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <input type="text" name='telefono_1' class="form-control" placeholder="Telefono 1">
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <input type="text" name='telefono_2' class="form-control" placeholder="Telefono 2">
    </div>
</div>
<br>


<div class="row">
    <div class="col">
      <input type="text" name='pais' class="form-control" placeholder="Pais">
    </div>
</div>
<br>

<div class="row">
    <div class="col">
      <input type="text" name='link' class="form-control" placeholder="Link">
    </div>
</div>
<br>




<br>


    <input type='submit' value='Cargar' name='cargar' class='btn btn-dark'/>
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