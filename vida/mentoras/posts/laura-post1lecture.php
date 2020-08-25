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
			<h2>5 CLAVES PARA CAMBIAR DE MENTALIDAD</h2>
		</div>

		<!--IMAGEN PRINCIPAL-->
		<div style='text-align:center; margin-bottom:30px;'>
			<img src='img/post1Laura.jpg' class='imgen-post'>
		</div>
		
		<!--CONTENIDO-->
		<div class='postContent'>

			<p class='parrafoPost'>
			Existen frases que si no cambian tu vida, por lo menos cambiarán tu mentalidad. Te propongo que te olvides de lo que te dice la gente y de todas las barreras que tú mism@ te pones.
			Nada es Imposible a menos que tú te propongas que así sea. TÚ DECIDES.
			</p>

			<h3 style='margin-top:50px;'>QUERER ES PODER</h3>
			<p class='parrafoPost'>
			Quizás te resuene y hayas escuchado más de una ves que todo es mental, pues es cierto. Todas nuestras motivaciones, nuestros sueños, metas y objetivos nacen de la imaginación y la mente.
			<br><br>
			De ahí viene el que si tú crees que eres capaz, lo harás. Si por el contrario piensas y crees que no, no lo harás. Y siempre tendrás razón. Así que la primera clave para cambiar de mentalidad es llevarte la contraria con tus pensamientos actuales. Si piensas que no puedes, ELIMINA de tu vocabulario el “no puedo” y empieza a pensar en SÍ PUEDO.
			<br><br>
			Todo tiene su entrenamiento. Empieza cada día diciéndote a ti mism@ que sí puedes.
			<br><br>
			“Querer es poder”. Yo no podía sentirme bien cuando me diagnosticaron cáncer, pero quería ponerme bien y hice todo lo que estuvo en mi mano y en mi mente para lograrlo. No paré hasta conseguirlo. Así que no te preguntes si puedes, porque hay mil cosas que no podemos o no sabemos hacer, pero SÍ eres capaz de lograr todo lo que quieras. Ahora bien, piensa y responde sinceramente a esta pregunta: ¿Lo quieres?
			</p>


			<h3 style='margin-top:50px;'>PERSEVERANCIA</h3>
			<p class='parrafoPost'>
			El Secreto de todos los éxitos es la PERSEVERANCIA. Nadie nació sabiendo todo, nadie nació con un talento extraordinario o siendo un genio. Todos desarrollamos nuestras habilidades. Los músicos más famosos no nacieron tocando el violín, los deportistas tardaron años en entrenar su cuerpo y perfeccionar sus técnicas. Todo es práctica y entrenamiento diario y constante.
			<br><br>
			¿Sabías que todos los empresarios más famosos del mundo fracasaron en sus primeros negocios y nadie creía en sus ideas o sus inventos? La gente extraordinaria que conoces hoy, se cayó diez veces pero se levantó once. La única diferencia entre el fracaso y el éxito es NO RENDIRSE.
			<br><br>
			Cuando crees que estás a punto de tirar la toalla porque no puedes más, es el momento decisivo. Pocas personas son las que deciden continuar, si estás leyendo ésto es porque seguramente eres una de ellas y eso te hace diferente a todos. Recuerda que si quieres tener lo que pocos tienen, debes estar dispuesto a hacer lo que pocos hacen.		
			</p>


			<h3 style='margin-top:50px;'>NO TE COMPARES</h3>
			<p class='parrafoPost'>
			Las comparaciones son odiosas, sin embargo vivimos comparándonos y eso no sirve de nada. ¿De qué te sirve medir tus resultados con una persona que ya ha triunfado si tú todavía no has dado el primer paso hacia el camino de tu éxito? ¡Es absurdo! En la vida, la única competencia es contigo mism@. La persona a la que tienes que superar, la ves todas las mañanas en el espejo.
			<br><br>
			Así que lo único importante es que conozcas tus límites, saber hasta dónde puedes llegar es clave para desafiar tus metas. Si eres de las personas que van en la cola y sabes que tus límites son mayores, esfuérzate más, haz más, da todo de ti. Para ser una persona feliz en la vida basta con conocerse, saber tus límites y dar lo mejor de ti siempre. Tener una mente positiva, se hace cada día.
			</p>


			<h3 style='margin-top:50px;'>SE CREATIV@</h3>
			<p class='parrafoPost'>
			Una vez leí un artículo que decía que o estás creando o estás muert@. Y es cierto!! Cada uno de nosotros estamos creando nuestra realidad. Lo que nos sucede lo hemos creado nosotros nos guste o no. Por eso motivo yo decidí darle la vuelta a la tortilla y ser creativa, y si la vida es un sueño y nosotros nos creamos nuestra realidad, vamos a hacerla bonita.
			<br><br>
			No necesitas de inventar dramas ni escenarios exóticos para ser feliz, tus emociones no dependen de ninguna otra persona, ni del lugar, ni de las experiencias, dependen únicamente de ti. Por lo tanto, se creativ@ y utiliza la imaginación para salir de tu zona de confort, para cambiar de tu mentalidad victimista a una mentalidad atractiva y positiva.
			<br><br>
			Cambia tu actitud y perspectiva con respecto a los “problemas” y recupera las Sensaciones para tener una vida llena de emoción.
			</p>


			<h3 style='margin-top:50px;'>CERO EXCUSAS</h3>
			<p class='parrafoPost'>
			Ya has visto que los pretextos sobran, las excusas no te llevan a ninguna parte, así que todo está en la mente y tus logros dependen de las ganas que tengas de cambiar tu mentalidad. Las excusas son para los débiles, los que se conforman. Pregúntate si te conformas con la vida que tienes actualmente y vas a poner excusas para no avanzar o si por el contrario estás dispuest@ a dar el salto y empezar a fortalecer tu mentalidad.
			<br><br>
			Tampoco tienes nada que perder si lo intentas, y te puedo asegurar que si decides hacerlo, no te vas a arrepentir. Cambiar tu forma de pensar hacia un objetivo alcanzable, hacia un pensamiento más positivo y creativo solo te aportará más alegrías, a menos que decidas frustrarte… 
			<br><br>
			La línea que separa tu decisión es muy frágil y has de estar y ser consciente en cada instante del momento en el que estás. El aquí y ahora, el presente es lo único que tenemos.
			</p>

			<h3 style='margin-top:50px;'>TÚ DECIDES… ¿hoy vas a poner excusas o te lanzas al CAMBIO?</h3>


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