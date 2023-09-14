<?php
include '../connection.php';
session_start();

$id=$_GET['id'];
$query="DELETE FROM `feedback` WHERE `id`='$id'";
mysqli_query($connect,$query);
header("location:vfeed.php");
?>