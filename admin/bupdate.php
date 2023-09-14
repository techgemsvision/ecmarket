<?php
include '../connection.php';
session_start();
include 'img.php';

if(isset($_POST['sub'])){
    $id=$_POST['id'];
    $branch=$_POST['bname'];
    $city=$_POST['city'];
    $query4="UPDATE `branch` SET `branch`='$branch',`city`='$city' WHERE `id`='$id'";
    mysqli_query($connect,$query4);
    header("location:vbranch.php");
}

?>
