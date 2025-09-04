<?php



class Ajax_utilidades{

    public $anonar;
	public $mesnar;
	public $dianar;
	public $anoexr;
	public $mesexr;
	public $diaexr;



    


//******************** CALCULAR EDAD. //********************


public function calcularEdadAjax(){


    

    $anona=$this->anonar;
    $mesna=$this->mesnar;
    $diana=$this->dianar;
    
    $anoex=$this->anoexr;
    $mesex=$this->mesexr;
    $diaex=$this->diaexr;
    
    if($mesna>12||$mesex>12||$diana>31||$diaex>31)
            { 
                echo "Los dotos ingresados son incorrectos";
    
            }
    
    
            else{
    
                $edadan=$anoex-$anona;
                $edadme=$mesex-$mesna;
                $edaddi=$diaex-$diana;
    
    
                if ($mesex== 2) 
    
                {
                    if (($anoex % 4 == 0) && (($anoex % 100 != 0) || ($anoex % 400 == 0))) 
                    {	
                        $dias= 29;
                    } else 
    
                    {
                        $dias= 28;
                    }
    
                } 
    
                else if ($mesex<= 7) 
    
    
                {
    
                    if ($mesex== 0) 
    
                    {
    
                        $dias = 31;
    
                    } 
    
    
                    else if ($mesex% 2 == 0) 
    
                    {
    
                        $dias = 30;
    
                    } 
    
    
                    else 
    
                    {
    
                        $dias = 31;
    
                    }
    
                } 
    
    
                else if ($mesex> 7) 
    
    
                {
                    if ($mesex% 2 == 0) 
    
    
                    {
                        $dias  = 31;
    
                    } 
    
                    else 
    
                    {
    
                        $dias  = 30;
    
                    }
    
                }
    
    
    
                if($edaddi<0){
    
                    $edaddi=$edaddi+$dias;
                    $edadme=$edadme-1;
    
                }
    
                if($edadme<0)
                {
    
                    $edadme=$edadme+12;
                    $edadan=$edadan-1;
    
                }
    
    
    
                if ($edadan<0||$edadme<0||$edaddi<0) {
                    echo 'Datos erroneos';
                }else{
    
                    echo 'La edad es de <h5>'.$edadan.' años '.$edadme.' meses '.$edaddi.' dias </h5>';
    
                }
    
    
    
    
            }
    
    }





 }//fin clase principal


 if(isset($_POST["anona"])){

	$l = new Ajax_utilidades();
	$l -> anonar= $_POST["anona"];
	$l -> mesnar= $_POST["mesna"];
	$l -> dianar= $_POST["diana"];
	$l -> anoexr= $_POST["anoex"];
	$l -> mesexr= $_POST["mesex"];
	$l -> diaexr= $_POST["diaex"];
	$l -> calcularEdadAjax();


}
