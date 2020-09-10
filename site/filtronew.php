<?php
	include ("header.php");
?>

<body>

<?php
	include ("modal-vida.php");
?>

<div class="container-fluid">
	<?php
		include ("nav.php");
		include ("departamentos.php");
		include ("banner.php");
		include ("marcas.php");
?>

	

<?php
		include ("filtro-productos.php");




if(isset($_POST['productos'])){
	 
	 $productos = $_POST['productos']
?>

<div class="row" style="margin-top: 30px;">






<div class="" style="background-color: none; text-align: center; padding-bottom: 10px; margin-top: 10px;">
				
<?php


require ('../cnx.php');

 

$ssql = "SELECT * FROM productos WHERE tipo='$productos'";
$result = mysqli_query($conexion,$ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);

$consulta = "SELECT * FROM productos WHERE tipo='$productos' ";
$result = mysqli_query($conexion,$ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$marca = $row['marca'];


							
							$hacerconsulta2 = $conexion->query($consulta);
                            
							echo "<div style='background-color:none;'>";
							
							
							
							$reg = mysqli_fetch_array($hacerconsulta2);

							while ($reg)
							{
                            
							echo "
							
							<div style='width:300px; background-color:none; display:inline-block; margin-right:20px; margin-bottom:30px;'>
							<form method='post' action='producto.php'>
								<div> <input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='intranet/fotos_principales/".$reg[8]."' /></div>
								<div><input type='submit'  value='".$reg[1]."' style='color:#007bff; width:300px; height:auto; border:none; background-color:white;'/></div>
								<div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div>	
								<input type='hidden' name='modelo' value='".$reg[3]."'/>
								<input type='hidden' name='marca' value='".$marca."'/>	
								</form>					
							</div>
							
							";
							

							$reg = mysqli_fetch_array($hacerconsulta2);
							
							}
							echo "</div>";
							mysqli_close($conexion);


?>

		

</div>	


	</div><!-- Fin del div class row--> 

















<?php
}

		include ("footer.php");
	?>
</div><!--Container END-->






</body>
</html>