<?php
	require ('../cnx.php');
	include ("header.php");
?>

<body>

<?php
	include ("modal-vida.php");
?>

<div class="container-fluid">
<?php
		include ("nav.php");
		include ("departamentos.php");
		include ("banner.php");
		include ("marcas.php");
?>



<div class="row">
	<div class="col-lg" style="background-color: #c2c2c2; margin-top: 30px;">
	<div style="max-width: 600px; margin: 0 auto; margin-top:15px;" >
		<div class="card mb-3">
			  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  

			  
<?php

if(isset($_POST['enviar_solicitud'])){

			$producto = $_POST['producto'];
			$marca = $_POST['marca'];	
			$id = $_POST['id'];		

			$cantidad = $_POST['cantidad'];			
			$envio = $_POST['envio'];			
			$nombre = $_POST['nombre'];		
			$email = $_POST['email'];		
			$telefono = $_POST['telefono'];		
			$mensaje = $_POST['mensaje'];

		
			$body='Hemos recibido una orden de compra

			Datos Del Articulo:
			Nombre del Producto				'.$_POST['producto'].'
			Marca del Producto	     		'.$_POST['marca'].'
			ID del Producto	     			'.$_POST['id'].'


			Datos Del Usuario:
			
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
			$cabeceras = "From: " . $desde . "\r\n";    
									
									
			mail ($para, $asunto, $mensaje, $cabeceras);



			echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Su solicitud de compra ha sido enviada con EXITO!!</h4></div>";



}












	 			$modelo = $_POST['modelo'];
	 			$marca = $_POST['marca'];
				$ssql = "SELECT * FROM productos WHERE marca='$marca' AND modelo='$modelo' ";
				$result = mysqli_query($conexion,$ssql);
				$num = mysqli_num_rows($result); 
				$row = mysqli_fetch_assoc($result);
				$precio = $row['precio'];
				$nombre = $row['nombre'];
				$visited = $row['visited'];
				$id = $row['id'];
				$descripcion = $row['descripcion'];
				$todosLosNombres = $row['foto_secundaria'];
				$newvisited = $visited+1;
				$consultaupdate = "UPDATE productos SET visited='$newvisited' WHERE id='$id'";   
				$hacerconsulta = $conexion->query($consultaupdate);






$consulta = "SELECT * FROM productos WHERE marca='$marca' AND modelo='$modelo'";
$hacerconsulta = $conexion->query($consulta);
echo "<ol class='carousel-indicators'>";
$reg = mysqli_fetch_array($hacerconsulta);
while ($reg){                    
        echo "
             <li data-target='#carouselExampleIndicators' data-slide-to='".$reg[0]."' class='active'></li> 
      	";
$reg = mysqli_fetch_array($hacerconsulta);				
}
echo "</ol>";
						



$consulta2 = "SELECT * FROM productos WHERE marca='$marca' AND modelo='$modelo'  ";
$hacerconsulta2 = $conexion->query($consulta2);
$reg2 = mysqli_fetch_array($hacerconsulta2);
echo "
		<div class='carousel-inner'>
		<div class='carousel-item active'>
		<img src='intranet/fotos_principales/".$reg2[8]."' class='d-block w-100' alt='...'></div> 
";

if ($todosLosNombres=='') {
	
}else{
			$img = explode(",", $todosLosNombres);
			$contador = count($img);
			$posicion = 0;
			while ($posicion < $contador){
					echo "
					<div class='carousel-item'>
					<img src='intranet/img_productos/".$img[$posicion]."' class='d-block w-100' alt='...'></div> 
			";
			$posicion++;
			}
			echo "</div>";
			mysqli_close($conexion);
}

?>



				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" style='background-color:blue;' aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" style='background-color:blue;' aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>


			  <div class="card-body">
			    <h5 class="card-title" style="text-align: center;"><?php echo $nombre ?></h5>
			    <h5 class="card-title" style="text-align: right; color:red;"><?php echo $precio ?>$</h5>
			    <p class="card-text">
			    <?php echo $descripcion ?>
				</p>
			    <p class="card-text" style="text-align: center;">
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#comprarProducto">
					  Comprar
					</button>
			  </p>
			  </div>
			</div>
</div>
	</div>
</div>








<!-- Modal -->
<div class="modal fade" id="comprarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $nombre ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method='post' action='#'>

				<input type='hidden' name='producto' value='<?php echo $nombre ?>'/>
				<input type='hidden' name='marca' value='<?php echo $marca ?>'/>
				<input type='hidden' name='id' value='<?php echo $id ?>' />

        		  <div class="form-group" style="width: 100px;">
				    <label for="exampleFormControlInput1">Cantidad</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0" name='cantidad' required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Modo de Envio</label>
				    <select class="form-control" id="exampleFormControlSelect1" name='envio'>
				      <option>Delivery</option>
				      <option>Aereo</option>
				      <option>Maritimo</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nombre y Apellido</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your Name" name='nombre' required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Email address</label>
				    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name='email' required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Telefono</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Coloca el codigo de area Ejm: +(58) 212" name='telefono' required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Dejanos un comentario</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='mensaje'></textarea>

					<input type="submit" name="enviar_solicitud" value="Enviar Orden de Compra" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;" >
				  </div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>













<?php
		include ("footer.php");
	?>
</div><!--Container END-->






</body>
</html>