<?php
include 'session.php';

if (isset($_POST['change'])) {
    $na=$_SESSION['uname'];
    $f_name = $_FILES["file"]["name"];
    $f_tem = $_FILES["file"]["tmp_name"];
    $folder = "../image/" . $f_name;
    $img_exist = strtolower(pathinfo($folder, PATHINFO_EXTENSION));

    if ($img_exist == 'png' || $img_exist == 'jpeg' || $img_exist == 'jpg') {

        $timestamp = date("uUsman");
        $newFileName = $timestamp . '_' . $f_name;
        $newFolder = "../image/" . $newFileName;

        if (isset($_SESSION['uimage'])) {
            $oldFile = "../image/" . $_SESSION['uimage'];
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }


        move_uploaded_file($f_tem, $newFolder);
        $_SESSION['uimage'] = $newFileName;

        $join = "UPDATE `sign_in_up` SET `profile`='$newFileName' WHERE `user_name`='$na'";
        mysqli_query($connect, $join);
        $_SESSION['msg1']="image upload successfully";
    
}

        else {
            $_SESSION['extension1']='Png, jpg, and jpeg extensions are allowed for the profile picture. 
            image not updated. Please select the correct file extension';
        }
    
}
?>
