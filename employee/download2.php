<?php
include '../connection.php';
session_start();
$date=date("Y");
$month1=date("F");

function filterData(&$str){
    $str= preg_replace("/\t/","\\t",$str);
    $str= preg_replace("/\r?\n/","\\n",$str);
    if(strstr($str,'"'))$str='"'. str_replace('"','""',$str) . '"';
}

$filename="ecmarket".$month1.date('y-m-d') . ".xls";

$field=array('NAME','EMAIL','ADDRESS','STATUS','QUANTITY','PRICE');

$excelData = implode("\t",array_values($field))."\n";

$query1="SELECT * FROM `order_details` WHERE `month`='$month1' and `date`=$date";
$query=mysqli_query($connect,$query1);

if($query->num_rows>0)
{
    while($row=$query->fetch_assoc()){
        $lineData=array($row['user_name'],$row['email'],$row['address'],$row['status'],
        $row['total_qtn'],$row['total']);
        array_walk($lineData,'filterData');
        $excelData .=  implode("\t",array_values($lineData))."\n";
    }
}
else
{
    $excelData .=  'no record found...'."\n";
}


header("Content-type: application/vnd.ms.excel");
header("Content-Disposition: attachment;filename=\"$filename\"");

echo $excelData;

exit;

?>