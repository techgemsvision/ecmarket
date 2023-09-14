<?php
include 'connection.php';
session_start();
session_unset();
header("location:user/index.php")
?>