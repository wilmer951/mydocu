

$("#imagenmenuperfil").click(function(){
    $(".optioninicio").css('display','block');
    $(".optioncalidad").css('display','none');
    $(".optiodocumentaciones").css('display','none');

    
   
    
             });


$("#btnperfilcalidad").click(function(){
    consultarCalidad();
    $(".optioncalidad").css('display','block');
    $(".optioninicio").css('display','none');
    $(".optionudemy").css('display','none');
    $(".optiodocumentaciones").css('display','none');
   
    
             });





 $("#btnperfilobjudemy").click(function(){

        
        consultarObjudemy();
                $(".optionudemy").css('display','block');
                $(".optioncalidad").css('display','none');
                $(".optioninicio").css('display','none');
                $(".optiodocumentaciones").css('display','none');

              
               
                
    });



    

 $("#btnperfilobjdocumentaciones").click(function(){

    
        
    $(".optiodocumentaciones").css('display','block');
            $(".optionudemy").css('display','none');
            $(".optioncalidad").css('display','none');
            $(".optioninicio").css('display','none');
            

          
           
            
});



             