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

        //Conexión Servidor Remoto
        //$conexion=mysql_connect("localhost","root","");
       // $baseDeDatos=mysql_select_db("avelun_bd",$conexion); 
        



    $consulta_mysql='select * from marcas where id>"0"';
   // $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
    $resultado_consulta_mysql= $conexion->query($consulta_mysql);

    if(isset($_POST['btn_marca'])){
       $marca = $_POST['marca'];
      
         
      $consulta_mysql2="select * from productos where marca='$marca'";
    //  $resultado_consulta_mysql2=mysql_query($consulta_mysql2,$conexion);
      $resultado_consulta_mysql2= $conexion->query($consulta_mysql2);






      if(isset($_POST['otrafoto'])){

      $modelo = $_POST['modelo'];

    

      //Método con rand()
      function generateRandomString($length = 10) {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
          
      } 

      $random = generateRandomString(10);

      





      $directorio = 'img_productos/';
      //$subir_archivo = $directorio.basename($_FILES['nueva_foto']['name']);

      $nombrefinal = $directorio.$modelo.$random.".jpg";

      $ssql = "SELECT * FROM productos WHERE modelo='$modelo'";  
       $nombre    =  mysql_result($ssql,0,"nombre");

            if (move_uploaded_file($_FILES['nueva_foto']['tmp_name'], $nombrefinal)) {
               

                $conexion->query("INSERT INTO fotos_productos VALUES (
                  '',
                  '$nombre',
                  '$marca',
                  '$modelo',
                  '$nombrefinal',
                  'carousel-item'
                  )");

                  echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El fichero es valido y se subio con exito!!</h4></div>";
                
            } else {
                echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>Fichero invalido!!</h4></div>";
            }
          }






          ?>


<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Cargar Foto</h3>



<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">



          <form method='post' action='cargar_fotos.php' enctype='multipart/form-data'>
                    
                      <label>Modelo:</label>
                      <?php
                      echo "<select name='modelo' class='form-control' style='height:40px; margin-bottom:15px;'>";
                      ?>
                      <!--<option>Seleccionar..</option>-->
                      <?php                     
                      while($fila2=mysqli_fetch_array($resultado_consulta_mysql2))
                      {                       
                          echo "<option>".$fila2['modelo']."</option>";
                      }
                      echo "</select>";
                      ?>
                      <br>
                      <label>Foto</label>
                      <input type='file' name='nueva_foto' required/>
                      
                      <input type='hidden' name='marca' value='<?php echo $marca ?>'/>
                      <input type='hidden' name='otrafoto' value='<?php echo $marca ?>'/>
                      
                      <br><br>
                      <input type='submit' value='Cargar' name='btn_marca'/>
    
            </form>


</div>
</div>
    <?php



 
    }else{
    ?>











<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Cargar Fotos</h3>



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
