



    function apa(){
        document.getElementById('demode').style.display='none';

    }










            function initProductsView() {
            var url = "https://decomprasporlared.com/restapi/product/list/category/28/3/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);

            

                var img = new Image();
                img.src = dataArray['data'][2817]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2817")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2817]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2817]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2817]['priceinfo']['price'];
                                document.getElementById('patria').value = "2817";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2817]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2817]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);






            var img = new Image();
                img.src = dataArray['data'][2825]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2825")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2825]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2825]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2825]['priceinfo']['price'];
                                document.getElementById('patria').value = "2825";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2825]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2825]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);







            var img = new Image();
                img.src = dataArray['data'][2827]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2827")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2827]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2827]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2827]['priceinfo']['price'];
                                document.getElementById('patria').value = "2827";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2827]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2827]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][2833]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2833")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2833]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2833]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2833]['priceinfo']['price'];
                                document.getElementById('patria').value = "2833";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2833]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2833]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][2843]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2843")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2843]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2843]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2843]['priceinfo']['price'];
                                document.getElementById('patria').value = "2843";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2843]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2843]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);



            var img = new Image();
                img.src = dataArray['data'][2837]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2837")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2837]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2837]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2837]['priceinfo']['price'];
                                document.getElementById('patria').value = "2837";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2837]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2837]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);



            var img = new Image();
                img.src = dataArray['data'][30399]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","30399")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][30399]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][30399]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][30399]['priceinfo']['price'];
                                document.getElementById('patria').value = "30399";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][30399]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][30399]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);



            var img = new Image();
                img.src = dataArray['data'][2850]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2850")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2850]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2850]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2850]['priceinfo']['price'];
                                document.getElementById('patria').value = "2850";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2850]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2850]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);

            } /* FIIIIIIIIIN DEL IF JASON*/

            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();




            } /*FIIIIIIIIN DE LA FUNCION initProductsView*/
            initProductsView() ;

















































            function initProductsViewDos() {
            var url = "https://decomprasporlared.com/restapi/product/list/category/9/1/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);

            

                var img = new Image();
                img.src = dataArray['data'][470]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","470")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][470]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][470]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][470]['priceinfo']['price'];
                                document.getElementById('patria').value = "470";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][470]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][470]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);






            var img = new Image();
                img.src = dataArray['data'][473]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","473")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][473]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][473]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][473]['priceinfo']['price'];
                                document.getElementById('patria').value = "473";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][473]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][473]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);







            var img = new Image();
                img.src = dataArray['data'][6882]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","6882")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][6882]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][6882]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][6882]['priceinfo']['price'];
                                document.getElementById('patria').value = "6882";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][6882]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][6882]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][10479]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","10479")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][10479]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][10479]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][10479]['priceinfo']['price'];
                                document.getElementById('patria').value = "10479";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][10479]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][10479]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL IF JASON*/

            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();




            } /*FIIIIIIIIN DE LA FUNCION initProductsView*/
            initProductsViewDos() ;






























            function initProductsViewTres() {

            var url = "https://decomprasporlared.com/restapi/product/list/category/8/1/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);

            

                var img = new Image();
                img.src = dataArray['data'][72166]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","72166")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][72166]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][72166]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][72166]['priceinfo']['price'];
                                document.getElementById('patria').value = "72166";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][72166]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][72166]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);






            var img = new Image();
                img.src = dataArray['data'][2240]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","2240")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][2240]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][2240]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][2240]['priceinfo']['price'];
                                document.getElementById('patria').value = "2240";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][2240]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][2240]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);







            var img = new Image();
                img.src = dataArray['data'][72165]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","72165")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][72165]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][72165]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][72165]['priceinfo']['price'];
                                document.getElementById('patria').value = "72165";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][72165]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][72165]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][8132]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","8132")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][8132]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][8132]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][8132]['priceinfo']['price'];
                                document.getElementById('patria').value = "8132";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][8132]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][8132]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL IF JASON*/

            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();

           


             } /*FIIIIIIIIN DE LA FUNCION initProductsView*/
            initProductsViewTres() ;




































            function initProductsViewCuatro() {

            var url = "https://decomprasporlared.com/restapi/product/list/category/10/1/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);

            

                var img = new Image();
                img.src = dataArray['data'][78387]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","78387")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][78387]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][78387]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][78387]['priceinfo']['price'];
                                document.getElementById('patria').value = "78387";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][78387]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][78387]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);






            var img = new Image();
                img.src = dataArray['data'][11729]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","11729")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][11729]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][11729]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][11729]['priceinfo']['price'];
                                document.getElementById('patria').value = "11729";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][11729]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][11729]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);







            var img = new Image();
                img.src = dataArray['data'][12339]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","12339")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][12339]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][12339]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][12339]['priceinfo']['price'];
                                document.getElementById('patria').value = "12339";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][12339]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][12339]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][69515]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","69515")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][69515]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][69515]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][69515]['priceinfo']['price'];
                                document.getElementById('patria').value = "69515";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][69515]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][69515]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL IF JASON*/

            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();


            } /*FIIIIIIIIN DE LA FUNCION initProductsView*/
            initProductsViewCuatro() ;








































            function initProductsViewCinco() {

            var url = "https://decomprasporlared.com/restapi/product/list/category/31/1/";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


            var dataArray = JSON.parse(this.responseText);
            console.log(dataArray);

            

                var img = new Image();
                img.src = dataArray['data'][69055]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","69055")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][69055]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][69055]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][69055]['priceinfo']['price'];
                                document.getElementById('patria').value = "69055";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][69055]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][69055]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);






            var img = new Image();
                img.src = dataArray['data'][9178]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","9178")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][9178]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][9178]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][9178]['priceinfo']['price'];
                                document.getElementById('patria').value = "9178";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][9178]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][9178]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);







            var img = new Image();
                img.src = dataArray['data'][13510]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","13510")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][13510]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][13510]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][13510]['priceinfo']['price'];
                                document.getElementById('patria').value = "13510";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][13510]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][13510]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            var img = new Image();
                img.src = dataArray['data'][13942]['imageurl'];
                img.setAttribute("width", "250px");
                img.setAttribute("height","350px");
                img.setAttribute("style","margin-bottom:20px;");
                var divContenedor = document.createElement("p");
                divContenedor.setAttribute("style", "width:300px; background-color:white; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px; text-align: center; height: 450px;");
                divContenedor.setAttribute("id","13942")
                divContenedor.setAttribute("class", "prototipo")              
                    divContenedor.onclick = function apu(){
                                document.getElementById('demode').style.display='block';
                                document.getElementById('image').src = dataArray['data'][13942]['imageurl'];
                                document.getElementById('producto').innerHTML = dataArray['data'][13942]['title'];
                                document.getElementById('productoPrecio').innerHTML = "$" + dataArray['data'][13942]['priceinfo']['price'];
                                document.getElementById('patria').value = "13942";             
                                document.getElementById('urlOne').value = url;                 
                    } 
                        var parrafo = document.createElement('em');
                        parrafo.setAttribute("style", "color:#007bff; background-color:none; height:auto; display:block; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; margin-bottom:20px;");
                        var nombre = document.createTextNode(dataArray['data'][13942]['title']);
                        parrafo.appendChild(nombre);
                        var divnPrecio = document.createElement('strong');
                        divnPrecio.setAttribute("style", "background-color:none; width:300px; display:block; color:red;");
                        var precio = document.createTextNode("$"+dataArray['data'][13942]['priceinfo']['price']);
                        divnPrecio.appendChild(precio);
            divContenedor.appendChild(img);
            divContenedor.appendChild(parrafo);
            divContenedor.appendChild(divnPrecio);
            document.getElementById('demo').appendChild(divContenedor);




            } /* FIIIIIIIIIN DEL IF JASON*/

            }; /*FIIIIIIIIN DE LA FUNCION onreadystatechange*/

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Accept", "application/json");
            xhttp.send();




            } /*FIIIIIIIIN DE LA FUNCION initProductsView*/
            initProductsViewCinco() ;
