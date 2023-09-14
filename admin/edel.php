<?php
include '../connection.php';
session_start();

$id=$_GET['id'];
$query="DELETE FROM `employee` WHERE `id`='$id'";
mysqli_query($connect,$query);
header("location:vemployee.php");
?>