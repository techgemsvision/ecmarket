<?php
include '../connection.php';
session_start();

$id=$_GET['id'];
$query="DELETE FROM `sign_in_up` WHERE `id`='$id'";
mysqli_query($connect,$query);
header("location:vuser.php");
?>