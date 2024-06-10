/*=============================================
COPIAR A PORTAPAPLES
=============================================*/


function CopyToClipboard(text) {

  

    
      var copyTextarea = document.querySelector('#'+text+'');
      
      copyTextarea.select();


      
    
      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
      } catch (err) {
        console.log('Oops, unable to copy');
      }
    };



    function CopyToClipboard2(copyId){


      
      let inputElement = document.createElement("input");
      inputElement.type = "text";
      let copyText = document.getElementById(copyId).innerHTML;
      inputElement.value = copyText;
      document.body.appendChild(inputElement);
      inputElement.select();
      document.execCommand('copy');
      document.body.removeChild(inputElement);
      
  
  }
  




/*=================================================================================================================== ======*/









$("#copiarplantilla").click(function() {


  console.log("copiado a portapapeles");
      
// Selecciona el elemento div que quieres copiar
var div = document.getElementById("divcopicheckPlantilla");
// Obtiene el texto del div, incluyendo los saltos de línea
var text = div.innerText;
// Crea un elemento textarea temporal
var textarea = document.createElement("textarea");
// Asigna el texto al textarea
textarea.value = text;
// Añade el textarea al documento
document.body.appendChild(textarea);
// Selecciona el texto del textarea
textarea.select();
// Copia el texto al portapapeles
document.execCommand("copy");
// Elimina el textarea del documento
document.body.removeChild(textarea);




});
