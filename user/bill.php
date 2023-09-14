<?php
include '../connection.php';
session_start();
include 'stripe.php';
include 'google.php';
include 'search.php';
unset($_SESSION['us']);
include 'img.php';
include 'indexquery.php';
include 'queries.php';
include 'addtocart.php';
if($_SESSION["Page2"]){

}
else
{
    header("location:index.php");
}

$total11=$_SESSION['total']*100;
if(isset($_POST['submit'])){
    function GUID()
    {
    if(function_exists('com_create_guid')===true)
    {
        return trim(com_create_guid(),"{}");
    }
       return sprintf("%40u",
       mt_rand(0,65356),mt_rand(0,65356),mt_rand(30000,60000)
       ,mt_rand(0,65356),mt_rand(0,65356));
    }
        $strack=GUID();
        $Sfname=$_POST['fname'];
        $Semail=$_POST['email'];
        $Sphone=$_POST['phone'];
        $Scity=$_POST['city'];
        $Sbranch=$_POST['branch'];
        $Saddress=$_POST['address'];
        $copn=$_POST['coupan'];
        $_SESSION['fname']=$Sfname;
    $_SESSION['email']=$Semail;
    $_SESSION['phone']=$Sphone;
     $_SESSION['city']=$Scity;
    $_SESSION['branch']=$Sbranch;
    $_SESSION['address']=$Saddress;
    $_SESSION['track']=$strack;
    $_SESSION['coupan']=$copn;
    
    
    }
    else
    {
        header("location:checkout.php");
    }
    
    
    $fname=$_SESSION['fname'];
    $email=$_SESSION['email'];
    $phone=$_SESSION['phone'];
    $city=$_SESSION['city'];
    $branch=$_SESSION['branch'];
    $address=$_SESSION['address'];
    $track=$_SESSION['track'];
    
    
    $date=date("Y");
    $month=date("F");
    
    
if(isset($_POST['stripeToken'])){
    $token=$_POST['stripeToken'];
    \stripe\charge::create(array(
        "amount"=>$total11,
        "currency"=>"usd",
        "description"=>"Style Tech Gems des",
        "source"=>$token,
    ));
        $status="pending";
        $qtn1=0;
        $total1=0;
        if (isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $k => $item){
                $item_total1=$item['total'];
                $item_qtn1=$item['qtn'];
                $total1+=$item_total1;
                $qtn1+=$item_qtn1;
            }
            }  
            if(isset($_SESSION['coupan'])){
                $coupn=$_SESSION['coupan'];
                }
                else{
                    $coupn=null;
                }
    $coupanquery="SELECT * FROM `discount` WHERE `name`='$coupn'";
    $coucon=mysqli_query($connect,$coupanquery);
    $corows=mysqli_num_rows($coucon);
    $coufetch=mysqli_fetch_assoc($coucon);
    if($corows>0){
    if($coupn==$coufetch['name']){
        $co=$coufetch['name'];
    $cd=$coufetch['discount'];
    $cdd=($cd/100)*$total1;
    $total1-=$cdd;
    $_SESSION['cdd']=$cdd;
    $_SESSION['cd']=$cd;
    $_SESSION['co']=$co;
    $apply='applied';
    }
    }
    else{
        $co='no coupan';
        $cd='no discount';
        $apply='no applied';
    }
    
    
    function GUID1()
    {
    if(function_exists('com_create_guid')===true)
    {
        return trim(com_create_guid(),"{}");
    }
       return sprintf("%04X%04X-%04X-%04X%04X",
       mt_rand(0,65356),mt_rand(0,65356),mt_rand(30000,60000)
       ,mt_rand(0,65356),mt_rand(0,65356));
    }
    $coupan=GUID1();
            if($total1>=168 && $total1<356){
                $dname=$coupan;
                $discount=20;
                $querydiscount="INSERT INTO `discount`(`id`, `name`, `discount`) VALUES (null,'$dname','$discount')";
                $querydis=mysqli_query($connect,$querydiscount);
            }
            elseif($total1>=356){
                $dname=$coupan;
                $discount=40;
                $querydiscount="INSERT INTO `discount`(`id`, `name`, `discount`) VALUES (null,'$dname','$discount')";
                $querydis=mysqli_query($connect,$querydiscount);
            }
            else{
                $dname='no coupan';
                $discount=0;
            }
    
        $query_details="INSERT INTO `order_details`(`id`,`tracking_id`, `user_name`, `email`, `contact`, `branch`,`address`, `status`,`coupan`,`coupan discount`, `date`,`month`, `total_qtn`, `total`)
     VALUES (null,'$track','$fname','$email','$phone','$branch','$address','$status','$apply','$cd','$date','$month','$qtn1','$total1')";
    $key=mysqli_query($connect,$query_details);
    
    if($key==true){
        if (isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $k => $item){
        $id=$item['id'];
        $item_name=$item['p_name'];
        $item_total=$item['total'];
        $stock=$item['stock'];
        $item_qtn=$item['qtn'];
        $newstock=$stock-$item_qtn;
    
    $query_stock="UPDATE `product` SET `stock`='$newstock' WHERE `id`=$id";
    mysqli_query($connect,$query_stock);
    
        $querycart="INSERT INTO `order_items`(`id`, `item_name`, `price`, `qtn`, `tracking_id`,`status`,`branch`) 
        VALUES (null,'$item_name','$item_total','$item_qtn','$track','$status','$branch')";
        mysqli_query($connect,$querycart);
    }
    }
    } 
    if($corows>0){
    $del="DELETE FROM `discount` WHERE `name`='$coupn'";
    mysqli_query($connect,$del);
    }
    else{
        
    }
        $_SESSION['bill']="value zero";
        unset($_SESSION['page1']);
        unset($_SESSION['page2']);
        unset($_SESSION['cart']);
        header("location:index.php");
        include 'mailer.php';
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
    <?php
    include 'nav2.php'
    ?>
    <div class="page-wrapper">
    

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Cart</a></li>
                        <li class="breadcrumb-item"><a href="index.php">CheckOut</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bill</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
<br>
      <!-- Cart Start -->
      <div class="container">    
              <div >
                <h1 class="text-Dark text-center">Cart Bill</h1>
                <br><br>
              <div class="row">    

              <div class="col-sm-8 bill">
                <h2>User-Details</h2><hr>
<h3 class="h1bill">UserName : <span class="text123"><?php echo $fname?></span></h3>
<br>
<h3 class="h1bill">Email : <span class="text123"><?php echo $email?></span></h3>
<br>
<h3 class="h1bill">City : <span class="text123"><?php echo $city?></span></h3>
<br>
<h3 class="h1bill">Contact_No : <span class="text123"><?php echo $phone?></span></h3>
<br>
<h3 class="h1bill">Address : <span class="text123"><?php echo $address?></span></h3>

<?php
        $totalcdd=0;
        if (isset($_SESSION['cart'])) :
    ?>
<?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
 <?php $totalcdd+=$item['total']?>              
    <?php endforeach ?>
<?php endif ?>
<?php
if(isset($_SESSION['coupan'])){
$coupnn=$_SESSION['coupan'];
}
else{
    $coupnn=null;
}
$coupanquery="SELECT * FROM `discount` WHERE `name`='$coupnn'";
$coucon=mysqli_query($connect,$coupanquery);
$corow=mysqli_num_rows($coucon);
$coufetch=mysqli_fetch_assoc($coucon);
if($corow>0){
if($coupnn==$coufetch['name']){
    $co=$coufetch['name'];
$cd=$coufetch['discount'];
$cdd=($cd/100)*$totalcdd;
$_SESSION['cdd']=$cdd;
$_SESSION['cd']=$cd;
$_SESSION['co']=$co;
}
}
else{
    $co='no coupan';
    $cd='no discount';
    $cdd=0;
}
?>



</div>

<div class="col-sm-4 bill">
<h2>Further-Details</h2><hr>
<h4 class="h1bill">Coupan Number: <span class="text123"><?php echo $co?></span></h4>
<br>
<h4 class="h1bill">Coupan Discount : <span class="text123"><?php echo $cd?> %</span></h4>
<br>
<h4 class="h1bill">Tracking_Id : <span class="text123"><?php echo $track?></span></h4>
<br>
<h4 class="h1bill">Branch : <span class="text123"><?php echo $branch?></span></h4>
<br>
<h4 class="h1bill">Year : <span class="text123"><?php echo $date?></span></h4>
<br>
<h4 class="h1bill">Month : <span class="text123"><?php echo $month?></span></h4>

</div>
</div>

<hr>
<div class="container">    
<div class="row">
<div class="col-sm-6 bill">
<h2>User-Orders</h2><hr>
        <h4 class="h1bill">Items : <span class="text123">
        <?php
        if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
 
    <?php echo $item['p_name']."<br>" ?>

    <?php endforeach ?>
<?php endif ?>
</span></h4>
<br>

<h4 class="h1bill">Total_Quantity : <span class="text123">
        <?php
        $qtn=0;
        if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
 <?php $qtn+=$item['qtn']?>              
    <?php endforeach ?>
<?php endif ?>
<?php echo $qtn?></span></h4><br>

<h4 class="h1bill">Total_Price : <span class="text123">
        <?php
        $total=0;
        if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
 <?php $total+=$item['total']?>              
    <?php endforeach ?>
<?php endif ?>
<?php echo $total-$cdd?> $</span></h4>
    </div>

<div class="col-sm-6">
<form method="post" class="text-center form2">
<script
src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $PublishableKey?>"
data-amount="<?php echo $total11?>"
data-name="Style Tech Gems"
data-description="Style Tech Gems des"
data-image="logo.png"
data-currency="usd"
>
</script>
</form>
</div> 
</div>
<br><br>
</div> 
</div> 
</div>
<br><br>

        </main><!-- End .main -->

        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>