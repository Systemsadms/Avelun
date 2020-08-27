<?php
session_start();
if ($_SESSION['admin'] == 'admin')
{
include ("../../cnx.php");
?>



<html>
    <head>
    <tittle><tittle>
               <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>

    <?php
     include ('menu.php');


     
    if(isset($_POST['cargar'])){



         $nombre = $_POST['nombre'];
         $pais = $_POST['pais'];
         $descripcion = $_POST['descripcion'];
         $fecha = '2010-11-12';
  


        //Conexión Servidor Remoto
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("avelun_bd",$conexion); 
require ('../../cnx.php');


$ssql = "SELECT * FROM marcas WHERE nombre_marca='$nombre'";
    //$rs = mysqli_query($ssql,$conexion);
    $rs = $conexion->query($ssql);

    if (mysqli_num_rows($rs)>0)
        { 
        	

        	echo "Esta Marca ya esta Registrada";

			
		}else{

            echo "La marca se ha registrado con exito";

            $conexion->query("INSERT INTO marcas VALUES (
                '',
                '$nombre',
                '$pais',
                '$fecha',
                '$descripcion',
                '0'
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

    <input type='submit' value='Cargar' name='cargar'/>

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
