<?php
	
	class Controlador_itemmenu{



  //********************* METODO CONSULTA PASSWORD  *******************************	
    public static function ItemMenuPswControlador(){


        $encryptionMethod = "AES-256-CBC"; // AES is used by the U.S. gov't to encrypt top secret documents. 
            $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff"; //To encrypt 



           $respuesta = Datositemmenu::consultaItemdelo("psw");

                    	foreach ($respuesta as $row => $item) {

                         $password = $item["psw_psw"]; 



                         $password = $item["psw_psw"]; 
                         $decryptedMessage = openssl_decrypt($password, $encryptionMethod, $secretHash); 
                          echo '   


                          
                          <div class="textareaoculto">
                                <textarea  id="divcopyp1'.$item["psw_id"].'">'.$item["psw_usu"].'</textarea>
                                <textarea  id="divcopyp2'.$item["psw_id"].'">'.$decryptedMessage.'</textarea>
                          <div>


        


                          <tr>

                            <td>'.$item["psw_apli"].'</td>
                            <td>'.$item["psw_usu"].'</td>
                            ';
                            
                        if ($item["psw_usu"]!=null) {
                          echo '<td class="text-center"><button class="btn btn-sm btntablecopy" onclick="CopyToClipboard(\'divcopyp1'.$item["psw_id"].'\')"></button></td>';
                        }else{
                          echo '<td></td>';
                        }


                            echo '
                            
                            <td>'.$decryptedMessage.'</td>
                            <td class="text-center"><button class="btn btn-sm btntablecopy" onclick="CopyToClipboard(\'divcopyp2'.$item["psw_id"].'\')"></button></td>
                            
                          </tr>
                          ';

                         }
                

              
  }

            

//********************* METODO CONSULTA COMANDOS  *******************************	

  public static function ItemMenuCmdControlador(){


                    

                  $respuesta = Datositemmenu::consultaItemdelo("cmd");

                    foreach ($respuesta as $row => $item) {

                        echo '   
                        <div class="textareaoculto">
                        <textarea  id="divcopyp1'.$item["cmd_id"].'">'.$item["cmd_com"].'</textarea>
                        </div>
      
                        <tr>

                          <td>'.$item["cmd_des"].'</td>
                          <td class="text-center"><button class="btn btn-sm btntablecopy" onclick="CopyToClipboard(\'divcopyp1'.$item["cmd_id"].'\')"></button></td>
                          
                        </tr>
                        ';

                       }
              

            
   }
    

 //********************* METODO CONSULTA SCRIPTS  *******************************	

  public static function ItemMenuScpControlador(){

                $respuesta = Datositemmenu::consultaItemdelo("scp");

                  foreach ($respuesta as $row => $item) {

                      echo '   
                      
                      <div class="textareaoculto">
                      <textarea  id="divcopyp1'.$item["scp_id"].'">'.$item["scp_scp"].'</textarea>
                      </div>
    
                      <tr>

                        <td>'.$item["scp_des"].'</td>
                        <td class="text-center"><button class="btn btn-sm btntablecopy" onclick="CopyToClipboard(\'divcopyp1'.$item["scp_id"].'\')"></button></td>
                        
                      </tr>
                      ';

                     }
            

          
  }
  



    
    }