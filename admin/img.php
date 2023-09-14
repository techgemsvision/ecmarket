<?php
if($_SESSION['aname'])
{

}
else
{
    header('location:../user/index.php');
}
unset($_SESSION['us']);
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
        $_SESSION['msg1']="image upload successfully";
    
}
    else {
        $_SESSION['extension1']='Png, jpg, and jpeg extensions are allowed for the profile picture. 
        image not updated. Please select the correct file extension';
    }
}

if(isset($_POST['submit'])){
    $se=$_POST['search'];
    $query3="SELECT * FROM `pages` WHERE `key` like '$se%' or `key` like '%$se%' or `key` like '%$se' LIMIT 1";
    $conn=mysqli_query($connect,$query3);
    $fetch=mysqli_fetch_assoc($conn);
    $_SESSION['page']=$fetch['page'];
    $us="Page NotFound";
    $page=$_SESSION['page'];
    if(!$page){
    header("location:notfound.php");
    $_SESSION['us']=$us;
    }
    else{
    header("location:$page");
    }
    }

?>