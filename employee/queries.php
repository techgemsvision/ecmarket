<?php
$query5="SELECT * FROM `product` where `p_type`=1 and `status`='on'";
$connn5=mysqli_query($connect,$query5);

$query4="SELECT * FROM `product` where `p_type`=2 and `status`='on'";
$connn4=mysqli_query($connect,$query4);

$query3="SELECT * FROM `product` where `p_type`=3 and `status`='on'";
$connn3=mysqli_query($connect,$query3);

$count1=mysqli_num_rows($connn5);
$count2=mysqli_num_rows($connn4);
$count3=mysqli_num_rows($connn3);


$query6="SELECT * FROM `order_details`";
$connn6=mysqli_query($connect,$query6);

$query7="SELECT * FROM `branch`";
$connn7=mysqli_query($connect,$query7);

$query8="SELECT * FROM `sign_in_up` WHERE `role`=2";
$connn8=mysqli_query($connect,$query8);

$query9="SELECT * FROM `employee`";
$connn9=mysqli_query($connect,$query9);

$count4=mysqli_num_rows($connn6);
$count5=mysqli_num_rows($connn7);
$count6=mysqli_num_rows($connn8);
$count7=mysqli_num_rows($connn9);

$query10="SELECT * FROM `order_details` WHERE `status`='complete' ORDER by total DESC LIMIT 3";
$con10=mysqli_query($connect,$query10);

$query11="SELECT SUM(total) FROM `order_details` where `status`='pending' or `status`='process'";
$con11=mysqli_query($connect,$query11);
$fet11=mysqli_fetch_assoc($con11);

$query12="SELECT SUM(total) FROM `order_details` where `status`='complete'";
$con12=mysqli_query($connect,$query12);
$fet12=mysqli_fetch_assoc($con12);
?>