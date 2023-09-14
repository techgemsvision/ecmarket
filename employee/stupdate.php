<?php
include '../connection.php';
$id=$_GET["id"];
$tracking_id=$_GET["tracking_id"];
$qtn=$_GET["qtn"];
if(isset($_POST['submit']))
{
    $status=$_POST['status'];
    $query="UPDATE `order_details` SET `status`='$status' where `tracking_id`='$tracking_id'";
    $query1="UPDATE `order_items` SET `status`='$status' where `tracking_id`='$tracking_id'";
    mysqli_query($connect,$query);
    mysqli_query($connect,$query1);
    header("location:status.php");

    if($status=='delete')
    {

        $query4="SELECT * FROM `order_items` WHERE `tracking_id`='$tracking_id'";
        $conn1=mysqli_query($connect,$query4);

        while($fetch=mysqli_fetch_assoc($conn1)){
            $item_name=$fetch['item_name'];
            $qtn1=$fetch['qtn'];
            $query5="SELECT * FROM `product` WHERE `p_name`='$item_name'";
            $conn2=mysqli_query($connect,$query5);
            while($fetch1=mysqli_fetch_assoc($conn2)){
                $stock=$fetch1['stock'];
                $newqtn1=$stock+$qtn1;
                $query6="UPDATE `product` SET `stock`='$newqtn1' WHERE `p_name`= '$item_name'";
                mysqli_query($connect,$query6);
            }

        }
        if($conn1==true){
        $query2="DELETE FROM `order_items` WHERE `tracking_id`='$tracking_id'";
        $conn=mysqli_query($connect,$query2);
    }

        if($conn==true){
            $query3="DELETE FROM `order_details` WHERE `tracking_id`='$tracking_id'";
          mysqli_query($connect,$query3);
        }
    }
}
?>