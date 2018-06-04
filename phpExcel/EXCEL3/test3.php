<?php 
include_once('connect1.php');
$classes=$_POST['classes'];


/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();

$objPHPExcel->setActiveSheetIndex(0);
$sql="SELECT  COUNT(`regno`) AS dayss,name
FROM  `new_attn` WHERE classIn='$classes' and reason!='OnDuty' GROUP BY `regno`
ORDER BY `dayss`  DESC";
$result_set=mysqli_query($conn,$sql);
$row = 1; // 1-based index
while($row_data = mysqli_fetch_assoc($result_set)) {
    $col = 0;
    foreach($row_data as $key=>$value) {
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $value);
        $col++;
    }
    $row++;
}
//$rows = mysqli_num_rows($result_set);
//$handling= array();
//while($query=mysqli_fetch_assoc($result_set))
//{
//$handling[]=$query;
//}


//for($i=0;$i<$rows;$i++)
//{


//$objPHPExcel = new PHPExcel();

//$objPHPExcel->setActiveSheetIndex(0);
//$objPHPExcel->getActiveSheet()->SetCellValue('A1', lang('name'));
//$objPHPExcel->getActiveSheet()->SetCellValue('B1','m');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('myfile.xlsx');    
header ('Location: myfile.xlsx');
?>