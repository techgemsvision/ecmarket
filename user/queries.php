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

$query6="SELECT * FROM `product` where `p_type`=1 and `status`='on' GROUP BY p_price DESC LIMIT 1";
$connn6=mysqli_query($connect,$query6);

$query7="SELECT * FROM `product` where `p_type`=2 and `status`='on' GROUP BY p_price DESC LIMIT 1";
$connn7=mysqli_query($connect,$query7);

$query8="SELECT * FROM `product` where `p_type`=3 and `status`='on' GROUP BY p_price DESC LIMIT 1";
$connn8=mysqli_query($connect,$query8);

$fet1=mysqli_fetch_assoc($connn6);
$fet2=mysqli_fetch_assoc($connn7);
$fet3=mysqli_fetch_assoc($connn8);

if(isset($_SESSION['bill'])){
    unset($_SESSION['cart']);
    unset($_SESSION['bill']);
    $_SESSION['bill1']="<u><b>Ordered Successfully</b></u> And <b><i>The email you provided in the form has been sent with the tracking ID.</i></b>";
}

unset($_SESSION['page1']);
unset($_SESSION['page2']);



?>
