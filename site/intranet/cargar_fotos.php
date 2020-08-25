<html>
    <head>
    <tittle><tittle>
    </head>
    <body>



<?php

        include ('menu.php');

        //Conexión Servidor Remoto
        //$conexion=mysql_connect("localhost","root","");
       // $baseDeDatos=mysql_select_db("avelun_bd",$conexion); 
        
require ('../../cnx.php');


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

                  echo "El fichero es válido y se subió con éxito.\n";
                
            } else {
                echo "¡Posible ataque de subida de ficheros!\n";
            }
          }






          ?>

          <form method='post' action='cargar_fotos.php' enctype='multipart/form-data'>
                    
                      <label>Modelo:</label>
                      <?php
                      echo "<select name='modelo' style='height:30px; margin-bottom:15px;'>";
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
    <?php



 
    }else{
    ?>













    
              <form method="post" action="#">
                <label>Articulo:</label>
    
                <?php
                  echo "<select name='marca' style='height:30px; margin-bottom:15px;'>";
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
        <?php       
          }
        ?>

    </body>
</html>
