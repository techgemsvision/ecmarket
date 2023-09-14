<?php
include '../connection.php';
session_start();
include 'img.php';
include 'queries.php';
include 'addtocart.php';
if($_SESSION['us'])
{

}
else
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Style Tech Gems</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2020/10/20/15/08/shopping-bag-5670703_1280.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/mediaquery.css" rel="stylesheet">
    </head>

    <body>
        
        <!-- Top bar Start -->
        <div class="top-bar sticky-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope contact-info"></i>
                        usman67483@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt contact-info"></i>
                        0331-1288350
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
     
                   <?php
                   include 'active.php';
                   ?>     
                   <?php
                   include 'alert.php';
                   ?>

       <?php
       include "side1.php";
       ?>


    
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid text-center">
                <br><br><br><br><br>
                <h1 class="text-white"><i class="fa fa-cloud"></i> Page NotFound <i class="fa fa-cloud"></i></h1>
                <br><br><br><br><br>
</div>
        </div>
        <!-- Review End -->        
      <br><br>
        <?php
        include 'footer.php'
        ?>
      
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
       <?php
       include "side2.php";
       ?>
        <!-- Template Javascript -->
        <script src="js/main.js">
    </body>
</html>