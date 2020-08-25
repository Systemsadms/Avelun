<!DOCTYPE html>
<html>
<head>
	<title>Avelun Vida</title>
	<link href="css/style.css"  rel="stylesheet" type="text/css">


	


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS only -->
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

<br>
<div class="contenido">
	Tipos de Contenidos
<br>
<br>


	<div style="height: 50px; width: 80px; background-color: none; display: inline-block; cursor: pointer" onclick='vervi()'>VIDEOS</div>


	<div style="height: 50px; width: 80px; background-color: none; display: inline-block; cursor: pointer" onclick='verpo()'>POSTS</div>


</div>

<div style="text-align: center; width: 100%;">


	<div class="videos" id="videos">

		<iframe src="https://www.youtube.com/embed/SvNekzIxMfU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe  src="https://www.youtube.com/embed/S0T7MQILnjI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe  src="https://www.youtube.com/embed/d24xGYpATtw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe  src="https://www.youtube.com/embed/6U3N46h4WvQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe   src="https://www.youtube.com/embed/72NWsVWlTKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		<iframe src="https://www.youtube.com/embed/OibkjqrxX1U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	</div><!--FIN DE CONTENEDOR VIDEOS-->


	<aside class="posts" id="posts" >
		<?php
			include ("post1.php");
			include ("post2.php");
			include ("post3.php");					
			include ("post4.php");
			include ("post5.php");
		?>
	</aside>


</div>

<a href="../site/index.php">
<div class="vida">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px;">
	 TIENDA <img src="img/heart.png" width="25px" class="icon-nav">
	</button>
</div>
</a>


</div>










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