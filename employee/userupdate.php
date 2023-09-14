<?php
include '../connection.php';
session_start();

if (isset($_POST['sub'])) {
    $status=$_POST['status'];
    $id1=$_POST['id'];
    $query3="UPDATE `sign_in_up` SET `status`='$status' WHERE `id`=$id1";
    mysqli_query($connect,$query3);
    header("location:vuser.php");
    } 

?>
