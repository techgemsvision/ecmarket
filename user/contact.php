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
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];
  $query12="INSERT INTO `feedback`(`id`, `name`, `email`, `message`)
   VALUES (null,'$name','$email','$message')";
   mysqli_query($connect,$query12);
   $_SESSION['msg1']="Forward feedback";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Style_Tech_Gems</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Style_Tech_Gems - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2020/10/20/15/08/shopping-bag-5670703_1280.png">

    <meta name="apple-mobile-web-app-title" content="Style_Tech_Gems">
    <meta name="application-name" content="Style_Tech_Gems">
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
            <section id="contact">
  
  <h1 class="section-header">Contact</h1>
  <div class="row">
       <div class="col-sm-3">
    
      </div>
  
  <div class="col-sm-6">
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 

    <form id="contact-form" method="POST" class="form-horizontal" role="form">
       
      <div class="form-group">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
      </div>

      <div class="form-group">
 
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        
      </div>

      <textarea class="form-control" rows="5" placeholder="MESSAGE" name="message" required></textarea>
      
      <button class="btn1 btn btn-primary send-button" id="submit" name="submit" type="submit" value="SEND">
      SEND
      </button>
      
    </form>
    </div></div>
  <!-- Left contact page --> 
  <div class="col-sm-3">
    
      </div>
    
  </div>
  
</section>  

</div>

        </main><!-- End .main -->
<br>

        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>