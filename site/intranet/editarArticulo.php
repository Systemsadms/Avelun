<?php
session_start();
$nombreUsu = $_SESSION["user"];
$id_articulo = $_POST['id_articulo'];
if ($nombreUsu)
{


include ("../../cnx.php");


$ssql = "SELECT * FROM usuarios_admin_tienda WHERE correo = '$nombreUsu'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$tiendaProv = $row['tienda'];


include ("header.php");
include ("menu.php");



function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString; 
            } 



if(isset($_POST['actArt'])){

            $tipoUpdate = $_POST['tipoUpdate'];
        	$nombreUpdate = $_POST['nombreUpdate'];
 	        $modeloUpdate = $_POST['modeloUpdate'];
 	        $descripcionUpdate = $_POST['descripcionUpdate'];
 	        $precioUpdate = $_POST['precioUpdate'];
 	        $tallaUpdate = $_POST['tallaUpdate'];
 	        $conexion->query("UPDATE productos SET nombre ='$nombreUpdate' WHERE id = '$id_articulo'");
            $conexion->query("UPDATE productos SET modelo ='$modeloUpdate' WHERE id = '$id_articulo'");
            $conexion->query("UPDATE productos SET descripcion ='$descripcionUpdate' WHERE id = '$id_articulo'");
            $conexion->query("UPDATE productos SET precio ='$precioUpdate' WHERE id = '$id_articulo'");
            $conexion->query("UPDATE productos SET talla ='$tallaUpdate' WHERE id = '$id_articulo'");
            $conexion->query("UPDATE productos SET tipo ='$tipoUpdate' WHERE id = '$id_articulo'");
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Articulo se ha modificado con EXITO!!</h4></div>";
}




if(isset($_POST['cargar_foto_nueva'])){
            $fotoBorrar = $_POST['fotoBorrar'];
            $modelo = $_POST['modelo'];
            $random = generateRandomString(10);
            $directorio = 'fotos_principales/';
            $nombrefinal = $modelo.$random.".jpg";
            move_uploaded_file($_FILES['fotoNueva']['tmp_name'], $directorio.$nombrefinal); 
            $conexion->query("UPDATE productos SET foto ='$nombrefinal' WHERE id = '$id_articulo'");
            unlink($directorio.$fotoBorrar);
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Cambiado la imagen principal con EXITO!!</h4></div>"; 
}





if(isset($_POST['subir_imagen_nueva_secun'])){
            $fotosSecundarias = $_POST['fotosSecundarias'];
            $id_articulo = $_POST['id_articulo'];
            $modelo = $_POST['modelo'];
            $random = generateRandomString(10);
            $directorioSecu = 'img_productos/';
            $nombrefinal_secun = $modelo.$random.".jpg";
            move_uploaded_file($_FILES['cambiar_foto_secun']['tmp_name'], $directorioSecu.$nombrefinal_secun); 
            if ($fotosSecundarias == '') {
                $conexion->query("UPDATE productos SET foto_secundaria ='$nombrefinal_secun' WHERE id = '$id_articulo'");
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Cargo nueva imagen Secundaria EXITO!!</h4></div>";    
            }else{
            $arreglo = explode(",", $fotosSecundarias);
            array_push($arreglo , $nombrefinal_secun);
            $string = implode(',',$arreglo);
            $conexion->query("UPDATE productos SET foto_secundaria ='$string' WHERE id = '$id_articulo'");
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>El Cargo nueva imagen Secundaria EXITO!!</h4></div>"; 
            }
}



if(isset($_POST['cargar_foto_nueva_secun'])){
            $posicion_array = $_POST['posicion_array'];
            $fotosSecundarias = $_POST['fotosSecundarias'];
            $id_articulo = $_POST['id_articulo'];
            $imagen = $_POST['imagen'];
            $modelo = $_POST['modelo'];           
            $random = generateRandomString(10);
            $directorioSecu = 'img_productos/';
            $nombrefinal_secun = $modelo.$random.".jpg";
            move_uploaded_file($_FILES['cambiar_foto_secun']['tmp_name'], $directorioSecu.$nombrefinal_secun); 
            $arreglo = explode(",", $fotosSecundarias);
            $reemplazos = array($posicion_array => $nombrefinal_secun);
            $array_nuevo = array_replace($arreglo, $reemplazos);
            $string = implode(',',$array_nuevo);
            $conexion->query("UPDATE productos SET foto_secundaria ='$string' WHERE id = '$id_articulo'");
            $directorioSecu = 'img_productos/';
            unlink($directorioSecu.$imagen);
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Se cambio la imagen Secundaria EXITO!!</h4></div>";
}




if(isset($_POST['eliminar_foto_secun'])){
            $posicion_array = $_POST['posicion_array'];
            $fotosSecundarias = $_POST['fotosSecundarias'];
            $id_articulo = $_POST['id_articulo'];
            $imagen = $_POST['imagen'];
            $arreglo = explode(",", $fotosSecundarias);
            unset($arreglo[$posicion_array]);
            $arreglo = array_values($arreglo);
            $string = implode(',',$arreglo);
            $conexion->query("UPDATE productos SET foto_secundaria ='$string' WHERE id = '$id_articulo'");
            $directorioSecu = 'img_productos/';
            unlink($directorioSecu.$imagen); 
            echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Imagen Secundaria eliminada EXITO!!</h4></div>";
 
}




$ssql = "SELECT * FROM productos WHERE id = '$id_articulo'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$nombre = $row['nombre'];
$modelo = $row['modelo'];
$descripcion = $row['descripcion'];
$precio = $row['precio'];
$talla = $row['talla'];
$foto = $row['foto'];
$todosLosNombres = $row['foto_secundaria'];
$tipo = $row['tipo'];



?>



<script type="text/javascript">
     function newImage(){
        document.getElementById('cargarImg').style.display='block';
    }
    function newImageSecu(){
        document.getElementById('cargarImgSecu').style.display='block';
    }

    function confirmation() {
    if(confirm("Realmente desea eliminar?"))
    {
        return true;
    }
    return false;
    }

</script>


<body>



<div style="text-align: center; width: 100%; margin-top: 80px; background-color: none;">
    <h3>Editar Articulo</h3>

    <div style="display: inline-block; vertical-align: top; width: 200px; margin-top: 50px; background-color: none;">
        <form method="post" action="#">
            <label>Nombre</label>
        	<input class="form-control" type="text-align" name="nombreUpdate" value='<?php echo $nombre?>'>
            <br>
             <label>Modelo</label>
        	<input class="form-control" type="text-align" name="modeloUpdate" value='<?php echo $modelo?>'>
            <br>
            <label>Tipo</label>
            <input class="form-control" type="text-align" name="none" value='<?php echo $tipo?>' disabled>
            <input class="form-control" type="hidden" name="tipoUpdate" value='<?php echo $tipo?>'>
            <br>
            <label>Descripcion</label>
            <textarea class="form-control" name='descripcionUpdate' rows="3"><?php echo $descripcion?></textarea>
            <br>
            <label>Precio</label>
        	<input class="form-control" type="text-align" name="precioUpdate" value='<?php echo $precio?>'>
            <br>
            <label>Talla</label>
        	<input class="form-control" type="text-align" name="tallaUpdate" value='<?php echo $talla?>'>
        	<input class="form-control" type="hidden" name="id_articulo" value='<?php echo $id_articulo?>'>
            <br>
        	<input type='submit' value='Actualizar' name='actArt' class="btn btn-dark"/>
        </form>
    </div>





    <div style="display: inline-block; vertical-align: top; width: 400px; height: auto; margin-top: 50px; background-color: none;">

        <label>Imagen Principal</label>
        <div><img width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='fotos_principales/<?php echo $foto?>' /></div>
        <br>
        <button onclick="newImage()" class="btn btn-dark">Cambiar Imagen Principal</button>
        <br>
        <div id="cargarImg" style="background-color: none; width: 100%; height: auto; display: none;">
            <br>
            <form method='post' action='#' enctype="multipart/form-data">
                <input type='file' name='fotoNueva' class="btn btn-secondary"/>
                <input class="form-control" type="hidden" name="id_articulo" value='<?php echo $id_articulo?>'>
                <input class="form-control" type="hidden" name="modelo" value='<?php echo $modelo?>'>
                <input class="form-control" type="hidden" name="fotoBorrar" value='<?php echo $foto?>'>
                <br>
                <br>
                <input type='submit' value='Cambiar' name='cargar_foto_nueva' class="btn btn-secondary"/>
            </form>
        </div>

        <br>
        <br>


        <label>Agregar Nueva Imagen Secundaria</label>
        <br>
        <button class="btn btn-dark" onclick="newImageSecu()">Nueva Imagen Secundaria</button>
        <div id="cargarImgSecu" style="background-color: none; width: 100%; height: auto; display: none;">
            <br>
            <form method='post' action='#' enctype="multipart/form-data">
                <input type='file' name='cambiar_foto_secun' class="btn btn-secondary"/>

                <input class="form-control" type="hidden" name="id_articulo" value='<?php echo $id_articulo?>'>

                <input class="form-control" type="hidden" name="modelo" value='<?php echo $modelo?>'>
                
                <input class='form-control' type='hidden' name='fotosSecundarias' value='<?php echo $todosLosNombres?>'>
                <br>
                <br>
                <input type='submit' value='Cargar' name='subir_imagen_nueva_secun' class="btn btn-secondary"/>
            </form>
        </div>
    </div>









<div style="display: inline-block; vertical-align: top; width: 400px; height: auto; margin-top: 50px; background-color: none;">
        <label>Imagenes Secundarias</label>

<?php

         if ($todosLosNombres == '') {
    echo "<br><br><b>No hay fotos secundarias</b>";
}else{   
$img = explode(",", $todosLosNombres);
                            $contador = count($img);
                            $posicion = 0;

                            while ($posicion < $contador)
                            {
                            
                            echo "


                            <div><img width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='img_productos/".$img[$posicion]."' /></div>
                            <br>
                            
                        <div style='background-color: none; width: 100%; height: auto;''>
                            <label><b>Cambiar Imagen<b></label>

                                <form method='post' action='#' enctype='multipart/form-data'>
                                    <input type='file' name='cambiar_foto_secun' class='btn btn-secondary'/>
                                    <input class='form-control' type='hidden' name='id_articulo' value='".$id_articulo."'>
                                    <input class='form-control' type='hidden' name='modelo' value='".$modelo."'>
                                    <input class='form-control' type='hidden' name='imagen' value='".$img[$posicion]."'>
                                    <input class='form-control' type='hidden' name='posicion_array' value='".$posicion."'>
                                    <input class='form-control' type='hidden' name='fotosSecundarias' value='".$todosLosNombres."'>
                                    <br>
                                    <br>
                                    <input type='submit' value='Cargar' name='cargar_foto_nueva_secun' class='btn btn-dark'/>
                                </form>
                                <br>

                                <label><b>Eliminar Imagen<b></label> 
                                    <form method='post' action='#' onsubmit='return confirmation()' id='act' name='act'>
                                        <input class='form-control' type='hidden' name='imagen' value='".$img[$posicion]."'>
                                        <input class='form-control' type='hidden' name='id_articulo' value='".$id_articulo."'>
                                        <input class='form-control' type='hidden' name='posicion_array' value='".$posicion."'>
                                        <input class='form-control' type='hidden' name='fotosSecundarias' value='".$todosLosNombres."'>

                                        <button type='submit' name='eliminar_foto_secun' class='btn btn-danger'>Eliminar 
                                          <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg' style='margin-left: 5px;'>
                                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                            <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                          </svg>
                                        </button>
                                    </form>

                                </div>

                            <br><br>


                            ";
                            
                            $posicion++;
                            
                            
                            }
}
?>
 
        
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