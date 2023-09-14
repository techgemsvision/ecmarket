<?php
if(isset($_POST['submitsearch'])){
    $se=$_POST['search'];
    $query13="SELECT * FROM `upage` WHERE `page` like '$se%' or `page` like '%$se%' or `page` like '%$se' LIMIT 1";
    $conn12=mysqli_query($connect,$query13);
    $fetch=mysqli_fetch_assoc($conn12);
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