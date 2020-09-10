<?php
session_start();
$nombreUsu = $_SESSION["user"];

if ($nombreUsu)
{

include ("../../cnx.php");
include ("header.php");




?>

    <body>

<?php

include ('avelun_menu.php');


     
if(isset($_POST['cargar'])){

        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $descripcion = $_POST['descripcion'];
        $tienda_asociada = 'Avelun';
        $fecha = '2010-11-12';
        $ssql = "SELECT * FROM marcas WHERE nombre_marca='$nombre' AND tienda_asociada = '$tienda_asociada'";
        $rs = $conexion->query($ssql);

        if (mysqli_num_rows($rs)>0)
              { 
              	
              	echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>Esta marca ya esta registrada!!</h4></div>";
      	}else{

                echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>La marca se ha registrado con exito!!</h4></div>";
                $conexion->query("INSERT INTO marcas VALUES (
                      '',
                      '$nombre',
                      '$pais',
                      '$fecha',
                      '$descripcion',
                      '0',
                      '$tienda_asociada'
                      )");
          
          }
}



?>
<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Cargar Marca</h3>
<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">


   <form method='post' action='#'>
<div class="row">
    <div class="col">
      <input type="text" name='nombre' class="form-control" placeholder="Nombre de la Marca">
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
      <textarea class="form-control" id="descripcion" name='descripcion' placeholder="Descripcion" rows="3"></textarea>
    </div>
</div>
<br>

    <input type='submit' value='Cargar' name='cargar' class='btn btn-dark'/>

  </div>
</form>
    
</div> 
</div>



<?php     
}
else
{     
session_destroy();    
header("location:login.php");  
}
?>




    </body>
</html>
