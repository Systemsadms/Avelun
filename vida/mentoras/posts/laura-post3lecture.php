<!DOCTYPE html>
<html>
<head>
	<title>Avelun Vida</title>
	<link href="../../css/style.css"  rel="stylesheet" type="text/css">


	


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



	<link rel="icon" type="../../image/png" href="img/lun.png">

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


</head>
<body>







	<nav class="navbar ml-auto navbar-expand-lg navbar-light bg-light " >

<div style='margin-left:50px;'> 
    <img src="../../img/avelun.png" width="100" height="70" onClick='menutiendaDos()' style="cursor: pointer;">
</div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-auto" style='margin-right:40px;'>
      <li class="nav-item" >
        <a class="nav-link" href="crecerProfesionalmente.php" style='color: #b30000;'>Crecer Profesionalmente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../crecerPersonalmente.php" style='color: #b30000;'>Crecer Personalmente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="verteBien.php" style='color: #b30000;'>Verte Bien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sentirteBien.php" style='color: #b30000;'>Sentirte Bien</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cuidatuSalud.php" style='color: #b30000;'>Cuida tu Salud</a>
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
	$pathArrow = '../../img'; /*link de href */
	$path = '../../img'; /*link de imagen */
	$path2 = '..'; /*link de href */
	 include ("../../mentoras-personales.php");
?>


















<!-------------------------------POST------------------------------------------>



<div class='main-content'>

	
	<div class='postLecture'>
		<!--Titulo-->
		<div style='text-align:center; margin-top:50px; margin-bottom:30px;'>
			<h2>𝐋𝐀 𝐓𝐀𝐙𝐀 𝐘 𝐄𝐋 𝐀𝐋𝐅𝐀𝐑𝐄𝐑𝐎</h2>
		</div>

		<!--IMAGEN PRINCIPAL-->
		<div style='text-align:center; margin-bottom:30px;'>
			<img src='img/taza.jpg'  class='imgen-post'>
		</div>
		
		<!--CONTENIDO-->
		<div class='postContent'>
<!--
			<p class='parrafoPost'>
			Existen frases que si no cambian tu vida, por lo menos cambiarán tu mentalidad. Te propongo que te olvides de lo que te dice la gente y de todas las barreras que tú mism@ te pones.
			Nada es Imposible a menos que tú te propongas que así sea. TÚ DECIDES.
			</p>

			<h3 style='margin-top:50px;'>QUERER ES PODER</h3>
-->
			<p class='parrafoPost'>

			La Historia de LA TAZA Y EL ALFARERO es una historia que os llevará a reflexionar sobre vuestra vida, que tenía oída y buscando por internet la encontré, desconozco el autor, posiblemente se trate de historias que explicaban de pueblo en pueblo…
 
			<br><br>
 👫Una pareja solía viajar a Inglaterra y comprar en una hermosa tienda de antigüedades. Les gustaban las tazas ☕y viendo una taza excepcional, preguntaron:
 <br><br>
 – ¿Podemos ver esa? Nunca hemos visto una tan hermosa.
 <br><br>
 Mientras que la señora se la enseñaba, de repente 𝐥𝐚 𝐭𝐚𝐳𝐚 𝐝𝐞 té 𝐡𝐚𝐛𝐥ó :
 <br><br>
 Ustedes no entienden, dijo...
 <br><br>
  
 ☕ “No siempre fui una taza de té. Hubo un tiempo en que solo era un pedazo de arcilla roja. Mi maestro me tomó y me amasó, me golpeó y me dio palmaditas, una y otra vez, hasta que grité: ¡No hagas eso. No me gusta! Déjame en paz”. Pero él tan solo se sonrió y suavemente me dijo: “¡Debo seguir!
 <br><br>
 “En ese momento fui colocada en una rueda giratoria y de repente comencé a dar vueltas y vueltas y vueltas. ¡Detente! ¡Me estoy mareando! ¡Me voy a enfermar!” Pero el maestro tan solo asintió y dijo quedamente: ‘Todavía no’. Me siguió dando vueltas y me hizo agujeros y me dobló y volvió a doblarme a su gusto y entonces… ¡𝐦𝐞 𝐩𝐮𝐬𝐨 𝐞𝐧 𝐞𝐥 𝐡𝐨𝐫𝐧𝐨! Nunca había sentido tanto calor. Grité y golpeé la puerta con fuerza. ¡Ayúdenme! ¡Sáquenme de aquí! Podía verlo a través de la apertura y podía leer sus labios mientras meneaba su cabeza. “Aún 𝐧𝐨”.
 <br><br>
 “Cuando pensaba que no podría soportar otro minuto, se abrió la puerta. Cuidadosamente me sacó y me puso en la mesa y comencé a enfriarme. ¡Oh, eso se sentía tan bien! Esto está mucho mejor de lo que pensé. Pero, tras de enfriarme, me tomó y me pasó la brocha pintándome por todos lados. Los vapores eran horribles. Pensé que me iba a ahogar. “¡Oh, por favor, détente, détente!” grité. Él sólo movió su cabeza y dijo: “𝐓𝐨𝐝𝐚𝐯í𝐚 𝐧𝐨”.
 <br><br>
 ✨“De repente, me puso nuevamente en el horno. Sólo que no fue como la primera vez. Esta vez estuvo el doble de caliente y simplemente supe que me iba a sofocar. Rogué, grité, lloré😭. Estaba convencida de que nunca lo lograría.
 <br><br>
 Estaba lista a rendirme. Justo entonces se abrió la puerta y me sacó de nuevo y me puso en la mesa en donde me enfrié y esperé… y esperé, preguntándome qué era lo próximos que me iba a hacer. Una hora más tarde, me pasó un espejo Me dijo: “Mírate”. Y lo hice.
 <br><br>
 Dije: “Esa no soy yo; no puedo ser yo. Es hermosa. ¡𝐒𝐨𝐲 𝐡𝐞𝐫𝐦𝐨𝐬𝐚!” 💕
 <br><br>
 Suavemente habló:
 <br><br>
 – “Quiero que recuerdes. Sé que dolió ser golpeada y rodada, pero si te hubiera dejado sola, te hubieras secado. Sé que te mareaste al dar vueltas en la rueda, pero si lo hubiera detenido, te habrías derrumbado. Sé que te dolió cuando estabas caliente e incómoda en el horno, pero si no te hubiese puesto allí, te hubieras rajado. Sé que los vapores eran malos cuando terminé de pintarte y te puse allí, pero si no lo hubiese hecho, nunca te hubieses endurecido. No hubieras tenido color alguno en tu vida. Si no te hubiera puesto por segunda vez en el horno, no hubieras sobrevivido mucho porque tu dureza no habría durado. ¡Ahora eres un producto terminado! Ahora eres lo que tenía en mente cuando comencé contigo”.
 <br><br>
 Moraleja: Dios sabe lo que está haciendo (a cada uno de nosotros). Él es el alfarero y nosotros somos Su arcilla. Él nos moldea y nos hace, nos expone a suficientes presiones del tipo adecuado para que podamos convertirnos en la pieza de arte perfecta que cumpla Su voluntad buena, agradable y perfecta.
 Así que, cuando la vida parezca difícil, y estamos siendo golpeados y empujados casi al borde de nuestra capacidad para resistir; cuando nuestro mundo parece estar girando sin control; cuando nos sentimos en el horno de la prueba; cuando la vida parece “heder”, intente esto: hágase una taza de su té favorito en su tacita más bonita, siéntese y piense en esta historia y, entonces, ¡tenga una conversación con el Alfarero!
 <br><br>
 🌟Deseo que os guste esta historia de LA TAZA Y EL ALFARERO y que de alguna forma nos hace reflexionar e ir hacia el interior de cada uno de nosotros.
<br><br>
</p>

			<!--IMAGEN PRINCIPAL-->
		<div style='text-align:center; margin-bottom:30px; maring-top:50px;'>
			<img src='img/firmalaura.png' width='150'>
		</div>





		</div><!--fin de contenido-->


	</div><!--Fin POST LECTURE-->


<div class='perfil'>

<div class='fotoPerfil'></div>
<div class='bioPerfil'>
	<h6>Laura Esriba Carrasco</h6>
	<p>
	Escritora de la Saga Sensaciones, Mentora prfosional, Emprendedora y Empresaria <br>
laura nos ha deleitado con sus tres primeras obras <br>
El Arte de tomar las riendas de tu vida<br>
El Arte de Disfrutar tu vida<br>
El poder de tu deseo<br>
Conoce a laura y su trabajo y toma las riendas de tu vida
		<button type="button" class="btn btn-secondary btn-sm"  style='height:20px; padding-top:0px; background-color:#b30000;;'>Leer Mas</button>
		
		<div style='text-align:center; margin-top:10px;'>
			<button type="button" class="btn btn-dark">Habla Personalmente con Laura</button>
		</div>
	</p>
</div>
<br></br><br></br><br></br><br></br>
</div><!--Fin de Perfil-->


		
</div><!--Fin de Main Content-->







<div class='aside-banner' style='height:1700px;'>


	
</div><!--fin de aside banner-->

			

<!-------------------------------FIN DEL POST POST------------------------------------------>





















<footer>

	<div class="footer-left"  >
		<div>
			<img src='.../../img/logo3.png' width='180px'/>
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
				<a href='https://www.facebook.com/avelun' target='_blank'><img src='../../img/face.png' width='50' style='margin-left:10px;' ></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://www.instagram.com/avelun_v/' target='_blank'><img src='../../img/insta.png' width='50' style='margin-left:20px;'></a>
			</div>
			<div style='display:inline-block;'>
			<a href='https://twitter.com/avelunv' target='_blank'><img src='../../img/twit.png' width='50' style='margin-left:20px;' ></a>
			</div>
		</div>
                
	</div>

	<div style='background-color:#444243; height: 50px; text-align:center; color:white; padding-top:15px; font-size:12px; float: left; width: 100%;' >
	© 2020. Systems Admins C.A. Todos los derechos reservados.
	</div>

</footer>



</body>
</html>