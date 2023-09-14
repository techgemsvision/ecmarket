<?php
include '../connection.php';
session_start();
include 'google.php';
include 'search.php';
unset($_SESSION['us']);

include 'img.php';
include 'indexquery.php';
include 'queries.php';
include 'addtocart.php';


if(isset($_GET['id'])){
    foreach($_SESSION['cart'] as $k=>$item){
if($item['id']==$_GET['id']){
    unset($_SESSION['cart'][$k]);
}
    }

}

$_SESSION["Page1"]='CheckOut';


if(isset($_POST['sub'])){
        $copn=$_POST['coupan'];
        $coupanquery="SELECT * FROM `discount` WHERE `name`='$copn'";
$coucon=mysqli_query($connect,$coupanquery);
$corows=mysqli_num_rows($coucon);
$coufetch=mysqli_fetch_assoc($coucon);
$_SESSION['coupan']=$copn;
if($corows>0){
     $_SESSION['coupan']=$coufetch['name'];
     $_SESSION['dis']=$coufetch['discount'];
}
else{
    $_SESSION['coupan']='invalid coupan';
    $_SESSION['dis']=0;
}
    }

    else{
        $_SESSION['coupan']=null;
        $_SESSION['dis']=0;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.php  22 Nov 2019 10:03:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Style Tech Gems</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Style Tech Gems - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2020/10/20/15/08/shopping-bag-5670703_1280.png">

    <meta name="apple-mobile-web-app-title" content="Style Tech Gems">
    <meta name="application-name" content="Style Tech Gems">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/alert.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-14.css">
    <link rel="stylesheet" href="assets/css/demos/demo-14.css">
</head>

<body>
    <div class="page-wrapper">
    <?php
include 'nav2.php';
?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
<br>
      <!-- Cart Start -->
      <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        

                                    <?php
                                    $total=0;
                                    $items=0;
                                    $quantity=0;
                                    $_SESSION['totalprice']=$total;
if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
 
            <tr>
                <td class="carttable text-center">
                    <div class="img">
                        <img src="../admin/f_image/<?php echo $item['p_image'] ?>" alt="Image" class="tableimg">
                        <p><?php echo $item['p_name'] ?></p>
                    </div>
                </td>

                <td class="tabletd"><?php echo $item['original_price'] ?></td>
                <td class="tabletd"><?php echo $item['discount'] ?></td>
                <td class="tabletd"><?php echo $item['qtn']?></td>
                <td class="total"><?php echo $item['total'] ?></td>
                <?php $total += $item['total']?>
                <?php $items += 1?>
                <?php $quantity += $item['qtn']?>
                <?php echo "<td><a href='cart.php?id=$item[id]' class='del'>x</a></td>" ?>
            </tr>

    <?php endforeach ?>
<?php endif ?>
                      
                                    </tbody>
                                </table>
                                <br>
                                <div class="cart-bottom">
			            			<div class="cart-discount">
			            				<form method="POST">
			            					<div class="input-group">
                                                <?php if(!$_SESSION['coupan']||$_SESSION['coupan']==null){echo'
				        						<input type="text" class="form-control" name="coupan" required placeholder="coupon code" autocomplete="off">';
                                                }
                                                else{echo'
                                                    <input type="text" class="form-control" value="'.$_SESSION['coupan'].'" readonly>';
                                                }
                                                ?>
				        						<div class="input-group-append">
													<button class="btn btn-outline-primary-2" name="sub" type="submit"><i class="icon-long-arrow-right"></i></button>
												</div><!-- .End .input-group-append -->
			        						</div><!-- End .input-group -->
			            				</form>
			            			</div><!-- End .cart-discount -->
    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Cart Summary</h1>
                                            <p>Total_Items<span><?php echo $items?></span></p>
                                            <p>Total_Quantity<span><?php echo $quantity?></span></p>

                                            <?php if(!$_SESSION['coupan']||$_SESSION['coupan']==null) {
                                                $cd=$_SESSION['dis'];
                                                $cdd=($cd/100)*$total;
                                                $total-=$cdd;
                                            echo '<h2>Grand Total<span class="text-primary">'.$total.' $</span></h2>';
                                        }
                                        else{
                                            if($_SESSION['coupan']=='invalid coupan'){
                                                $cd=$_SESSION['dis'];
                                                $cdd=($cd/100)*$total;
                                                $total-=$cdd;
                                            echo '<br><p class="text-danger">Invalid Coupan</p><h2>Grand Total<span class="text-primary">'.$total.' $</span></h2>';
                                            }
                                            else{
                                                $cd=$_SESSION['dis'];
                                                $cdd=($cd/100)*$total;
                                                $total-=$cdd;
                                            echo '<br><p class="text-success">Coupan Applied</p><h2>Grand Total<span class="text-primary">'.$total.' $</span></h2>';
                                            }
                                        }
                                        ?>
                                
                                        </div>
                                        <div class="cart-btn">
                                            <?php
                                            if(count($_SESSION['cart'])>0){
                                            echo '<button><a href="checkout.php">CheckOut</a></button>';
                                            }
                                            else{
                                            $_SESSION["add_cart"]="please add minimum one cart";
                                            }
                                            ?>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        <br><br>

        </main><!-- End .main -->

        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>