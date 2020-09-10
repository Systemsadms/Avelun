<?php
	include ("header.php");
?>

<head>
	<link href="css/estilos.css"  rel="stylesheet" type="text/css">

	<script type="text/javascript" src="../../script/scripts.js"></script>
</head>



<body>

<?php
	include ("modal-vida.php");
?>

<div class="container-fluid">
	<?php
		include ("nav.php");
		include ("departamentos.php");
		include ("banner.php");

if(isset($_POST['enviar_solicitud'])){

            $id = $_POST['id'];	

//Conexión Servidor Remoto
$conexion=mysql_connect("localhost","root","");
$baseDeDatos=mysql_select_db("avelun_bd",$conexion); 


$ssql = mysql_query("SELECT * FROM productos WHERE id='$id'");
$comprado = mysql_result($ssql,0,"comprado");
$newcomprado = $comprado+1;

$consultaupdate = "UPDATE productos SET 
                    comprado='$newcomprado'
                        WHERE id='$id'";     
                    $hacerconsulta = mysql_query ($consultaupdate);
/*
			$producto = $_POST['producto'];	
			$cantidad = $_POST['cantidad'];			
			$envio = $_POST['envio'];			
			$nombre = $_POST['nombre'];		
			$email = $_POST['email'];		
			$telefono = $_POST['telefono'];		
			$mensaje = $_POST['mensaje'];

		
			$body='Hemos recibido una orden de compra
			
			Nombre de Contacto				'.$_POST['nombre'].'								
			Telefono: 						'.$_POST['telefono'].'
			Email de Contacto:				'.$_POST['email'].'
			Cantidad:						'.$_POST['cantidad'].'
			Producto:						'.$_POST['producto'].'
			Tipo de Envio:					'.$_POST['envio'].'								
			Mensaje: 						'.$_POST['mensaje'].'
			';
										
			$para="enriquemendoza162@gmail.com";
						
			$mensaje = $body;
							
			$asunto 	= 'Nueva Orden de Compra';
			$desde		= $_POST["email"];
			$mensaje 	= $body;
			$cabeceras = "";
			$cabeceras = "MIME-VErsion: 1.0 \r\n";
			$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
			$cabeceras = "To: " .$para. "\r\n";
			$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
									
									
			mail ($para, $asunto, $mensaje, $cabeceras);
*/
		?>
			<div class="row">
			<div class="col-lg-12">
				<div class="solicitud-enviada">La orden de compra fue enviada. Mira tenemos mas cosas para ti</div>
			</div>
			</div>
		<?php
		}
		include ("marcas.php");
?>




<div class="row">
<div class="col-lg-6" style='text-align:center;' >
        <br>
        <h5>Te recomendamos ver estos articulos</h5>
        <br>



				<div style='width:300px; background-color:none; display:inline-block; margin-right:20px; margin-bottom:30px; text-align:center;'>
							<form method='post' action='producto.php'>
								<div> <input type='image' name='imageField' width='300' style='margin-right:20px; margin-bottom:-7px;' src='img/marcas/zapatos/model4/model4-1.jpg' /></div>
								<div><input type='submit'  value='Titulo del producto' style='color:#007bff; border:none; background-color:white;'/></div>
								<div><input type='submit'  value='123$' style='color:red; border:none; background-color:white;'/></div>	
								<input type='hidden' name='modelo' value='".$reg[3]."'/>	
								</form>					
				</div>

                




</div>




<div class="col-lg-6" style='text-align:center;' >
		<br>
        <h5>Elige con que mentor quieres conversar</h5>
        <br>

		<div style='margin-bottom:20px;'><img src='img/cris.jpg' style='width:100%;'></div>
		<div style='margin-bottom:20px;'><img src='img/laura.jpg' style='width:100%;'></div>
		<div style='margin-bottom:20px;'><img src='img/lucia.jpg' style='width:100%;'></div>
		<div style='margin-bottom:20px;'>Ver Todos los Mentores</div>
                
               

</div>
</div>





















<?php
		include ("footer.php");
	?>
</div><!--Container END-->






</body>
</html>