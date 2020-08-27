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

require ('../../cnx.php');



    if(isset($_POST['cargar'])){


         $nombre = $_POST['nombre'];
         $marca = $_POST['marca'];
         $modelo = $_POST['modelo'];
         $descripcion = $_POST['descripcion'];
         $precio = $_POST['precio'];
         $tipo = $_POST['tipo'];
         $visited = '0';
         
         $pais = 'Venezuela';
         $fecha = '2010-11-12';
         $disponible = 'si';
         $comprado = '0';



         
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

        $directorio = 'fotos_principales/';
        $nombrefinal = $directorio.$modelo.$random.".jpg";

        $directorio2 = 'img_productos/';
        $nombrefinal2 = $directorio2.$modelo.$random.".jpg";
        
        move_uploaded_file($_FILES['foto']['tmp_name'], $nombrefinal);      

        copy($nombrefinal, $nombrefinal2);
  


        $foto = $nombrefinal;

$ssql = "SELECT * FROM productos WHERE modelo='$modelo' AND nombre='$nombre'";
    $rs = $conexion->query($ssql);
    if (mysqli_num_rows($rs)>0)
        { 
        	

        	echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>ERROR Articulo EXISTENTE!!</h4></div>";

			
		}else{

            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Articulo REGISTRADO!!</h4></div>";

            $conexion->query("INSERT INTO productos VALUES (
                '',
                '$nombre',
                '$marca',
                '$modelo',
                '$tipo',
                '$descripcion',
                '$precio',
                '$visited',
                '$nombrefinal',
                '$pais',
                '$fecha',
                '$disponible',
                '$comprado'
                )");


                $conexion->query("INSERT INTO fotos_productos VALUES (
                    '',
                    '$nombre',
                    '$marca',
                    '$modelo',
                    '$nombrefinal2',
                    'carousel-item active'
                    )");


          
        }
    }
?>



<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Cargar Articulo</h3>






<form method='post' action='#' enctype="multipart/form-data">


<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">


        
            <input type="text" name='nombre' class="form-control" placeholder="Nombre">
            <br>
                    <?php 
                    $consulta_mysql='select * from marcas where id>"0"';
                    //$resultado_consulta_mysql=mysqli_query($consulta_mysql,$conexion);
                    $resultado_consulta_mysql= $conexion->query($consulta_mysql);
                    ?>

                
                    <label>Marca:</label>

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
            <input type='text' name='modelo' class="form-control" placeholder="Modelo"/>
            <br>
            <label>Tipo</label>
            <select name='tipo' class='form-control'>
                <option value='Mquillaje'>Maquillaje</option>
                <option value='Proteinas'>Proteinas</option>
                <option value='Short'>Shorts</option>
                <option value='Bolsos'>Bolsos</option>
                <option value='Calzado-Casual'>Calzado-Casual</option>
                <option value='Calzado-Deportivo'>Calzado-Deportivo</option>
                <option value='Collares'>Collares</option>
                <option value='Pulseras'>Pulseras</option>
                <option value='Zarcillos'>Zarcillos</option>
                <option value='Cosmeticos'>Cosmeticos</option>
                <option value='Agendas'>Agendas</option>
                <option value='Libretas'>Libretas</option>
                <option value='Libros'>Libros</option>
                <option value='Cursos'>Cursos</option>
                <option value='Escencias'>Escencias</option>
            </select>
            
       
</div> 


<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px; margin-left: 100px;">



<textarea class="form-control" id="descripcion" name='descripcion' placeholder="Descripcion" rows="3"></textarea>
            <br>
            <input type='text' name='precio' class="form-control" placeholder="Precio"/>
            <br>
            <label>Foto</label>
            <input type='file' name='foto'/>
            <br><br>
            <input type='submit' value='Cargar' name='cargar'/>
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
