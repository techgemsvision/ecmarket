<?php
$expensive="SELECT * FROM `product` ORDER by original_price DESC LIMIT 5";
$excon=mysqli_query($connect,$expensive);
$expensive3="SELECT * FROM `product` where `p_type`=3 ORDER by original_price DESC LIMIT 5";
$excon3=mysqli_query($connect,$expensive3);
$expensive2="SELECT * FROM `product` where `p_type`=2 ORDER by original_price DESC LIMIT 5";
$excon2=mysqli_query($connect,$expensive2);
$expensive1="SELECT * FROM `product` where `p_type`=1 ORDER by original_price DESC LIMIT 5";
$excon1=mysqli_query($connect,$expensive1);

$query1="SELECT * FROM `product` where `p_type`=1 and `status`='on' GROUP BY id DESC Limit 5";
$connn1=mysqli_query($connect,$query1);
$query2="SELECT * FROM `product` where `p_type`=2 and `status`='on' GROUP BY id DESC Limit 5";
$connn2=mysqli_query($connect,$query2);
$query3="SELECT * FROM `product` where `p_type`=3 and `status`='on' GROUP BY id DESC Limit 5";
$connn3=mysqli_query($connect,$query3);

$lowest="SELECT * FROM `product` ORDER by original_price ASC LIMIT 5";
$low=mysqli_query($connect,$lowest);

$off="SELECT * FROM `product` where `stock`>30 ORDER by discount DESC LIMIT 2";
$offer=mysqli_query($connect,$off);

$random="SELECT * FROM `product`  ORDER BY RAND() LIMIT 1";
$randomconnect=mysqli_query($connect,$random);
$fetchrandom=mysqli_fetch_assoc($randomconnect);

$adconnect=mysqli_query($connect,$random);
if(isset($_GET['id'])){
    foreach($_SESSION['cart'] as $k=>$item){
if($item['id']==$_GET['id']){
    unset($_SESSION['cart'][$k]);
    
}
    }                                                
}
?>