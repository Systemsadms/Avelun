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
			<h2>COMO ENTRENAR TU MENTE PARA EL ÉXITO</h2>
		</div>

		<!--IMAGEN PRINCIPAL-->
		<div style='text-align:center; margin-bottom:30px;'>
			<img src='img/exito.jpg' class='imgen-post'>
		</div>
		
		<!--CONTENIDO-->
		<div class='postContent'>

			<p class='parrafoPost'>
Al igual que si quieres lucir un cuerpo esbelto y musculoso debes realizar ejercicios de entrenamiento, la mente debe ser entrenada en sus pensamientos si quieres conseguir tener éxito en el área de la vida que elijas o en todas.
<br><br>
Mantener un entrenamiento diario, un trabajo duro es el ecualizador del universo, la acción diaria es lo que te hará que tarde o temprano empieces a conseguirlo.
<br><br>
No todas las personas de tu alrededor van a entender el proceso que conlleva este cambio en tu rutina, solo tú tienes que saber lo que estás dispuest@ a realizar a fin de conseguir tu objetivo.
<br><br>
Hablo de objetivo, y no necesariamente, se tiene que tratar de algo material, puede ser simplemente el querer sentirte bien a pesar de las circunstancias, y esto se debe a una mente fuerte que se consigue entrenando tus pensamientos.
<br><br>
Muchas personas buscan el atajo, el camino más corto y así llegar antes, sin embargo, no es así. El camino corto no te llevará a donde tú quieres, está comprobado que la acción diaria complementada con la FE te hará llegar a donde tú quieras y para ello, debes tener la mente lo suficientemente preparada y solventar cada desafío que se te presente.
<br><br>
No es fácil, porque tendrás personas que no te apoyaran, otras no te comprenderán, otras te criticaran, y no puedes prestar atención a ninguna de ellas o estarás cayendo en la trampa de lo cómodo, de lo fácil y no llegarás a tu meta.
<br><br>
Así que mantente

 
<br><br><br><br>
POSITIVA
<br><br>
ENFOCADA
<br><br>
EN ACCIÓN CONSTANTE
<br><br><br><br>
 

Tu mente es tu aliada, tu fuente de motivación, el centro de operaciones para elegir, decidir y tomar decisiones. Tus pensamientos dependen de ti.  Si los dejas en manos de la suerte, de tus hábitos, de tu entorno, sin responsabilizarte lo único que conseguirás es estar estático en tu mundo.
<br><br>
La vida siempre te pondrá a prueba y siempre tendrás dos opciones: o pararte y rendirte o seguir adelante a pesar de todo. Por eso es muy importante estas claves que te dejo a continuación:			</p>
<br><br>
			<h3 style='margin-top:50px;'>CLARIDAD</h3>
			<p class='parrafoPost'>

Los pensamientos son el director de orquesta que lleva el control de todo. Tal y como piensas, actúas y sientes.
<br><br>
¿Vas a dejar en manos del destino, o de los demás, tu vida?
<br><br>
¿Sabes hacia dónde te diriges? ¿Sabes lo que quieres conseguir con todo lujo de detalles?
<br><br>
Si tienes tu meta clara, resultará difícil rendirte, si por el contrario no lo tienes claro, puede que abandones a la primera de cambio.
<br><br>
Cuando tienes un motivo claro de lo que quieres vivir en esta vida, de cómo te gustaría que fuera tu vida, lo siguiente es saber expresarse correctamente y antes que nada debes eliminar de tu vocabulario los no puedo, estoy cansad@, me da pereza, me duele… por los yo puedo, estoy preparad@, lo estoy consiguiendo, voy a por ello.
<br><br>
Si piensas de forma derrotista, ¿qué crees que obtendrás? Si le mandas la orden a tu cerebro de que esté pendiente de tus malestares en lugar de tu objetivo, ¿Cuál crees que será el resultado?
<br><br>
Por eso tener claridad y mantener un lenguaje positivo contigo harán que tengas más energía, más fuerza, y empieces a ser más positivo.
</p>


			<h3 style='margin-top:50px;'>COMPROMISO</h3>
			<p class='parrafoPost'>

Debes tener un compromiso muy grande contigo. Porque puedes tener todo lo que necesitas para obtener lo que quieres, pero tienes que trabajar, tienes que actuar.
<br><br>
Puedes ser una víctima de tu vida o el maestro de ella y ello dependerá del compromiso que tengas en realizar cada día un pequeño paso hacia tu meta.
<br><br>
En no saltarte ningún ejercicio, en no buscar lo que sea más fácil. Y siempre la decisión es tuya y según tus decisiones obtendrás tus resultados.
<br><br>
Los resultados  hablan solos.


			<h3 style='margin-top:50px;'>FOCO</h3>
			<p class='parrafoPost'>
Vamos por la vida con miedos y no hacemos muchas cosas por esos miedos, a ser rechazados, a que nos digan que no, a que no le den importancia a nuestros sentimientos. Incluso no nos atrevemos a pedir perdón, cuando el perdón es la base de la vida.
<br><br>
Vamos pasando por la vida, simplemente vamos pasando…y no hacemos nada, no nos arriesgamos a nada.
<br><br>
Para tomar acción tienes que tomar una decisión. Una decisión definitiva.
<br><br>
Piensa, decide y actúa.
<br><br>
Y pon el foco en lo que realmente quieres en tu vida. Di Sí a la vida, a lo positivo, a lo bonito, a todo lo que te hace bien.
<br><br>
Piensa que desviarte, te aleja de una vida llena de significado, te aleja de tu felicidad, te aleja de vivir plenamente en sintonía con tu esencia.
<br><br>
Por ello, hay que darse cuenta de que si estás viv@, si respiras, da GRACIAS a la vida y sigue tu camino hacia el bien tuyo y de los demás siempre.
<br><br>
Enfócate en una cosa, haz lo necesario y ve a por la siguiente.
<br><br>
No permitas que la negatividad te saque de tu centro, de tu foco, de tu positividad por vivir bien.  No pierdas ni el foco, ni el norte, ni tu esencia. Vive de acuerdo a tus sensaciones, entiende tus emociones, toma las decisiones adecuadas y actúa en consecuencia. Solo así, obtendrás la felicidad que tanto anhelas
			</p>


			<h3 style='margin-top:50px;'>CREA BUENOS HÁBITOS</h3>
			<p class='parrafoPost'>
Tus hábitos, al igual que tus creencias, te vienen dadas desde pequeñ@, incluso desde antes de nacer.
<br><br>
Hay que cuidarse bien tanto a nivel físico, como mental  y espiritual. Tener estas tres áreas con buenos hábitos te hará ser más fuerte ante cualquier desafío. 
<br><br>
Dormir bien, descansar las horas necesarias y cumplir con nuestra alimentación y ejercicio físico nos mantendrá en armonía.
<br><br>
La mente también necesita descansar y para ello la meditación, crear mandalas, escuchar música relajante te servirá mucho.
<br><br>
Dar las gracias y pedir perdón a diario, te libera y te reconforta anímicamente y espiritualmente.
<br><br>
El Alma te guía en esos momentos, así que escucha tu voz interior y sigue tu instinto
		</p>



		<h3 style='margin-top:50px;'>DECRETA</h3>
			<p class='parrafoPost'>
			Identifica tus pensamientos y si son negativos, si son pensamientos que te alejan de tus sueños, que te hacen sentir mal, libérate de ellos y cámbialos por pensamientos constructivos que te den fuerza.

 

Realizar decretos con firmeza y autoridad, creyendo que lo que estás decretando es un hecho y ya está, te hace ganar más confianza en ti y verás que poco a poco de repetir tus decretos, se van haciendo realidad.
<br><br>
El Secreto está en la REPETICIÓN.
<br><br>
Si a diario ejercitas la mente con pensamientos positivos, con frases que te empoderan, con acción que te acercan cada día un poquito más a tu meta y cada día lo repites, y lo repites hasta la saciedad, ¿Cuál crees que será tu resultado?
<br><br>
Deseo que en un tiempo me cuentes cómo te fue y qué tuviste que hacer para lograr tus SUEÑOS.
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
		Escritora de la Saga Sensaciones y Mentora prfosional. 
		Escritora de la Saga Sensaciones y Mentora prfosional.
		Escritora de la Saga Sensaciones y Mentora prfosional.
		Escritora de la Saga Sensaciones y Mentora prfosional.
		Escritora de la Saga Sensaciones y Mentora prfosional.
		Escritora de la Saga Sensaciones y Mentora prfosional.
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