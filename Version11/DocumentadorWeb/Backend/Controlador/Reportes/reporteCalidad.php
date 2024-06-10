<?php
if (PHP_SAPI == 'cli')
	die('Este ejemplo sólo se puede ejecutar desde un navegador Web');

/** Incluye PHPExcel */
require_once dirname(__FILE__) . '../../Classes/PHPExcel.php';
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("Wilmer PUlido")
							 ->setLastModifiedBy("Wilmer PUlido")
							 ->setTitle("Reporte DocumentadorWeb")
							 ->setSubject("Office 2010 XLSX")
							 ->setDescription("Desarrollado por Wilmer PUlido")
							 ->setKeywords("office 2010 openxml php")
							 ->setCategory("Reporte Calidad.");


							 // OBTNER ZONA HORARIO FECHA Y HORA
							 $zona= date_default_timezone_set("America/Bogota");
							 $fecha=date('d-m-y h:i:s');


// logo


$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('test_img');
$objDrawing->setDescription('test_img');
$objDrawing->setPath('logoIdemia.png');
$objDrawing->setCoordinates('A1');                      
//setOffsetX works properly
$objDrawing->setOffsetX(5); 
$objDrawing->setOffsetY(5);                
//set width, height
$objDrawing->setWidth(100); 
$objDrawing->setHeight(35); 
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());


$objDrawing->setCoordinates('E1');

// logo

// Combino las celdas desde A1 hasta E1
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('C1:E1');
//$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:B2');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B1', 'Reporte Calidad')
			->setCellValue('C1', $fecha)
			->setCellValue('B2', 'Versión 1.1')

	
			
            
            ->setCellValue('A9', 'Usuario')
			->setCellValue('B9', 'Nombres')
            ->setCellValue('C9', 'T. Llamada')
			->setCellValue('D9', 'Fecha')
			->setCellValue('E9', 'N. Caso')
			->setCellValue('F9', 'N. Calidad')
			->setCellValue('G9', 'N. Soporte')
			->setCellValue('H9', 'N. Documentación')
			->setCellValue('I9', 'N. Promedio')
			->setCellValue('J9', 'N. Reporte')
			;
			
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('size' => 9,'bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));

$objPHPExcel->getActiveSheet()->getStyle('A1:J8')->applyFromArray($boldArray);		

	
			
//Ancho de las columnas

$objPHPExcel->getActiveSheet()->getColumnDimension('a')->setWidth(10);	
$objPHPExcel->getActiveSheet()->getColumnDimension('b')->setWidth(40);	
$objPHPExcel->getActiveSheet()->getColumnDimension('c')->setWidth(10);	
$objPHPExcel->getActiveSheet()->getColumnDimension('d')->setWidth(15);			
$objPHPExcel->getActiveSheet()->getColumnDimension('e')->setWidth(15);			
$objPHPExcel->getActiveSheet()->getColumnDimension('f')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('g')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('h')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('i')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('j')->setWidth(10);

$usuer="";



if(isset($_POST["usuario"])){
	$usuer=$_POST["usuario"];
}


if(isset($_POST["fechini"])){
	$fecha1=$_POST["fechini"];
}

if(isset($_POST["fechfin"])){
	$fecha2=$_POST["fechfin"];
}







/*Extraer datos de MYSQL*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'dbdocupro');
	$con->set_charset('utf8');

    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$sql="SELECT 
	calidad.cal_nreporte,
	calidad.cal_id_user,
	usuarios.nombres,
	calidad.cal_tiem,
	calidad.cal_fecha,
	calidad.cal_ncaso,
	calidad.cal_caltotal,
	calidad.cal_soptotal,
	calidad.cal_docutotal 
	
	FROM `calidad` 
	
	INNER JOIN usuarios ON CALIDAD.cal_id_user=usuarios.usuario 
	 
	 WHERE calidad.cal_id_user LIKE '%$usuer%' and  calidad.cal_fecha BETWEEN '$fecha1' and '$fecha2' order by calidad.cal_fecha asc";
	

	$query=mysqli_query($con,$sql);
	$cel=10;//Numero de fila donde empezara a crear  el reporte
	
	while ($row=mysqli_fetch_array($query)){
		
		
		$usuario=$row['cal_id_user'];
		$nombres=$row['nombres'];
		$tipoalerta=$row['cal_tiem'];
		$confirmacion=$row['cal_fecha'];
		$fecha=$row['cal_ncaso'];
		$ncalidad=$row['cal_caltotal'];
		$nsoporte=$row['cal_soptotal'];
		$ndocu=$row['cal_docutotal'];
		$nreporte=$row['cal_nreporte'];

		$subnota=$ncalidad+$nsoporte+$ndocu;
		$npromedio=round($subnota/3,2);


		
			$a="A".$cel;
			$b="B".$cel;
			$c="C".$cel;
			$d="D".$cel;
			$e="E".$cel;
			$f="F".$cel;
			$g="G".$cel;
			$h="H".$cel;
			$i="I".$cel;
			$j="J".$cel;
			
			
			// Agregar datos
			$objPHPExcel->setActiveSheetIndex(0)
            
            ->setCellValue($a, $usuario)
			->setCellValue($b, $nombres)
            ->setCellValue($c, $tipoalerta)
            ->setCellValue($d, $confirmacion)
			->setCellValue($e, $fecha)
			->setCellValue($f, $ncalidad.'%')
			->setCellValue($g, $nsoporte.'%')
			->setCellValue($h, $ndocu.'%')
			->setCellValue($i, $npromedio.'%')
			->setCellValue($j, $nreporte);
			
	$cel+=1;
	
	
	}

/*Fin extracion de datos MYSQL*/

if ($cel>11) {
	$rango="A9:$j";
}else {
	$rango="A9:J11";
}
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'BLACK')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte calidad');



// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ReporteCalidad.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;