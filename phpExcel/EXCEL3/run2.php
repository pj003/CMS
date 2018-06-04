<?php 

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';

$objPHPExcel = new PHPExcel();

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'l');
$objPHPExcel->getActiveSheet()->SetCellValue('B1','m');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('myfile.xlsx');    

?>