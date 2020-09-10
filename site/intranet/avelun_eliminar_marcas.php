<?php
session_start();
$nombreUsu = $_SESSION["user"];

if ($nombreUsu)
{


include ("../../cnx.php");
include ("header.php");

$ssql = "SELECT * FROM usuarios_admin_tienda WHERE correo = '$nombreUsu'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$tiendaProv = $row['tienda'];

  
?>


<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("¿Realmente desea eliminar? Se ELIMINARAN todos los productos de esta marca!!"))
    {
        return true;
    }
    return false;
}
//-->
</script>



    <body>

<?php

include ('avelun_menu.php');

if(isset($_POST['eliminar_marca'])){
            $marca = $_POST['marca'];
            $tiendaProv = $_POST['tiendaProv'];

            if ($marca == $tiendaProv) {
              
              echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>ERROR - No puede eliminar la marca princial!!</h4></div>";

            }else{



            $ssql = "DELETE FROM marcas WHERE nombre_marca = '$marca' AND tienda_asociada='$tiendaProv'";
            $result = $conexion->query($ssql);

        
            $consulta = "SELECT * FROM productos WHERE marca = '$marca' AND Tienda='$tiendaProv'";            
            $hacerconsulta = $conexion->query($consulta);           
            $reg = mysqli_fetch_array($hacerconsulta);
            $directorio = 'fotos_principales/';

                            while ($reg){
                              unlink($directorio.$reg[8]); 
                              $reg = mysqli_fetch_array($hacerconsulta);
                            }

                         

            $consulta2 = "SELECT * FROM productos WHERE marca = '$marca' AND Tienda='$tiendaProv'";            
            $hacerconsulta2 = $conexion->query($consulta2);           
            $reg2 = mysqli_fetch_array($hacerconsulta2);
            $directorio2 = 'img_productos/';

                            while ($reg2){
                                $img = explode(",", $reg2[13]);
                                $contador = count($img);
                                $posicion = 0;

                                        while ($posicion < $contador){

                                            unlink($directorio2.$img[$posicion]); 

                                            $posicion++;
                                        }

                              $reg2 = mysqli_fetch_array($hacerconsulta2);
                            }


            $ssql = "DELETE FROM productos WHERE marca = '$marca' AND Tienda='$tiendaProv'";
            $result = $conexion->query($ssql);


            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Se elimino la marca con EXITO!!</h4></div>";
            
            }



}


$consulta_mysql="SELECT * FROM marcas WHERE tienda_asociada='$tiendaProv'";
$resultado_consulta_mysql= $conexion->query($consulta_mysql);





?>
<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Eliminar Marca</h3>

    <div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">

      <div style="width: 150px; height: auto; background-color: none; margin: 50px auto; text-align: center;">

      <form method="post" action="#" onsubmit='return confirmation()' id='act' name='act'>

                    <label>Selecciona la Marca:</label>

                    <?php
                    echo "<select class='form-control' name='marca' style='height:40px; margin-bottom:0px;'>";
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
                    <input type="hidden" name="tiendaProv" value='<?php echo $tiendaProv?>'>
                    <input type="submit" name="eliminar_marca">

                    </form>

    </div>

        
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
