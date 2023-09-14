<?php
if($_SESSION['aname'])
{

}
else
{
    header('location:../form.php');
}


$na=$_SESSION['aname'];

if (isset($_POST['change'])) {
    $f_name = $_FILES["file"]["name"];
    $f_tem = $_FILES["file"]["tmp_name"];
    $folder = "../image/" . $f_name;
    $img_exist = strtolower(pathinfo($folder, PATHINFO_EXTENSION));

    if ($img_exist == 'png' || $img_exist == 'jpeg' || $img_exist == 'jpg') {

        $timestamp = date("uUsman");
        $newFileName = $timestamp . '_' . $f_name;
        $newFolder = "../image/" . $newFileName;

        if (isset($_SESSION['aimage'])) {
            $oldFile = "../image/" . $_SESSION['aimage'];
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }
        }


        move_uploaded_file($f_tem, $newFolder);
        $_SESSION['aimage'] = $newFileName;

        $join = "UPDATE `sign_in_up` SET `profile`='$newFileName' WHERE `user_name`='$na'";
        mysqli_query($connect, $join);
    
}
    else {
        echo '<script>alert("Png, jpg, and jpeg extensions are allowed for the profile")</script>';
    }
}


?>