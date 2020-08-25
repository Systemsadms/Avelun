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

$urlProductos = $_POST['productos'];

 
?>





<div id='demode' style='background: rgba(0, 0, 0, 0.4); display:none; position: fixed; top:0; right: 0; left: 0; bottom: 0; text-align: center;'>
    
        <div class="popupCompra">

                <div style="width: 100%; height: 35px; background-color: none;">
                    <button onclick="apa()" style="width: 30px; background-color: red; color: white; border: none; opacity: 0.5; margin-top: 5px; margin-right: 5px; height: 25px; float: right;">X</button>
                </div>



                <div style="width: 100%; height: 550px; background-color: none;">
        
                    <div style="width: 350px; height: 520px; background-color: blue; display: inline-block; vertical-align: top; ">
                        
                        <img src="" id="image" style="width: 350px; height: 520px;" />

                    </div>



                    <div style="width: 240px; height: 520px; background-color: none; display: inline-block; text-align: center;">
                        
                        <h6 id="producto" style="text-align: center; margin-left: 20px; margin-right: 20px;"></h6>

                        <h4 id="productoPrecio" style="color: red; margin-top: 300px; text-align: center; margin-left: 20px; margin-right: 20px; margin-bottom: 30px;"></h4>


                        <form name="formu" id="formu" action='cestinComprar.php' method="post">

                        <button type="submit" style="width: 100px; background-color: black; color: white; border: none; opacity: 0.5; height: 25px; margin: 0 auto;  ">COMPRAR</button>

                            <input type="text" name="patria" id="patria" class="hidden">

                            <input type="text" name="urlOne" id="urlOne" class="hidden">

                            <input type="text" name="urlTwo" id="urlTwo" class="hidden">

                        </form>

                    </div>



                </div>


        </div>



</div>





            
<div id='demo' style="background-color: none; width: 100%; height: auto; text-align: center; margin-top: 30px;"></div>



<div style="margin: 80px auto; width: 200px; border-radius: .25rem; border: 1px solid rgba(0,0,0,.125); text-align: center; padding-top: 10px; color: #007bff; background-color: #f1f1f1; cursor: pointer ;" onclick="paginacion()">

<img src="img/flechaAbajo.png" width="20" style="display: inline-block;">
<p style="display: inline-block;">Ver mas</p>

</div>


<?php
        include ("footer.php");
    ?>





<script type="text/javascript">

  
var numUrl = "<?php echo $urlProductos;?>";





    function apa(){
        document.getElementById('demode').style.display='none';

    }







    

            function initProductsView() {
            var url = "https://decomprasporlared.com/restapi/product/list/category/"+numUrl+"/1/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);



           
            var key;
            

                for (key in dataArray['data']) {
                //i++
               // console.log(' id=' + key + ' titulo=' + dataArray['data'][key]['title']);

                var img = new Image();
                img.src = dataArray['data'][key]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");

        

                        var divContenedor = document.createElement("p");
                        divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                        divContenedor.setAttribute("id",key)
                        divContenedor.setAttribute("class", "prototipo")
       

                        
                        divContenedor.onclick = function apu(){
            

            if ( (this.id) ) {

                    var ides = this.id;

                    document.getElementById('demode').style.display='block';

                    document.getElementById('image').src = dataArray['data'][ides]['imageurl'];

                    document.getElementById('producto').innerHTML = dataArray['data'][ides]['title'];

                    document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][ides]['priceinfo']['price'];

                    document.getElementById('patria').value = ides;
            
                    document.getElementById('urlOne').value = url;

                    
                    } 

            

                   
                    
        };



            




    

                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][key]['title']);
                        parrafo.appendChild(nombre);



                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][key]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);





                        




            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
         

            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL FOR*/






            } /* FIIIIIIIIIN DEL IF JASON*/



            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/



            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();


            } /*FIIIIIIIIN DE LA FUNCION initProductsView*/


            initProductsView() ;































            var numeroInicial = 1;


            function paginacion(){

                
                numeroInicial++;


            var url2 = "https://decomprasporlared.com/restapi/product/list/category/"+numUrl+"/"+numeroInicial+"/";
            var xhttp = new XMLHttpRequest();
            console.log(url2);
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);



           
            var key;
            

                for (key in dataArray['data']) {
                //i++
               // console.log(' id=' + key + ' titulo=' + dataArray['data'][key]['title']);

                var img = new Image();
                img.src = dataArray['data'][key]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");

        

                        var divContenedor = document.createElement("p");
                        divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                        divContenedor.setAttribute("id",key)
                        divContenedor.setAttribute("class", "prototipo")
       

                        
                        divContenedor.onclick = function apu(){
            

            if ( (this.id) ) {

                    var ides = this.id;

                    document.getElementById('demode').style.display='block';

                    document.getElementById('image').src = dataArray['data'][ides]['imageurl'];

                    document.getElementById('producto').innerHTML = dataArray['data'][ides]['title'];

                    document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][ides]['priceinfo']['price'];
            
                    document.getElementById('patria').value = ides;

                    document.getElementById('urlTwo').value = url2;

                    document.getElementById('urlOne').value = "";


                    

                    
                    } 

            

                   
                    
        };



            




    

                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][key]['title']);
                        parrafo.appendChild(nombre);



                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][key]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);





                        




            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
         

            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL FOR*/






            } /* FIIIIIIIIIN DEL IF JASON*/



            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/



            xhttp.open("POST", url2, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();


            
                    







             




        




    






            }/* FIIIIIIIIIN DE LA FINCION PAAAGINAAACION*/










































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