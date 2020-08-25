	function openMenu()
    {
      var estilo = document.getElementById("oculto").className;
      if (estilo == "hidden")
      {
      document.getElementById("oculto").className = "show";	
      }
      else 
      {
        document.getElementById("oculto").className = "hidden"; 		
      }
    }


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







    function modalForm1()
    {
      var estilo = document.getElementById("modalForm1").className;
      if (estilo == "hidden")
      {
      document.getElementById("modalForm1").className = "show";
       document.getElementById("modalEnlace").className = "hidden";
       document.getElementById("modalEnlace1").className = "hidden";
       document.getElementById("modalEnlace2").className = "hidden";
       document.getElementById("modalEnlace3").className = "hidden";
       document.getElementById("modalEnlace4").className = "hidden";
       document.getElementById("modalEnlace5").className = "hidden";	
      }      
    }







    function verModalItem()
    {
      var estilo = document.getElementById("modalForm1").className;
      if (estilo == "show")
      {
      document.getElementById("modalForm1").className = "hidden";
       document.getElementById("modalEnlace").className = "show modal-content";
       document.getElementById("modalEnlace1").className = "show modal-content";
       document.getElementById("modalEnlace2").className = "show modal-content";
       document.getElementById("modalEnlace3").className = "show modal-content";
       document.getElementById("modalEnlace4").className = "show modal-content";
       document.getElementById("modalEnlace5").className = "show modal-content";	
      }
      
    }


    function mostrar_btn_comprar()
    {
 
    }

