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

include ('menu.php');

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
                    <button type='submit' name='eliminar_marca' class='btn btn-danger'>Eliminar 
                              <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg' style='margin-left: 5px;'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                              </svg>
                              </button>

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
