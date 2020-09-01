<?php 
session_start();

require ('../../cnx.php');



include ("header.php");
 ?>



<body>

<nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(img/starfield-banner.jpg);' >
<div style='margin-left:-16px; padding-left:50px;  width:220px; background-image:url(../img/lunbackground.jpg); background-position:-140px 0px;'> 
    ><img src="../img/logo2.png" width="150" height="50" >
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-auto" style='margin-right:40px;'>
      <li class="nav-item">
        <a class="nav-link" href="../index.php" style='color: white;'>Home</a>
      </li>
    </ul>
  </div>
</nav>









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
      $tienda = 'Mingo';

    
      
   $query = "SELECT * FROM usuarios_admin_tienda WHERE correo ='$user' AND password = '$pass' AND tienda = '$tienda'";
   $result = $conexion->query($query); 
   $num = mysqli_num_rows($result); 


                 if ($num == 1) {
                    

                     $_SESSION['user'] = $user;


                            ?>

                              <script type="text/javascript">
                                window.location.href="cargar_marcas.php";
                              </script>

                            <?php    

                  }


                  else

                    {
                            ?>    
                                <h4 style="color: red; margin-top: 50px;">El usuario o la contraseña son incorrectos!!</h4>

                            <?php
       
        
                     } 



 } /*Fin del isset cargar*/

  
?>



    
</div> 
</div>



</body>
</html>