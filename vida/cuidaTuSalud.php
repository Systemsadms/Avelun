<!DOCTYPE html>
<html>
<head>
	<title>Avelun Vida</title>
	<link href="css/style.css"  rel="stylesheet" type="text/css">


	


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS only --->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



	<link rel="icon" type="image/png" href="img/lun.png">

	<script type="text/javascript">




    function menutienda(){
      document.getElementById('menuCollage').style.display='none';

    }

    function menutiendaDos(){
      document.getElementById('menuCollage').style.display='block';
      
    }



/*
		  function queBuscas()
    {

      var estilo = document.getElementById("queBuscas").className;
      if (estilo == "hidden")
      {
      document.getElementById("queBuscas").className = "show";	
      }
      else 
      {
        document.getElementById("queBuscas").className = "hidden"; 		
      }
      
    }
*/

function mentoras()
    {
		
      var estilo = document.getElementById("mentoras").className;
      if (estilo == "hidden")
      {
      document.getElementById("mentoras").className = "show";	
      }
      else 
      {
        document.getElementById("mentoras").className = "hidden"; 		
      }
	  
      
    }



	function vervi(){
	
			document.getElementById("videos").style.display= "inline-block";
			document.getElementById("posts").style.display= "none";
	}



	function verpo(){
	
			document.getElementById("videos").style.display= "none";
			document.getElementById("posts").style.display= "inline-block";
	}





</script>


</head>
<body>






<!--


 




	--->


<div id="menuCollage">
  <?php
  include ("inicio.php");
?>

</div>


<?php
  include ("menu.php");
?>



<div class="banner" style='background-image: url(img/cuidatusalud.jpg);'>
</div>











<?php
	$pathArrow = 'img'; /*link de href */
	$path2 = 'mentoras'; /*link de href */
	$path = 'img'; /*link de imagen */
	 include ("mentoras-cuidaSalud.php");
?>


















<div class='main-content'>
	<div class='videosRecientes'>
		<h5 style='margin-left:20px; margin-bottom:30px'>Videos Recientes<br></h5>

<!--Video 1-->
		<div class='marcoVideostop'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/_4CKGNKeyv0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
			<a href='mentoras/tatiana-gebrael.php'><h6 style='margin-top:-50px'>Tatiana Gebrael (19/05/2020)</h6></a>
			<p style='color:black;'> 
			APRENDER A HACER MAGIA VISUAL CON ESE EJERCICIO
		
			Ejercicios diario para mejorar la vision, para alcanzar ojos de aguila y mejorar tu vida  
			<br><br><br>		
			</p>
		</div>
<!--Video 2-->
		<div class='marcoVideostop'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/MU0pbgkq2-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>			
			<a href='#'><h6 style='margin-top:-50px'>Escuela de Salud Integrativa</h6></a>
			<p style='color:black;' >
			CURSO NUTRICIÓN ANTIINFLAMATORIA durante el CONFINAMIENTO, con Elisa Blázquez<br>
			Una gran cantidad de problemas de salud, como dolor crónico, obesidad, diabetes,problemas cardíacos… se asocian con fenómenos inflamatorios. ¿Te gustaría saber por qué algunos alimentos y formas de cocinarlos pueden mejorar esta situación? 		 
			<br><br><br>
			</p>
		</div>


<!--Video 2-->
<div class='marcoVideostop'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/C7y_C9_0l1Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
			<a href='#'><h6 style='margin-top:-50px'>Tu Salud Guia</h6></a>
			<p style='color:black;' >
			Higiene Bucal para evitar contagios por virus y bacterias | Tu Salud Guía<br>
			La boca es el principal medio de entrada de enfermedades al cuerpo, pero podemos evitarlas si tenemos hábitos saludables como la correcta higiene bucal		
			<br><br><br>
			</p>
		</div>


	

<!--Video 3--
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/C7y_C9_0l1Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
			<a href='#'><h6 style='margin-top:-50px'>Tu Salud Guia</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			Higiene Bucal para evitar contagios por virus y bacterias | Tu Salud Guía
			<br>
			La boca es el principal medio de entrada de enfermedades al cuerpo, pero podemos evitarlas si tenemos hábitos saludables como la correcta higiene bucal		
			</p>
		</div>
<!--Video 4--	
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/R9CW8qUJ9bI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/marianela-sandovares.php'><h6 style='margin-top:-50px'>Marianela Sandovares (05/08/2020)</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
Cómo ORGANIZAR tu MÓVIL (celular, smartphone, iphone, android, etc.
<br>
A menudo me preguntan cómo organizo mi móvil (mi celular) para ser más productiva.
<br>
Así que en este vídeo te cuento cómo ordeno mi celular, espero que pueda inspirarte para que puedas ordenar el tuyo.			<br><br>

</p>
		</div>

		<!--Video 5--
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/X9jaqaSSv28" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<a href='mentoras/cris-rua.php'><h6 style='margin-top:-50px'>Cris Rua (05/08/2020)</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			En este video conocerás cómo llevar tu proyecto Scrum en Jira			
			</p>
		</div>
	<!--Video 6--
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/t4w8E2dKtQ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/cris-rua.php'><h6 style='margin-top:-50px'>Cris Rua (05/08/2020)</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			En este video conocerás como usar Kanban en Jira Software
			</p>

		</div>
	
		-->		




		<a href='#'>
			<p style='text-align:center; margin-top:20px; font-size:20px;'>>>VER TODOS LOS VIDEOS<<</p>
		</a>
	</div>


	















</div>










<div class='aside-banner' style='height:1700px;'>

	<!--Producto--
	<div style='text-align:center;'>
		<div style='margin-top:30px;'>
		
		</div>
		<div style='font-size:17px; margin:10px;'>
			Titulo de articulo en publicidad sin precion
		</div>
	</div>
	<!--FIN Producto-->


	
</div><!--fin de aside banner-->






<div style='text-align:center; height:auto; padding-bottom:0px; background-color:#cccccc;'  >
<br><br>
<h5 style='text-align:left; margin-left:70px; margin-bottom:30px; color:#b30000;'>POST RECIENTES</h5>



			<p style='text-align:center; margin-top:20px; font-size:20px;'>>>No hay post recientes<<</p>
			<br>	
<!--
	<div style='background-color:none; width:550px; display:inline-block; margin-bottom:20px;'>
		<div class="contenedor-post">
		<div class="imagen-post"><img src="mentoras/posts/img/firmalaura.png" width="150"></div>
		<div class="titulo-post">
			<h4>5 CLAVES PARA CAMBIAR DE MENTALIDAD</h4>
			<div>Existen frases que si no cambian tu vida, por lo menos cambiarán tu mentalidad. Te propongo que te olvides de lo que te dice la gente...</div>
			<a href='mentoras/posts/laura-post1lecture.php'><div style="text-align: right"><button class="leer-mas">Leer Mas...</button></div></a>

		</div>
		</div>
	</div>
	<div style='background-color:none; width:550px; display:inline-block; margin-bottom:20px;'>
			<div class="contenedor-post">
			<div class="imagen-post"><img src="mentoras/posts/img/firmalaura.png" width="150"></div>
			<div class="titulo-post">
				<h4>¿Qué es la Autoestima?</h4>
				<div>La Autoestima no es más que la VALORACIÓN que TÚ te das a ti mism@. Es una valoración basada en tu criterio con respecto a ti...</div>
				<a href='mentoras/posts/laura-post2lecture.php'><div style="text-align: right"><button class="leer-mas">Leer Mas...</button></div></a>

			</div>
			</div>
		</div>

		<div style='background-color:none; width:550px; display:inline-block; margin-bottom:20px;'>
		<div class="contenedor-post">
		<div class="imagen-post"><img src="mentoras/posts/img/firmalaura.png" width="150"></div>
		<div class="titulo-post">
			<h4>LA TAZA Y EL ALFARERO</h4>
			<div>La Historia de LA TAZA Y EL ALFARERO es una historia que os llevará a reflexionar sobre vuestra vida...</div>
			<a href='mentoras/posts/laura-post3lecture.php'><div style="text-align: right"><button class="leer-mas">Leer Mas...</button></div></a>

		</div>
		</div>
	</div>
	<div style='background-color:none; width:550px; display:inline-block; margin-bottom:20px;'>
			<div class="contenedor-post">
			<div class="imagen-post"><img src="mentoras/posts/img/firmalaura.png" width="150"></div>
			<div class="titulo-post">
				<h4>PRINCIPIOS DEL DESAPEGO</h4>
				<div>Hoy me gustaría hablaros de los principios del desapego, aquí os presento mis cuatro pilares que me han ayudado...</div>
				<a href='mentoras/posts/laura-post4lecture.php'><div style="text-align: right"><button class="leer-mas">Leer Mas...</button></div></a>

			</div>
			</div>
	</div>
		-->
</div>		
	

		
















<a href="../site/index.php">
<div class="vida">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px; background-color: black; border-color: white;">
	 AVELUN-TIENDA <img src="img/heart.png" width="25px" class="icon-nav">
	</button>
</div>
</a>





















<footer>

	<div class="footer-left"  >
		<div>
			<img src='img/logoWhite.png' width='180px'/>
		</div>
		<div style='margin-top:30px;'>
			Avelun es el mejor sitio exlusivo y pensado para mujeres, queremos ser tu mejor opcion
			 online para adquirir productos, conocer marcas alrededor del mundo y 
			 asegurar tu salud.
		</div>
		<div style='margin-top:30px; text-align:right;' >
			<button style='color:gray; background-color:black; border:solid 1px gray; width:120px;' data-toggle="modal" data-target="#exampleModal">CONTACTAR</button>
		</div>
	</div>
	


    <div class="footer-right" >
		<div>
			<div class='avisos-legales'>Aviso Legal</div>
			<div class='avisos-legales'>Politicas de Privacidad</div>
			<div class='avisos-legales'>Terminos y Condiciones</div>
		</div>
		<div style='margin-top:60px;'>
			<div style='display:inline-block;'>
				<a href='https://www.facebook.com/avelun' target='_blank'><img src='img/face.png' width='50' style='margin-left:10px;' ></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://www.instagram.com/avelun_v/' target='_blank'><img src='img/insta.png' width='50' style='margin-left:20px;'></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://twitter.com/avelunv' target='_blank'><img src='img/twit.png' width='50' style='margin-left:20px;' ></a>
			</div>
		</div>
                
	</div>

	<div style='background-color:#444243; height: 50px; text-align:center; color:white; padding-top:15px; font-size:12px; float: left; width: 100%;' >
	© 2020. Systems Admins C.A. Todos los derechos reservados.
	</div>

</footer>



</body>
</html>