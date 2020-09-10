<?php 
require ('../../cnx.php');

$consulta = "SELECT * FROM fotos_productos";            
$hacerconsulta2 = $conexion->query($consulta);                                                       
$reg = mysqli_fetch_array($hacerconsulta2);


                            while ($reg){
                                
                                echo $reg[0];

                                echo "<br>";

            $ssql = "SELECT * FROM productos WHERE nombre='$reg[1]' AND marca='$reg[2]' AND modelo='$reg[3]'";
            $result = $conexion->query($ssql);
           // $num = mysqli_num_rows($result); 
            $row = mysqli_fetch_assoc($result);
            $contenido = $row['foto_secundaria'];

            if ($contenido == ''){

              $suma = $reg[4];



            }else{


              $suma = $contenido.",".$reg[4];

            }

            
            $conexion->query("UPDATE productos SET foto_secundaria ='$suma' WHERE nombre='$reg[1]' AND marca='$reg[2]' AND modelo='$reg[3]'");








                              $reg = mysqli_fetch_array($hacerconsulta2);
                            }



echo "EJECUTADO";
?>