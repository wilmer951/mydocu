<?php //************* ADMINISTRACIÓN DE CONTRASEÑAS **************
	


    
	class Controlador_subPsw  {



//********************* INGRESO  DE CONTRASEÑAS  *******************************




public function ingresarPswControlador(){




    if(isset($_POST["namemoduloingresar"])){



        $password = $_POST["namePswingreso"]; 
        $encryptionMethod = "AES-256-CBC"; // AES is used by the U.S. gov't to encrypt top secret documents. 
        $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff"; //To encrypt 
        $passwordencryptado = openssl_encrypt($password, $encryptionMethod, $secretHash); //To Decrypt 
        $decryptedMessage = openssl_decrypt($encryptedMessage, $encryptionMethod, $secretHash); //Result 


        $datosController = array( "nameaplicacion"=>$_POST["namemoduloingresar"],
                                  "nameusuario"=>$_POST["nameUsuarioingreso"], 
                                  "namepsw"=>$passwordencryptado,
                                   "nameidmodulo"=>$_POST["nameIdModuloingreso"])
        ;
        
        
    

    $respuesta = DatosSubPsw::ingresarPswModelo($datosController, "psw");

        if($respuesta == "success"){
            
            
        header("location:index.php?ir=subPsw&st=ok");



        }

        else{

            
        header("location:index.php?ir=subPsw&st=fail");
        }

    
            }

        }





//********************* CONSULTA DE CONTRASEÑAS  *******************************




        public function consultarPswControlador(){

	
            $encryptionMethod = "AES-256-CBC"; // AES is used by the U.S. gov't to encrypt top secret documents. 
            $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff"; //To encrypt 


            $respuesta = DatosSubPsw::consultarPswModelo("psw");
    
                foreach ($respuesta as $row => $item) {

                    $password = $item["psw_psw"]; 
                 
                    
                    $decryptedMessage = openssl_decrypt($password, $encryptionMethod, $secretHash); //Result 


            echo'
    
    
    
                        <tr>
                                <th scope="row">'.$item["psw_id"].'</th>
                                <td>'.$item["psw_apli"].'</td>
                                <td>'.$item["psw_usu"].'</td>
                                <td>'.$decryptedMessage.'</td>
                                <td>'.$item["psw_mod"].'</td>
                                
                                <td>
                                        <button type="button" class="btn btn-outline-primary btnedit"   data-bs-toggle="modal" data-bs-target="#modalEditar" onclick="functionEditarPsw(\''.$item["psw_id"].'\')">
                                            
                                        </button>
                                </td>
                                <td>
                                            <button type="button" class="btn btn-outline-danger btndel" data-bs-toggle="modal" data-bs-target="#modalborrado" onclick="functionBorrarPsw(\''.$item["psw_id"].'\')">
                                            
                                            </button>
                                </td>
                                </tr>
                    ';
        
    
                    }
                }
                





#CONSULTAR EDICION DE PSW
	#------------------------------------
    public function consEditarPswControlador($idpsw){



        $respuesta = DatosSubPsw::consEditarPswModelo($idpsw,"psw");
        
         echo json_encode($respuesta);
      
      
      }
      

#ACTUALIZAR  DE PSW
	#------------------------------------
	public function actualizarPswcontrolador(){

		if(isset($_POST["idpswEditar"])){

    
            $password = $_POST["namepsweditar"]; 
            $encryptionMethod = "AES-256-CBC"; // AES is used by the U.S. gov't to encrypt top secret documents. 
            $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff"; //To encrypt 
            $passwordencryptado = openssl_encrypt($password, $encryptionMethod, $secretHash); //To Decrypt 
            $decryptedMessage = openssl_decrypt($encryptedMessage, $encryptionMethod, $secretHash); //Result 




				$datosController = array( "idpsw"=>$_POST["idpswEditar"],
										  "apli"=>$_POST["nameaplicacioneditar"],
										  "usuario"=>$_POST["nameusuarioeditar"],
										   "psw"=>$passwordencryptado,
									      "idmodulo"=>$_POST["nameidmodueditar"]

									  );

				
			

			

				$respuesta = DatosSubPsw::actualizarPswModelo($datosController, "psw");



				if($respuesta == "success"){
					
					
				header("location:index.php?ir=subPsw&st=ok");



				}

				else{

					
				header("location:index.php?ir=subPsw&st=fail");
				}
	
			
			}


		}



//********************* BORRAR PSW  *******************************


public function borrarPswControlador(){

    if(isset($_POST["idpswBorrado"])){

        $datosController = $_POST["idpswBorrado"];
        
        $respuesta = DatosSubPsw::borrarPswModelo($datosController, "psw");

        if($respuesta == "success"){

            header("location:index.php?ir=subPsw&st=ok");
        
        }else{

            header("location:index.php?ir=subPsw&st=fail");

        }


    }

}




    }//fin clase principal