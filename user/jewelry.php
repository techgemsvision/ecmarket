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




$expensive="SELECT * FROM `product` WHERE p_type=2 and (`status`='on') GROUP by p_price DESC LIMIT 4";
$conn2=mysqli_query($connect,$expensive);
$expensive1="SELECT * FROM `product` WHERE p_type=2  and (`status`='on') GROUP by p_price DESC LIMIT 9999999999999 OFFSET 4";
$conn3=mysqli_query($connect,$expensive1);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


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
                        <li class="breadcrumb-item" aria-current="page">Category</li>
                        <li class="breadcrumb-item active" aria-current="page">Jewellery</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <?php
                   include 'alert.php';
                   ?>
            <div class="container text-center">

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">

                                    

                                  <?php
            while($fetch2=mysqli_fetch_assoc($conn2))
            {
                echo '<div class="products mb-3">
                <div class="row">
                <div class="col-6 col-lg-3">
                <figure class="product-media list_list">';?>
                <?php 
                if($fetch2['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">upto '.$fetch2['discount'].' % off </span>';
}

else if($fetch2['discount']>=40){
              echo'  <span class="product-label label-top">Best Deal </span>
                <span class="product-label label-new">upto '.$fetch2['discount'].' % off </span>';
}

else{
    echo '<span class="product-label label-new">'.$fetch2['discount'].' % off </span>';
}
                                  ?>  
                                <?php echo '<div>
                        <img src="../admin/f_image/'.$fetch2['p_image'].'" alt="Product image" class="product-image img2">
                    </div>
                </figure><!-- End .product-media -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-6 col-lg-3 order-lg-last">
                <div class="product-list-action">
                    <form method="POST" >
                    <div class="col-sm-12">
     <label for="" class="qtn_name">Quantity</label>
     <input type="number" value="1" min="1" max="5" name="qtn" class="qtn">
     </div><br>
     <input type="hidden" name="id" value="'.$fetch2['id'].'">
     <input type="hidden" name="p_name" value="'.$fetch2['p_name'].'">
     <input type="hidden" name="p_image" value="'.$fetch2['p_image'].'">
     <input type="hidden" name="discount" value="'.$fetch2['discount'].'">
     <input type="hidden" name="original_price" value="'.$fetch2['original_price'].'">
     <input type="hidden" name="stock" value="'.$fetch2['stock'].'">
     <input type="hidden" name="p_price" value="'.$fetch2['p_price'].'">
     <div class="text-left">';?>
     <?php 
     if($fetch2['stock']>20){
         echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
     }
     else{
         echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
     }
     ?>
          <?php
          echo'</div>
           </form>

                </div><!-- End .product-list-action -->
            </div><!-- End .col-sm-6 col-lg-3 -->

            <div class="col-lg-6">
                <div class="product-body product-action-inner">
                    <h3 class="product-title">'.$fetch2['p_name'].'</h3>
<hr>
                    <div class="product-content">
                        <p><b class="text-dark">Description : </b>'.$fetch2['description'].'</p>
                    </div>
                    <br>
                    <div class="product-price"> <b class="text-dark">Original-Price : </b><span>'
                       .$fetch2['original_price']. 
                    '</span> $</div>
                    <br>
                    <div class="product-price"> <b class="text-dark">Discounted-Price : </b>'
                       .$fetch2['p_price']. 
                    ' $</div>

                </div><!-- End .product-body -->
            </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
            </div><!-- End .product -->';
                }
        
         
          ?>
      
        

                                        
                          

                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                        
                        <div class="cat-banner row no-gutters">

<div class="col-sm-6 col-xl-12 col-xxl-6">
    <div class="banner banner-overlay bolay">
        <a href="electronic.php">
            <img src="assets/images/demos/demo-14/banners/banner-5.jpg" alt="Banner img desc">
        </a>

        <div class="banner-content">
            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
            <h3 class="banner-title text-white"><a href="#">Electronic items<br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
            <a href="electronic.php" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
        </div>
    </div>
</div>
</div>             
<br>

<div class="cat-banner row no-gutters">

<div class="col-sm-6 col-xl-12 col-xxl-6">
    <div class="banner banner-overlay bolay">
        <a href="fashion.php">
            <img src="assets/images/demos/demo-14/banners/banner-9.jpg" alt="Banner img desc">
        </a>

        <div class="banner-content">
            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
            <h3 class="banner-title text-white"><a href="#">Fashion items<br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
            <a href="fashion.php" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
        </div>
    </div>
</div>
</div>
                            </div>
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->

</div>

        
        <div class="container">
        <div class="col-xl-12 col-xxl-12">
        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
            data-owl-options='{
                "nav": true, 
                "dots": false,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":1
                    },
                    "480": {
                        "items":2
                    },
                    "768": {
                        "items":3
                    },
                    "992": {
                        "items":4
                        
                    },
                    "1200": {
                        "items":3
                    },
                    "1600": {
                        "items":4
                    }
                    
                }
            }'>

       <?php
                while($expen=mysqli_fetch_assoc($conn3)){
             echo    
            '<div class="product text-center">
                <figure class="product">';?>
                <?php
                if($expen['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">upto '.$expen['discount'].' % off </span>';
}

else if($expen['discount']>=40){
              echo'  <span class="product-label label-top">Best Deal </span>
                <span class="product-label label-new">upto '.$expen['discount'].' % off </span>';
}
                else{
                    echo '<span class="product-label label-new">'.$expen['discount'].' % off </span>';
                }
                                  ?>  
                                <?php echo '<div class="img11">
                        <img src="../admin/f_image/'. $expen["p_image"].'" alt="Product image" class="product-image img2">
                </div>
                <form method="POST" action="#ex1" id="ex1">
                <div class="qtn1">
                      <div class="qtn2">
<label for="" class="qtn_name">Quantity</label>
<input type="number" value="1" min="1" max="5" name="qtn" class="mb-2">
</div></div><br>
<input type="hidden" name="id" value="'. $expen["id"].'">
<input type="hidden" name="p_name" value="'. $expen["p_name"].'">
<input type="hidden" name="p_image" value="'. $expen["p_image"].'">
<input type="hidden" name="discount" value="'. $expen["discount"].'">
<input type="hidden" name="original_price" value="'. $expen["original_price"].'">
<input type="hidden" name="stock" value="'. $expen["stock"].'">
<input type="hidden" name="p_price" value="'. $expen["p_price"].'">
<div class="product-action">';?>
<?php 
if($expen['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
     <?php
     echo'</div>
             </form>
                </figure><!-- End .product-media -->

                <div class="product-body">
                    <div class="product-cat">
                        <a href="fashion.php">Fashion Products</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title">'. $expen["p_name"].'</h3><!-- End .product-title -->
                    <div class="product-price">
                    '. $expen["original_price"].' ' .'$
                    </div><!-- End .product-price -->
                </div><!-- End .product-body -->
            </div>';
            
                }
                
        
     ?>
     </div><!-- End .owl-carousel -->
     </div>

                            </div>
                            </main><!-- End .main -->
        <?php
       include 'footer.php';
       ?>
   </body>
<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>