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
							 ->setCategory("Reporte pausas activas.");


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
            ->setCellValue('B1', 'REPORTE PAUSAS ACTIVAS')
			->setCellValue('C1', $fecha)
			->setCellValue('B2', 'Versión 1.1')

	
			
            
            ->setCellValue('A9', 'Usuario')
			->setCellValue('B9', 'Nombres')
            ->setCellValue('C9', 'Tipo alerta')
			->setCellValue('D9', 'Confirmación')
			->setCellValue('E9', 'Fecha');
			
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('size' => 9,'bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));

$objPHPExcel->getActiveSheet()->getStyle('A1:E8')->applyFromArray($boldArray);		

	
			
//Ancho de las columnas

$objPHPExcel->getActiveSheet()->getColumnDimension('a')->setWidth(8);	
$objPHPExcel->getActiveSheet()->getColumnDimension('b')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('c')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('d')->setWidth(10);			
$objPHPExcel->getActiveSheet()->getColumnDimension('e')->setWidth(25);			

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
	$sql="SELECT report_pa.reportpa_user, usuarios.nombres,report_pa.reportpa_alert_id,report_pa.reportpa_conf,report_pa.reportpa_fecha,alert_pa_ac.alertpa_nom,confirmacion.nomconf  FROM `report_pa` INNER JOIN usuarios on report_pa.reportpa_user=usuarios.usuario INNER JOIN alert_pa_ac on report_pa.reportpa_alert_id=alert_pa_ac.alertpa_id INNER JOIN confirmacion on report_pa.reportpa_conf=confirmacion.item WHERE reportpa_user LIKE '%$usuer%' and  reportpa_fecha BETWEEN '$fecha1' and '$fecha2' order by reportpa_fecha asc";
	

	$query=mysqli_query($con,$sql);
	$cel=10;//Numero de fila donde empezara a crear  el reporte
	
	while ($row=mysqli_fetch_array($query)){
		
		
		$usuario=$row['reportpa_user'];
		$nombres=$row['nombres'];
		$tipoalerta=$row['alertpa_nom'];
		$confirmacion=$row['nomconf'];
		$fecha=$row['reportpa_fecha'];
		
			$a="A".$cel;
			$b="B".$cel;
			$c="C".$cel;
			$d="D".$cel;
			$e="E".$cel;
			
			
			// Agregar datos
			$objPHPExcel->setActiveSheetIndex(0)
            
            ->setCellValue($a, $usuario)
			->setCellValue($b, $nombres)
            ->setCellValue($c, $tipoalerta)
            ->setCellValue($d, $confirmacion)
			->setCellValue($e, $fecha);
			
	$cel+=1;
	
	
	}

/*Fin extracion de datos MYSQL*/

if ($cel>11) {
	$rango="A9:$e";
}else {
	$rango="A9:e11";
}
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'BLACK')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte pausas activas');



// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ReportePausasActivas.xlsx"');
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