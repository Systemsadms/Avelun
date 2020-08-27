<?php 
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Avelun</title>
    <meta charset="UTF-8">
  <meta name=”description” content="Avelun es el mejor sitio para mujeres, encontrar una tienda online, consultorias medicas, farmacologicas, mentorias, ayudas profesionales y mas" />
  <meta name="keywords" content="tienda, ropa, calzado, joyeria, zapatos, moda, salud, medicina"/>
  <meta name="author" content="Systems Admins C.A" />
  <meta name="copyright" content="Systems Admins C.A" />
  <meta name="robots" content="index, follow">
  <meta name="google" content="nositelinkssearchbox">

<link rel="icon" type="image/png" href="img/lun.png">
<link href="../css/estilos.css"  rel="stylesheet" type="text/css">
<link href="../css/mediaStyle.css"  rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




<script type="text/javascript" src="script/scripts.js"></script>


</head>

<body style="margin: 0px;">

    <?php

include ('menu.php');

?>






<div style="text-align: center; width: 100%; margin-top: 100px;">
    <h3>Inisiar Session</h3>
<div style="display: inline-block; width: 250px; height: auto; background-color: none; margin-top: 50px;">


   <form method='post' action='#'>
<div class="row">
    <div class="col">
      <input type="text" name='user' class="form-control" placeholder="Usuario">
    </div>
</div>

<br>
<div class="row">
    <div class="col">
      <input type="text" name='pass' class="form-control" placeholder="Contraseña">
    </div>
</div>
<br>


    <input type='submit' value='Cargar' name='cargar'/>

  </div>
</form>


<?php
  
    if (isset($_POST['cargar'])) {

      $user = $_POST['user'];
      $pass = $_POST['pass'];
    
      
    if ($user == 'admin' && $pass == 'admin')
      {
              
      $_SESSION['admin'] = $user ;

         ?>


        <script type="text/javascript">

  window.location.href="cargar_fotos.php";



</script>




 <?php

      }

    else
      {
    ?>    
        <h3 style="color: red;">El usuario o la contraseña son incorrectos!!</h3>

<?php
       
        
      } 



 } /*Fin del isset cargar*/

  
?>







    
</div> 
</div>



</body>
</html>