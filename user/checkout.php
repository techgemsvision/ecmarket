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

if($_SESSION["Page1"]){

}
else
{
    header("location:index.php");
}
$_SESSION["Page2"]='Bill';
$copn=$_SESSION['coupan'];
$coupanquery="SELECT * FROM `discount` WHERE `name`='$copn'";
$coucon=mysqli_query($connect,$coupanquery);
$corows=mysqli_num_rows($coucon);
$coufetch=mysqli_fetch_assoc($coucon);
if(isset($coucon)){
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


$querycity="SELECT * FROM `cities_pk`";
$connnectcity=mysqli_query($connect,$querycity);

$query = "SELECT A.id,A.branch,B.name FROM `branch` as A inner join cities_pk as B where A.city=B.id";
$result = mysqli_query($connect, $query);
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
                        <li class="breadcrumb-item" aria-current="page">Cart</li>
                        <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <?php
                                    $total=0;
                                    $items=0;
                                    $quantity=0;
if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
                <?php $total += $item['total']?>
                <?php $items += 1?>
                <?php $quantity += $item['qtn']?>
    <?php endforeach ?>
<?php endif ?>
        
        <!-- Checkout Start -->
        <form action="bill.php" method="Post">
        <div class="cart-page">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner1">
                            <div class="billing-address">
                                <h3 class="h11">Billing Information</h3><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>UserName</label>
                                        <input class="form-control" value="<?php if($name==null){echo $name1;} else{echo $name;}?>" name="fname" type="text" placeholder="First Name" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label>E-mail</label>
                                        <input class="form-control" name="email" type="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mobile No</label>
                                        <input class="form-control" pattern="[0-9]{4}-[0-9]{7}" title="e.g 0000-0000000" name="phone" type="tel" placeholder="Mobile No" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
<hr>
                                <h3 class="h11">Billing Address</h3><br>
                                <br>
                                <div class="row">
                                <div class="col-md-6">
                                        <label class="label">City : </label>
                                        <select name="city" id="" class="select">
                                            <?php while($fetchcity=mysqli_fetch_assoc($connnectcity)){
                                            echo'
                                            <option value="'.$fetchcity['name'].'">'.$fetchcity["name"].'</option>
                                            ';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="label">Select_Branch : </label>
                                        <select name="branch" class="select">
                                        <optgroup label="Select Branch"></optgroup>
                                        <?php
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo"<option value='$row[id]'>".$row['branch']."/".$row['name']."</option>";
                                           }
                                        ?>
                                        </select>
                                    </div>
<br><br><br>
                                    <div class="col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" name="address" pattern="[A-Za-z]\w{0,10}[0-9]\d{0,10}-[A-Za-z]\w{0,50}" title="HomeAddress-city e.g k21-karachi" type="text" placeholder="Address" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Coupan</label>
                                        <input class="form-control" type="text" name="coupan" value="<?php
                                        if(!$_SESSION['coupan']||$_SESSION['coupan']==null) {
                                        echo 'no coupan';
                                    }
                                    else{
                                        if($_SESSION['coupan']=='invalid coupan'){
                                         echo 'Invalid Coupan';
                                        }
                                        else{
                                        echo $_SESSION['coupan'];
                                        }
                                    }
                                        ?>" readonly>
                                    </div>
                                </div>
                                <hr>
                                <div class="container-fluid">
<p><span class="text-dark"><b>Sure, here's the message you requested : </b> "Please ensure that you provide the correct email address so that we can send you the tracking ID. If you do not enter the correct Email Address, Style Tech Gems will not be held responsible."</span></p>
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
                                        <div class="checkout-btn text-center">
                                            <br>
                                <?php
                                            if(count($_SESSION['cart'])>0){
                                            echo ' <input type="submit" name="submit" value="Place Order" class="btn btn-primary">';
                                            }
                                            else{
                                            echo " ";
                                            }
                                            $_SESSION['total']=$total;
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
        <!-- Checkout End -->
        </form>
        <br><br>

        </main><!-- End .main -->

        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>