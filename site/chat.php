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


<div class="row main-menu">
	<div class="col-lg">
			<div class="item1-menu">YouTube <img src="img/youtube.jpg" width="30px" class="icon-nav"></div>
			<a href="#" data-toggle="modal" data-target="#exampleModal"><div class="item2-menu" >
        CUIDA TU SALUD <img src="img/heart.png" width="25px" class="icon-nav">
      </div></a>
			<a href="index.php"><div class="item3-menu">TIENDA<img src="img/shop.gif" width="30px" class="icon-nav"></div></a>	
</div>
</div>


   <div class="row header-logo">
    <div class="col-lg caja-logo">
    	<img src="img/logo.png" width="150px"> 
    </div>
    <div class="col-lg caja-queBuscas">
		<font color='red'>SALA DE ATENCION PROFESIONAL</font>
    </div>    
  </div><!--Row END-->







	<?php
		if(isset($_POST['enviar_salud'])){


			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$mensaje = $_POST['mensaje'];

		
			$body='Hemos recibido una consulta
			
	Nombre de Contacto				'.$_POST['nombre'].'								
	Telefono: 						'.$_POST['telefono'].'
	Email de Contacto				'.$_POST['email'].'								
	Mensaje: 						'.$_POST['mensaje'].'
	';
								
	$para="enriquemendoza162@gmail.com";
				
	$mensaje = $body;
					
	$asunto 	= 'Nueva Consulta Avelun';
	$desde		= $_POST["email"];
	$mensaje 	= $body;
	$cabeceras = "";
	$cabeceras = "MIME-VErsion: 1.0 \r\n";
	$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
	$cabeceras = "To: " . $_POST ["email"] . "\r\n";
	$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
							
							
	mail ($para, $asunto, $mensaje, $cabeceras);	
																				

		?>

			<div class="row chat-avelun">
				<div class="col-lg " >
					<div style="background-color: #c2c2c2; margin:0 auto ; margin-top: 80px; width:470px; padding:50px;">

						<div style="text-align: center;">
							<img src="img/client.png">
						</div>
						<br>

							<?php
								echo 'Hola '.$nombre. ', Hemos recibido tu mensaje! ';
							?>
							
							
							<br><br>
							 En breve nuestro equipo se pondra en contacto con usted para saber mas detalles sobre que le sucede. 
							 <br><br><font color='red'>Le ayudaremos.</font>

							 <br><br>Por favor este atento a su telefono celular o su email.
					</div>
							
				</div>
			</div>			
		<?php
		}
	?>











<?php
		//include ("footer.php");
	?>
</div><!--Container END-->






</body>
</html>