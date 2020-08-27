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




        $consulta_mysql='select * from marcas where id>"0"';
        $resultado_consulta_mysql= $conexion->query($consulta_mysql);

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
<br><br>





<?php

  







if(isset($_POST['eliminar_articulo'])){

$borrar_img = $_POST['borrar_img'];

unlink($borrar_img); 
       

$id_articulo = $_POST['id_articulo'];


$consultaDelete = "DELETE FROM productos WHERE id='$id_articulo'";
$hacerconsulta3 = $conexion->query($consultaDelete);

echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Articulo se ha eliminado con exito!!</h4></div>";


     }





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
                <input type='hidden' name='borrar_img' value='".$reg[8]."'/>


                <input type='submit' value='Eliminar' name='eliminar_articulo'/>

                </form>         
              </div>
              
              ";
              

              $reg = mysqli_fetch_array($hacerconsulta2);
              
              }
              echo "</div>";
              mysqli_close($conexion);


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