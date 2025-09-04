

        <?php //************* ADMINISTRACÍON DE REPOTES **************
	
        class Controlador_consulReport {
    

#CONSULTA DE REPORTES POR USUARIO
	#------------------------------------		

public function consulUsuariosReportControlador(){

        $respuesta = Datos_consulReport::consulUsuariosReportModelo("usuarios");

        foreach ($respuesta as $row => $item) {
    
                    echo '
                                <option value="'.$item["usuario"].'">'.$item["nombres"].'</option>
                    
                        ';

                        }

        }



        


    }
