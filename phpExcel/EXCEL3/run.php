<?php 

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';

$objPHPExcel = PHPExcel_IOFactory::load("myfile.xlsx");
$objPHPExcel->setActiveSheetIndex(0);
$row = $objPHPExcel->getActiveSheet()->getHighestRow()+1;
//echo $row;
$objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, 'r');
$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, 'q');
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('myfile.xlsx');
?>