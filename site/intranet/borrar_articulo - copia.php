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

        
require ('../../cnx.php');









if(isset($_POST['eliminar_articulo'])){
       

$id_articulo = $_POST['id_articulo'];


$consultaDelete = "DELETE FROM productos WHERE id='$id_articulo'";
$hacerconsulta3 = $conexion->query($consultaDelete);












     }















    $consulta_mysql='select * from marcas where id>"0"';
    $resultado_consulta_mysql= $conexion->query($consulta_mysql);

    if(isset($_POST['btn_marca'])){
       $marca = $_POST['marca'];
      
         
$ssql = "SELECT * FROM marcas WHERE nombre_marca='$marca'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);

             

$consulta = "SELECT * FROM productos WHERE marca='$marca' ";


                          
              
              $hacerconsulta2 = $conexion->query($consulta);
                            
              echo "<div style='background-color:none; text-align: center; padding-bottom: 10px; margin-top: 10px;'>";
              
              
              
              $reg = mysqli_fetch_array($hacerconsulta2);

              while ($reg)
              {
                            
              echo "
              
              <div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>




              <form method='post' action='#'>



                <div> <input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='".$reg[8]."' /></div>




                <input type='hidden'  value='".$reg[1]."' />

                <div style='color:#007bff;  border:none; background-color:none; height:40px;'>".$reg[1]."</div>



                <div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div> 



                <input type='hidden' name='modelo' value='".$reg[3]."'/>


                <input type='hidden' name='marca' value='".$marca."'/>  


                <input type='hidden' name='id_articulo' value='".$reg[0]."'/>



                <input type='submit' value='Eliminar' name='eliminar_articulo'/>

                </form>         
              </div>
              
              ";
              

              $reg = mysqli_fetch_array($hacerconsulta2);
              
              }
              echo "</div>";
              mysqli_close($conexion);



?>

<div style="width: 100%; text-align: center; margin-bottom: 80px; margin-top: 50px;">
<a href="borrar_articulo.php" style="display: inline-block;"><input type='submit' value='regresar' name='regresar'/></a>
</div>
<?php
 
    }else{
    ?>











<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Eliminar Articulo</h3>



<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">


              <form method="post" action="#">
                <label>Marca del Articulo:</label>
    
                <?php
                  echo "<select class='form-control' name='marca' style='height:40px; margin-bottom:15px;'>";
                ?>
                  <!--<option>Seleccionar..</option>-->
                <?php                     
                  while($fila=mysqli_fetch_array($resultado_consulta_mysql))
                  {                       
                      echo "<option>".$fila['nombre_marca']."</option>";
                  }
                echo "</select>";
                ?>
                <br>

                 <input type='submit' value='Seleccionar' name='btn_marca'/>

              </form>
</div>
</div>
        <?php       
          }
        ?>



















































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