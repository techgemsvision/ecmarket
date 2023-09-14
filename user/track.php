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


if(isset($_POST['submit'])){
    $search=$_POST['search'];
    $searchquery="SELECT * FROM `order_details` WHERE `tracking_id`=$search";
    $con=mysqli_query($connect,$searchquery);
    $row=mysqli_num_rows($con);
    $searchitem="SELECT * FROM `order_items` WHERE `tracking_id`=$search";
    $con1=mysqli_query($connect,$searchitem);
    $_SESSION['s']=$search;

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
                        <li class="breadcrumb-item active" aria-current="page">Tracking</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <br>
            <?php
                   include 'alert.php';
                   ?>
            <div class="container text-center">

<form method="POST">
<div class="row">
    <div class="col-sm-6">
    <label for="" class="trlabel">Insert Tracking ID :</label>
    <input type="text" class="track w-75 mb-3" pattern="[0-9]*" title="Please enter only numbers" name="search" required>
    </div>
<div class="col-sm-6">
<input type="submit" class="btn-primary btn" value="Search" name="submit">
</div>
</div>

</form>
<br>
<hr>
<br>
<?php
if(isset($con))
{
    if($row>0){
?>
<h2 class="text-dark">Order_Details</h2>
<div class="table-responsive">
<table class="table text-center" border="2">
<thead class="bg-dark">
<tr>
  <th class="text-white bold">NAME</th>
  <th class="text-white bold">EMAIL</th>
  <th class="text-white bold">ADDRESS</th>
  <th class="text-white bold">STATUS</th>
  <th class="text-white bold">TOTAL_QTN</th>
  <th class="text-white bold">TOTAL_PRICE</th>
</tr>
</thead>

<?php
while($fetch1=mysqli_fetch_assoc($con)){
    echo "<tbody class='me-3'>
    <tr>
    
      <td class='ts'>".$fetch1['user_name']."</td>
      <td class='ts'>".$fetch1['email']."</td>
      <td class='ts'>".$fetch1['address']."</td>
      <td class='ts'>".$fetch1['status']."</td>
      <td class='ts'>".$fetch1['total_qtn']."</td>
      <td class='ts'>".$fetch1['total']."</td>";
}
?>
</tbody>
</table>
</div>
<br>
<h2 class="text-dark">Order_Items</h2>
<div class="table-responsive">
<table class="table text-center" border="2">
<thead class="bg-dark">
<tr>
  <th class="text-white bold">PRODUCT_NAME</th>
  <th class="text-white bold">PRICE</th>
  <th class="text-white bold">QUANTITY</th>
  <th class="text-white bold">STATUS</th>
</tr>
</thead>

<?php
while($fetch2=mysqli_fetch_assoc($con1)){
    echo "<tbody class='me-3'>
    <tr>
    
      <td class='ts'>".$fetch2['item_name']."</td>
      <td class='ts'>".$fetch2['price']."</td>
      <td class='ts'>".$fetch2['qtn']."</td>
      <td class='ts'>".$fetch2['status']."</td>";

}
?>
</tbody>
</table>
</div>
<div class="text-center">
<a href="download.php" class="btn-primary btn">Download</a>
</div>
<br><br>
<?php
    }
    else
    {
    echo "<h1 class='text-center sp'>Invalid Tracking Id Search Please</h1>
    <p class='text-white'><b>Style Tech Gems:</b> A harmonious fusion of fashion, electronics, and jewelry, epitomizing elegance and innovation in every exquisite creation.

    <b>Experience the Future of Luxury:</b> Style Tech Gems redefines sophistication, offering curated collections that redefine fashion, elevate electronics, and capture the essence of timeless jewelry.</p>";  
    }
}
else{
    echo "<h1 class='text-center sp'>Search Please</h1>
    <br>
    <p class='text-white'><b>Style Tech Gems:</b> A harmonious fusion of fashion, electronics, and jewelry, epitomizing elegance and innovation in every exquisite creation.

    <b>Experience the Future of Luxury:</b> Style Tech Gems redefines sophistication, offering curated collections that redefine fashion, elevate electronics, and capture the essence of timeless jewelry.</p>
    
    ";
}

?>
<br>

</div>

        </main><!-- End .main -->

        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>