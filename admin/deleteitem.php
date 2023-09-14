<?php
include '../connection.php';
session_start();
$id=$_GET['id'];
$price=$_GET['price'];
$track=$_GET['tracking_id'];
$qtn=$_GET['qtn'];
$item_name=$_GET['item_name'];

if(isset($_POST['submit']))
{
    $qtn1=$_POST['qtn'];
    $qtn2=$qtn-$qtn1;
    $average_price=$price/$qtn;
    $newprice=$qtn2*$average_price;
    $newprice1=$qtn1*$average_price;

    if($qtn1=$qtn){
$query1="SELECT * FROM `order_details` WHERE tracking_id=$track";
$con=mysqli_query($connect,$query1);
$fetch=mysqli_fetch_assoc($con);
$total=$fetch['total'];
$total_qtn=$fetch['total_qtn'];
$newqtn=$total_qtn-$qtn1;
$newtotal=$total-$price;

$query5="SELECT * FROM `product` WHERE `p_name`='$item_name'";
$con2=mysqli_query($connect,$query5);
$fetch2=mysqli_fetch_assoc($con2);
$stock=$fetch2['stock'];
$newqtn1=$stock+$qtn1;


$query4="UPDATE `product` SET `stock`='$newqtn1' WHERE `p_name`= '$item_name'";
mysqli_query($connect,$query4);


$query3="UPDATE `order_details` SET `total`='$newtotal' , `total_qtn`='$newqtn' WHERE tracking_id=$track";
mysqli_query($connect,$query3);


$query2="DELETE FROM `order_items` WHERE `id`='$id'";
mysqli_query($connect,$query2);
header("location:manage.php");
 }
else{

    $query1="SELECT * FROM `order_details` WHERE tracking_id=$track";
    $con=mysqli_query($connect,$query1);
    $fetch=mysqli_fetch_assoc($con);
    $total=$fetch['total'];
    $total_qtn=$fetch['total_qtn'];
    $newqtn=$total_qtn-$qtn1;
    $newtotal=$total-$newprice1;
    
    $query5="SELECT * FROM `product` WHERE `p_name`='$item_name'";
    $con2=mysqli_query($connect,$query5);
    $fetch2=mysqli_fetch_assoc($con2);
    $stock=$fetch2['stock'];
    $newqtn1=$stock+$qtn1;
    
    
    $query4="UPDATE `product` SET `stock`='$newqtn1' WHERE `p_name`= '$item_name'";
    mysqli_query($connect,$query4);
    
    
    $query3="UPDATE `order_details` SET `total`='$newtotal' , `total_qtn`='$newqtn' WHERE tracking_id=$track";
    mysqli_query($connect,$query3);
    
    
    $query2="UPDATE `order_items` SET `price`=' $newprice',`qtn`='$qtn2' WHERE `id`='$id'";
    mysqli_query($connect,$query2);
    header("location:manage.php");

}


}


?>
