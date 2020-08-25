<!DOCTYPE html>
<html>
<head>
	<title>Avelun Vida</title>
	<link href="../css/style.css"  rel="stylesheet" type="text/css">


	


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



	<link rel="icon" type="image/png" href="../img/lun.png">

	<script type="text/javascript">




    function menutienda(){
      document.getElementById('menuCollage').style.display='none';

    }

    function menutiendaDos(){
      document.getElementById('menuCollage').style.display='block';
      
    }





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



<style>

.fotoPerfil{
	background-image:url("../mentoras/fotos/katrina.jpg");
	background-size: 150px;
	background-position: -2px -20px;
}

</style>

</head>
<body>







	<nav class="navbar ml-auto navbar-expand-lg navbar-light bg-light " >

<div style='margin-left:50px;'> 
    <img src="../img/logo2.png" width="150" height="50" onClick='menutiendaDos()' style="cursor: pointer;">
</div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-auto" style='margin-right:40px;'>
      <li class="nav-item" >
        <a class="nav-link" href="../crecerProfesionalmente.php" style='color: #b30000;'>Crecer Profesionalmente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../crecerPersonalmente.php" style='color: #b30000;'>Crecer Personalmente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../verteBien.php" style='color: #b30000;'>Verte Bien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../sentirteBien.php" style='color: #b30000;'>Sentirte Bien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../cuidatuSalud.php" style='color: #b30000;'>Cuida tu Salud</a>
      </li>

      
    </ul>
  </div>
  <!--
  <div class="col-md caja-queBuscas" onclick="queBuscas()">
     <a href="#" class="que-buscas">¿Que Mentora Buscas?<img src="img/searchicon.png" width="35px" style='margin-top:-8px;' class="icon-nav"></a>
    </div>
    -->
</nav>











<?php
	$pathArrow = '../img'; /*link de href */
	$path = '../img'; /*link de imagen */
	$path2 = '../mentoras'; /*link de href */
	include ("../mentoras-profesionales.php");
?>








<div class='perfil'>

<div class='fotoPerfil'></div>
<div class='bioPerfil'>
	<h6>Katrina Lee</h6>
	<p>
	Emprendedora y Empresaria, Katrina Lee fundadora de SMART Mandarin te enseñara 
	como hablar Mandarin y las diferencias entre los dialectos.   
	
	

		
		
		<div style='text-align:center; margin-top:10px;'>
			<button type="button" class="btn btn-dark">Habla Personalmente con Katrina</button>
		</div>
	</p>
</div>

</div><!--Fin de Perfil-->









<div style='background-color:none; margin-top:50px; margin-bottom:30px;'>
	<div class="tabsPostVideo" onclick='vervi()'>SUS VIDEOS</div>
	<div class="tabsPostVideo" onclick='verpo()'>SUS POSTS</div>
</div>






<!-------------------aqui esta el problema de respnsive a resolver------------------------->
<div style="text-align: center; max-width: 100%;">


	<div class="videos" id="videos">

	<iframe width="560" height="315" src="https://www.youtube.com/embed/k4B9JKrDdtA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style='text-align:justify;'>
				<h6 style='margin-top:-50px'>How to Learn Chinese Characters Tips & Tools</h6><br>
				</div>

	<iframe width="560" height="315" src="https://www.youtube.com/embed/WUSrB9iFqQE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style='text-align:justify;'>
				<h6 style='margin-top:-50px'>My Secret to Learn Mandarin for Beginners</h6><br>
				</div>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/xNbcUaz5YnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style='text-align:justify;'>
				<h6 style='margin-top:-50px'>How To Learn Mandarin Chinese As A Beginner</h6>
				<p style='color:black; margin-bottom:40px;'> ¿Cómo lo hago para cumplir con mi planificación en Google Calendar? ¿Consigo siempre terminar a tiempo? ¿Y si tengo que replanificar? Comparto una semana productiva contigo en este vlog.</p>
				</div>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/YYF2zH-ZzoI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style='text-align:justify;'>
				<h6 style='margin-top:-50px'>HOW TO USE CHINESE VOCABULARY</h6><br>
				</div>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/S1NTpuuEYHQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div style='text-align:justify;'>
				<h6 style='margin-top:-50px'>Months Dates & Days in Mandarin</h6><br>
				</div>

				<a href='https://www.youtube.com/c/LeeKatrinasmartmandarin/featured' target='_blank'><h5>Ver mas videos de Katrina Lee</h5></a>
				<div style='text-align:center; margin-top:10px; margin-bottom:50px;'>
					<button type="button" class="btn btn-dark">Habla Personalmente con Katrina</button>
				</div>
	</div>         <!-- FIN DE CONTENEDOR VIDEOS-->


	<aside class="posts" id="posts" >
		<p>Pronto publicaremos los posts mas recientes de Katrina Lee</p>
		<!--
		<?php
			include ("posts/laura-post1.php");
			include ("posts/laura-post2.php");
			include ("posts/laura-post3.php");				
			include ("posts/laura-post4.php");	
			include ("posts/laura-post5.php");	
		?>
		-->
	</aside>


</div>




</div>
		





<a href="../site/index.php">
<div class="vida">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px; background-color: black; border-color: white;">
	 AVELUN-TIENDA <img src="../img/heart.png" width="25px" class="icon-nav">
	</button>
</div>
</a>












<footer>

	<div class="footer-left"  >
		<div>
			<img src='../img/logo3.png' width='180px'/>
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
				<a href='https://www.facebook.com/avelun' target='_blank'><img src='../img/face.png' width='50' style='margin-left:10px;' ></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://www.instagram.com/avelun_v/' target='_blank'><img src='../img/insta.png' width='50' style='margin-left:20px;'></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://twitter.com/avelunv' target='_blank'><img src='../img/twit.png' width='50' style='margin-left:20px;' ></a>
			</div>
		</div>
                
	</div>

	<div style='background-color:#444243; height: 50px; text-align:center; color:white; padding-top:15px; font-size:12px; float: left; width: 100%;' >
	© 2020. Systems Admins C.A. Todos los derechos reservados.
	</div>

</footer>



</body>
</html>