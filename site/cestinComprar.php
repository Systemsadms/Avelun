
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


    ?>




<?php

$ides = $_POST['patria'];

$urlOne = $_POST['urlOne'];

$urlTwo = $_POST['urlTwo'];


 
?>
    


<br><br><br>
            
<div style="background-color: none; width: 100%; height: auto; text-align: center; margin-top: 30px; text-align: center;">




<div class="comprarCestinImg">




                <div style="width: 100%; height: 700px; background-color: none;">
        
                    <div style="width: 350px; height: 520px; background-color: none; display: inline-block; vertical-align: top; ">
                        
                        <img src="" id="image" style="width: 350px; height: 520px;"/>
                        <br><br>

                        <h6 id="producto" style="text-align: center; margin-left: 20px; margin-right: 20px;"></h6>
                        <br>

                        <h4 id="productoPrecio" style="color: red; text-align: center; margin-left: 20px; margin-right: 20px; margin-bottom: 30px;"></h4>

                    </div>




                </div>


        </div>











<div class="comprarCestinForm">


                    <div class="modal-content" style="width: 400px; display: inline-block;">
                      <div class="modal-body" style="width: 400px;">
                        <form method='post' action='enviar_solicitud.php'>

                                <input type='hidden' name='producto' value='<?php echo $nombre ?>'/>
                                <input type='hidden' name='marca' value='<?php echo $marca ?>'/>

                                  <div class="form-group" style="width: 100px;">
                                    <label for="exampleFormControlInput1" style="font-size: 17px;">Cantidad</label>
                                    <input style="height: 40px;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="0" name='cantidad' required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1" style="font-size: 17px;">Modo de Envio</label>
                                    <select  style="height: 40px;" class="form-control" id="exampleFormControlSelect1" name='envio'>
                                      <option>Delivery</option>
                                      <option>Aereo</option>
                                      <option>Maritimo</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-size: 17px;">Nombre y Apellido</label>
                                    <input style="height: 40px;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="your Name" name='nombre' required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-size: 17px;">Email address</label>
                                    <input style="height: 40px;" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name='email' required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1" style="font-size: 17px;">Telefono</label>
                                    <input style="height: 40px;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Coloca el codigo de area Ejm: +(58) 212" name='telefono' required>
                                  </div>

                                  

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1" style="font-size: 17px;">Dejanos un comentario</label>
                                    <textarea style="height: 70px;" class="form-control" id="exampleFormControlTextarea1" rows="3" name='mensaje'></textarea>

                                    <input type='hidden' name='id' value='<?php echo $id ?>' />
                                    <input type="submit" name="enviar_solicitud" value="Enviar Orden de Compra" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;" >
                                  </div>
                                </form>
                      </div>
                    </div>


</div>







</div>

<br><br><br><br><br><br><br><br><br>

<?php
    include ("filtroFooter.php");
    include ("footer.php");
  ?>


<script type="text/javascript">

 
    

            function initProductsView() {
            var url1 = "<?php echo $urlOne;?>";

            var url2 = "<?php echo $urlTwo;?>";

            var url = url1+url2;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            //console.log(dataArray);


            var idProducto = "<?php echo $ides;?>";







            document.getElementById('image').src = dataArray['data'][idProducto]['imageurl'];

            document.getElementById('producto').innerHTML = dataArray['data'][idProducto]['title'];

            document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][idProducto]['priceinfo']['price'];

            








            }



            };



            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();


            }


            initProductsView() ;




</script>

<!--
Moda y accesorios
- Bolsos de mujer
- Botas mujer
- Pendientes mujer
- Collares mujer
- Vestidos mujer
- Vestidos oficina
- Vestidos fiesta
- Vestidos casual
- Blusas y camisas
- Bolsos bandolera
- Mocasines mujer
- Joyería mujer
- Anillos mujer

Categoría
6 - Vestidos mujer
7 - Botas mujer
8 - Bolsos de mujer
9 - Pendientes mujer
10 - Collares mujer
28 - Vestidos oficina
29 - Vestidos fiesta
30 - Vestidos casual
31 - Blusas y camisas
32 - Running mujer
-->

</body>
</html>