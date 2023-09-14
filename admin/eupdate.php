<?php
include '../connection.php';
session_start();


if (isset($_POST['sub'])) {
    $u_name = $_POST['ename'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $re_pass = $_POST['rpass'];
    $branch = $_POST['branch'];
    $role = 3;

    $query1 = "SELECT * FROM `employee` WHERE `id`=$id";
    $result1 = mysqli_query($connect, $query1);
    $row = mysqli_num_rows($result1);

    if ($row == 1) {
   
     if ($pass == $re_pass) {
       
            $join1 = "UPDATE `employee` SET `name`='$u_name',
            `email`='$email',`password`='$pass',
            `branch`='$branch',`roles`='$role' WHERE `id`=$id";
            mysqli_query($connect, $join1);
            $_SESSION['msg']='Account updated Successfully';
        } 
    
    else 
    {
        $_SESSION['password']='incorrect password !';;
    }
}
else 
{
    $_SESSION['empty']='empty Account';
}
header("location:vemployee.php");
}

?>

