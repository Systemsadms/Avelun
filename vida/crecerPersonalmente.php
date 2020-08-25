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



<div class="banner">
</div>











<?php
	$pathArrow = 'img'; /*link de href */
	$path2 = 'mentoras'; 
	$path = 'img'; /*link de imagen */
	 include ("mentoras-personales.php");
?>



















<div class='main-content'>
	<div class='videosRecientes'>
		<h5 style='margin-left:20px; margin-bottom:30px'>Videos Recientes<br></h5>

<!--Video 1-->
		<div class='marcoVideostop'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/LnBBQskxlrI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
			<a href='mentoras/laura-escriba.php'><h6 style='margin-top:-50px'>Laura Escriba</h6></a>
			<p style='color:black;'> 
			Momento Histórico, crece como persona,
			La vida es un constante CAMBIO en el que se te da la OPORTUNIDAD de mejorar y crecer como persona.
			,
			¿Te atreves?


			<br><br><br>		
			</p>
		</div>
<!--Video 2-->
		<div class='marcoVideostop'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/JN3EcdUoC_g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>			
			<a href='mentoras/franccesca-fortuny.php'><h6 style='margin-top:-50px'>Franccesca Fortuny</h6></a>
			<p style='color:black;' >
			La capacidad de ser honestos con nosotros mismos es una cualidad que vamos aprendiendo con  la madurez. Emprende ese viaje de vuelta a ti y acompañame a iniciar las mejores prácticas para descubrir tu verdadera verdad valga la redundancia y para deshacerte de las supuestas verdades limitantes que has arrastrado a lo largo del tiempo.
						<br><br><br>
			</p>
		</div>


	

<!--Video 3-->
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/gL2E4A5-mxk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/laura-escriba.php'><h6 style='margin-top:-50px'>Laura Escriba</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			Hay que hacer como si ya tuvieras la seguridad en ti y poco a poco se irá integrando en tu SER		
			</p>
		</div>
<!--Video 4-->	
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/OOyw60obUpA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/laura-escriba.php'><h6 style='margin-top:-50px'>Laura Escriba</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			ESCRIBE tu MEJOR MOMENTO y recréate en él.<br>
			Al finalizar el día, RECUERDA quedarte con todo lo bueno que has ViViDo hoy!!
</p>
		</div>

		<!--Video 5-->
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/0RSfL-QtykQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/franccesca-fortuny.php'><h6 style='margin-top:-50px'>Franccesca Fortuny</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			Este video fue inicialmente grabado para Instagram pero tanto me comentaron lo efectivo y lo valiosos que fue, que decidí publicárselo a ustedes por aquí también a modo de Tip para el alma. Se trata de una herramienta liberadora para combatir y contrarrestar las emociones pesadas y los 		
			</p>
		</div>
	<!--Video 6-->
		<div class='marcoVideos'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/dFUUgRRQo3w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<a href='mentoras/franccesca-fortuny.php'><h6 style='margin-top:-50px'>Franccesca Fortuny</h6></a>
			<p style='color:black; margin-bottom: 50px;' >
			Este video lo grabe al terminar de darme una ducha.  Mientras me iba duchando iba pensando en esto que aquí les cuento. Es solo una experiencia pero que me dejo un aprendizaje realmente valioso. 
			</p>

		</div>
	
		




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
			<img src='img/logo3.png' width='180px'/>
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