<?php
include 'session.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    }

if (isset($_POST['submit1'])) {
    if($name!=null || $name1!=null){
    $id = $_POST['id'];

    $item_exists = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id) {
            $item_exists = true;
            $_SESSION['exist']="Item already in cart";
            break;
        }
    }

    if (!$item_exists) {
        $_SESSION['cart'][] = array(
            'id' => $_POST['id'],
            'p_name' => $_POST['p_name'],
            'p_image' => $_POST['p_image'],
            'discount' => $_POST['discount'],
            'original_price' => $_POST['original_price'],
            'p_price' => $_POST['p_price'],
            'qtn' => $_POST['qtn'],
            'total' => $_POST['qtn']*$_POST['p_price'],
            'stock' => $_POST['stock'],
        );
       
    }
}
else{
    $_SESSION['msg2']="Login Please";
}
$page=$_SERVER['REQUEST_URI'];
header("location:$page");
exit;

}


$random="SELECT * FROM `product`  ORDER BY RAND() LIMIT 1";
$randomconnect=mysqli_query($connect,$random);
$fetchrandom=mysqli_fetch_assoc($randomconnect);
?>
