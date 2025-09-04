  // FUNCION AUTO CERRADO DE SESIÓN

function repetirFinishSesion(){
    setInterval(killerSession,18000000);  // 18000000 se repetira cada 5 minutos

}

 
function killerSession(){


          var dato = new Date();
          var hora = dato.getHours();
          var minutos = dato.getMinutes();
          var horacompleta=hora+""+minutos;
          

  console.log("Hora actual "+dato);

        if (horacompleta>1831){
          

          window.open('index.php?ir=salir','_top');

          

        }






}
