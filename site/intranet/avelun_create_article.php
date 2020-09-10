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
         $marca = $_POST['marca'];
         $modelo = $_POST['modelo'];
         $descripcion = $_POST['descripcion'];
         $precio = $_POST['precio'];
         $talla = $_POST['talla'];
         $tipo = $_POST['tipo'];
         $visited = '0';
         $pais = 'Venezuela';
         $fecha = '2010-11-12';
         $disponible = 'si';
         $comprado = '0';



         
            $directorio = 'fotos_principales/';

            $directorioSecun = 'img_productos/';


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
        
            $randomSecun = generateRandomString(10);
            
            $randomSecun2 = generateRandomString(10);


            $nombrefinal = $modelo.$random.".jpg";

            $nombrefinalSecun = $modelo.$randomSecun.".jpg";

            $nombrefinalSecun2 = $modelo.$randomSecun2.".jpg";

            $todosLosNombres = $nombrefinalSecun.",".$nombrefinalSecun2;


            $ssql = "SELECT * FROM productos WHERE modelo='$modelo' AND nombre='$nombre'";
            $rs = $conexion->query($ssql);


            if ($_FILES['nueva_foto']['name'] != null AND $_FILES['nueva_foto2']['name'] != null) {
                //echo "SE ENVIARON LAS DOS FOTOS";


                        move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.$nombrefinal);   

                        move_uploaded_file($_FILES['nueva_foto']['tmp_name'], $directorioSecun.$nombrefinalSecun); 
                       
                        move_uploaded_file($_FILES['nueva_foto2']['tmp_name'], $directorioSecun.$nombrefinalSecun2);  

                        if (mysqli_num_rows($rs)>0){ 
                    

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
                                '$comprado',
                                '$todosLosNombres',
                                '$tiendaProv',
                                '$talla'
                                )");
                        }

       
            }else if ($_FILES['nueva_foto']['name'] == null AND $_FILES['nueva_foto2']['name'] == null){
                //echo "NO SE ENVIO NINGUNA DE LAS DOS FOTOS";

                        move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.$nombrefinal);    

                        if (mysqli_num_rows($rs)>0){ 
                    

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
                                '$comprado',
                                '',
                                '$tiendaProv',
                                '$talla'
                                )");
                        }


            }else if ($_FILES['nueva_foto']['name'] != null AND $_FILES['nueva_foto2']['name'] == null) {
                //echo "SE ENVIO LA PRIMERA PERO LA SEGUNDA NO";


                        move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.$nombrefinal);   

                        move_uploaded_file($_FILES['nueva_foto']['tmp_name'], $directorioSecun.$nombrefinalSecun); 

                        if (mysqli_num_rows($rs)>0){ 
                    

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
                                '$comprado',
                                '$nombrefinalSecun',
                                '$tiendaProv',
                                '$talla'
                                )");
                        }         


            }else{
                //echo "SE ENVIO LA SEGUNDA PERO LA PRIMERA NO";


                        move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.$nombrefinal);    
                       
                        move_uploaded_file($_FILES['nueva_foto2']['tmp_name'], $directorioSecun.$nombrefinalSecun2);  

                        if (mysqli_num_rows($rs)>0){ 
                    

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
                                '$comprado',
                                '$nombrefinalSecun2',
                                '$tiendaProv',
                                '$talla'
                                )");
                        }
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
                    $consulta_mysql="SELECT * FROM marcas WHERE tienda_asociada='Avelun'";
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

            <br>

            <textarea class="form-control" id="descripcion" name='descripcion' placeholder="Descripcion" rows="3"></textarea>
            
       
</div> 






<div style="display: inline-block; vertical-align: top; width: 250px; height: auto; background-color: none; margin-top: 50px; margin-left: 100px;">

            <input type="text" name='talla' class="form-control" placeholder="Talla">
            <br>
            <input type='text' name='precio' class="form-control" placeholder="Precio"/>
            <br>

            <label>FOTO PRINCIPAL</label>
            <input type='file' name='foto'/>
            <br>
            <br>

            <label>FOTOS SECUNDARIAS</label>
            <input type='file' name='nueva_foto' required/>
            <br><br>
            <input type='file' name='nueva_foto2' required/>


            <br><br>
            <input type='submit' value='Cargar' name='cargar' class='btn btn-dark'/>
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
