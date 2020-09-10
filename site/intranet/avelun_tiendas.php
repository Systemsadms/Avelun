<?php
      session_start();
      $nombreUsu = $_SESSION["user"];

      if ($nombreUsu)
      {
      include ("../../cnx.php");
      include ("header.php");
?>


<script type="text/javascript">
      function confirmation() {
          if(confirm("Realmente desea eliminar?"))
          {
              return true;
          }
          return false;
}
</script>
<body>
<?php

        include ('avelun_menu.php');

if(isset($_POST['eliminar_articulo'])){
            $borrar_img = $_POST['borrar_img'];
            $id_articulo = $_POST['id_articulo'];
            $directorio = 'fotos_principales/';
            unlink($directorio.$borrar_img); 
            $consultaDelete = "DELETE FROM productos WHERE id='$id_articulo'";
            $hacerconsulta3 = $conexion->query($consultaDelete);
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Articulo se ha eliminado con exito!!</h4></div>";
}



?>  
<div style="width: 100%; height: auto; background-color: none; margin-top: 50px; text-align: center;">
  <div style="width: 150px; height: auto; background-color: none; display: inline-block; vertical-align: top; text-align: center;">
      <form method="post" action="#">
                    <label>Selecciona la Tienda:</label>
                    <?php

                    $consulta_mysql="SELECT * FROM tiendas";
                    $resultado_consulta_mysql= $conexion->query($consulta_mysql);
  
                    echo "<select class='form-control' name='tienda' style='height:40px; margin-bottom:0px;'>";
                    ?>
                    <!--<option>Seleccionar..</option>-->
                    <?php                     
                    while($fila=mysqli_fetch_array($resultado_consulta_mysql))
                    {                       
                        echo "<option>".$fila['nombre']."</option>";
                    }
                    echo "</select>";

?>    
                    <br>
                    <input type="submit" name="cargar_tienda" class='btn btn-dark' value="Cargar">
    </form>
  </div>
</div>  



<?php


if(isset($_POST['cargar_tienda'])){


                  $tienda = $_POST['tienda'];
                  ?>

                  
                  <div style="width: 100%; height: auto; background-color: none; margin-top: 50px; text-align: center;">
                  <div style="width: 150px; height: auto; background-color: none; display: inline-block; vertical-align: top; text-align: center;">
                    <form method="post" action="#">
                    <label>Selecciona la Tienda:</label>
                    <?php

                    $consulta_mysql="SELECT * FROM marcas WHERE tienda_asociada = '$tienda'";
                    $resultado_consulta_mysql= $conexion->query($consulta_mysql);
  
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
                    <input type="hidden" name="tienda" value='<?php echo $tienda?>'>
                    <input type="submit" name="cargar_articulos_tienda" class='btn btn-dark' value="Cargar">
    </form>
  </div>
</div>  


<?php
}











if(isset($_POST['cargar_articulos_tienda'])){
                  $tienda = $_POST['tienda'];
                  $marca = $_POST['marca'];
                  $ssql = "SELECT * FROM marcas WHERE nombre_marca='$marca'";
                  $result = $conexion->query($ssql);
                  $num = mysqli_num_rows($result); 
                  $row = mysqli_fetch_assoc($result);                 
                  $consulta = "SELECT * FROM productos WHERE marca='$marca' AND Tienda='$tienda'";
                  $hacerconsulta2 = $conexion->query($consulta);          



                  echo "<div style='text-align: center; width: 100%; margin-top: 50px;''>
                          <h3>Articulos de ".$marca."</h3>
                        </div>";

                  echo "<div style='background-color:none; text-align: center; padding-bottom: 10px; margin-top: 10px;'>";          
                  $reg = mysqli_fetch_array($hacerconsulta2);
                  while ($reg){                           
                          echo "             
                          <div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align:center;'>

                    

                      <div> <img name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='fotos_principales/".$reg[8]."' /></div>


                      <div style='color:#007bff; width:100%; border:none; height:40px; padding-top:10px; display:inline-block; vertical-align: top;'>".$reg[1]."</div>

                      <div style='width:100%; color:red; display:inline-block; vertical-align: top;'>".$reg[6]."$</div>


                      <form method='post' action='#' onsubmit='return confirmation()' id='act' name='act' style='display:inline-block; margin-right:30px;'>
                      <input type='hidden' name='id_articulo' value='".$reg[0]."'/>
                      <input type='hidden' name='borrar_img' value='".$reg[8]."'/>
                      <br>
                      <button type='submit' name='eliminar_articulo' class='btn btn-danger'>Eliminar 

                      <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg' style='margin-left: 5px;'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                      </svg>

                      </button>
                      </form> 


                      <form method='post' action='avelun_editarArticulo.php' style='display:inline-block;'>
                        <input type='hidden' name='id_articulo' value='".$reg[0]."'/>

                        <button type='submit' name='editarArt' class='btn btn-success' style='width:100px;'>Editar
                                  <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-gear' fill='currentColor' xmlns='http://www.w3.org/2000/svg' style='margin-left: 5px;'>
                                  <path fill-rule='evenodd' d='M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z'/>
                                  <path fill-rule='evenodd' d='M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z'/>
                                </svg>
                        </button>

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
header("location:login.php");  
}
?>


</body>
</html>