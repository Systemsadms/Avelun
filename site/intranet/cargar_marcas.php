<html>
    <head>
    <tittle><tittle>
    </head>
    <body>

    <?php
     include ('menu.php');


     
    if(isset($_POST['cargar'])){



         $nombre = $_POST['nombre'];
         $pais = $_POST['pais'];
         $descripcion = $_POST['descripcion'];
         $fecha = '2010-11-12';
  


        //Conexión Servidor Remoto
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("avelun_bd",$conexion); 
require ('../../cnx.php');


$ssql = "SELECT * FROM marcas WHERE nombre_marca='$nombre'";
    //$rs = mysqli_query($ssql,$conexion);
    $rs = $conexion->query($ssql);

    if (mysqli_num_rows($rs)>0)
        { 
        	

        	echo "Esta Marca ya esta Registrada";

			
		}else{

            echo "La marca se ha registrado con exito";

            $conexion->query("INSERT INTO marcas VALUES (
                '',
                '$nombre',
                '$pais',
                '$fecha',
                '$descripcion',
                '0'
                )");


          
        }
    }
?>
    
        <form method='post' action='#'>
            <label>Nombre de la Marca</label>
            <input type='text'name='nombre'/>
            <br>
            <label>Pais</label>
            <input type='text'name='pais'/>
            <br>
            <label>Descripcion</label>            
            <input type='text' name='descripcion'/>
            <input type='submit' value='Cargar' name='cargar'/>
        </form>
    
   
    
    
    
    </body>
</html>
