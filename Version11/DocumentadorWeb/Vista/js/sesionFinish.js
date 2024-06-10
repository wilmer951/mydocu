  // FUNCION AUTO CERRADO DE SESIÓN

function repetirFinishSesion(){
    setInterval(killerSession,3600000);  // 1 hora

}

 
function killerSession(){


  const dato = new Intl.DateTimeFormat(undefined, { 
    timeStyle: "short" ,
    hour12: false,

}).format(new Date());;


          
          
          
        var converhour=parseInt(dato);
  console.log("Hora actual "+converhour);

        if (converhour>=20){
          

          window.open('index.php?ir=salir','_top');

          

        }






}
