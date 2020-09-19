<?php 
 $column = 'A';

for ($i = 1; $i < mysql_num_fields($result); $i++)  

{
    $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, mysql_field_name($result,$i));
    $column++;
}

//end of adding column names  
//start while loop to get data  

$rowCount = 2;  

while($row = mysql_fetch_row($result))  

{  
    $column = 'A';

   for($j=1; $j<mysql_num_fields($result);$j++)  
    {  
        if(!isset($row[$j]))  

            $value = NULL;  

        elseif ($row[$j] != "")  

            $value = strip_tags($row[$j]);  

        else  

            $value = "";  


        $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
        $column++;
    }  

    $rowCount++;
} 

// Redirect output to a client’s web browser (Excel5) 
header('Content-Type: application/vnd.ms-Excel'); 
header('Content-Disposition: attachment;filename="results.xls"'); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
 ?>