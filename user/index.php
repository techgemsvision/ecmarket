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
unset($_SESSION['visit']);
?>
<!DOCTYPE html>
<html lang="en">



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
include 'nav.php';
?>
<br>
<div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2 widthalert">
<?php
            include 'alert.php';
            ?>
            </div>

        <main class="main">
            
            <div class="mb-lg-2"></div><!-- End .mb-lg-2 -->
            <div class="container-fluid is">
                <div class="row">
                    <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
                        <div class="intro-slider-container slider-container-ratio mb-2">
                            <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true
                                }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-1-480w.jpg">
                                            <img src="assets/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle bg-dark text-white">Things of Quality</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title text-white">
                                            Fashion <br> Style_Tech_Gems
                                        </h1><!-- End .intro-title -->

                                        <a href="fashion.php" class="btn btn-primary">
                                            <span>Discover Now</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-2-480w.jpg">
                                            <img src="assets/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-white">Things of Quality</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title text-white">
                                            <span>Jewellery</span> <br>Style_Tech_Gems
                                        </h1><!-- End .intro-title -->

                                        <a href="jewelry.php" class="btn btn-primary">
                                            <span>Discover Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-3-480w.jpg">
                                            <img src="assets/images/demos/demo-14/slider/slide-3.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle">Things of Quality</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">
                                            Electronic<br>Item's
                                        </h1><!-- End .intro-title -->

                                        <a href="electronic.php" class="btn btn-primary">
                                            <span>Discover Now</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->
                            
                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-xl-9 col-xxl-10 -->
                    
                    <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                        <div class="banner banner-overlay  banner-content-stretch ">
                            <a href="#">
                                <img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                            </a>
                            <div class="banner-content text-right">
                                <div class="price text-center">
                                    <sup class="text-white">from</sup>
                                    <span class="text-white">
                                        <strong>$199</strong><sup class="text-white">,99</sup>
                                    </span>
                                </div>
                                <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner banner-overlay -->
                    </div><!-- End .col-xl-3 col-xxl-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-xxl-10">
                        <div class="row">
                            <div class="col-lg-12 col-xxl-4-5col">
                            </div>

                            <div class="col-12 col-xxl-5col d-none d-xxl-block">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-14/banners/banner-4.jpg" alt="Banner img desc">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a></h3><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner banner-overlay -->
                            </div><!-- End .col-lg-3 col-xxl-2 -->
                        </div><!-- End .row -->


                        <div class="mb-5"></div><!-- End .mb-5 -->

                        <div class="bg-lighter trending-products">
                            <div class="heading heading-flex mb-3">
                                <div class="heading-left">
                                    <h2 class="title">Expensive Product</h2><!-- End .title -->
                                </div><!-- End .heading-left -->

                               <div class="heading-right">
                                    <ul class="nav nav-pills justify-content-center" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-elec-link" data-toggle="tab" href="#trending-elec-tab" role="tab" aria-controls="trending-elec-tab" aria-selected="false">Electronics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-furn-link" data-toggle="tab" href="#trending-furn-tab" role="tab" aria-controls="trending-furn-tab" aria-selected="false">Jewellery</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="trending-cloth-link" data-toggle="tab" href="#trending-cloth-tab" role="tab" aria-controls="trending-cloth-tab" aria-selected="false">Fashion</a>
                                        </li>
                                    </ul>
                               </div><!-- End .heading-right -->
                            </div><!-- End .heading -->

                            <div class="tab-content tab-content-carousel">
                                <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                        data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>

                                        <?php
                                        while($fetch1=mysqli_fetch_assoc($excon)):
                                        ?>

<div class="product text-center">
                                            <figure class="product-media"><?php 
if($fetch1['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$fetch1['discount'].' % off </span>';
}


else{
    echo '
    <span class="product-label label-sale">'.$fetch1['discount'].' % off </span>';
}
                  ?>  <div class="img1">
                                                    <img src="../admin/f_image/<?php echo $fetch1['p_image']?>"  alt="Product image" class="product-image img2">
                                        </div>

                                              <form method="POST">
                                              <div class="col-sm-12">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="qtn">
                    </div><br>
                    <input type="hidden" name="id" value="<?php echo $fetch1['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $fetch1['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $fetch1['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $fetch1['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $fetch1['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $fetch1['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $fetch1['p_price']?>">
                    <div class="product-action">
                    <?php 
if($fetch1['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>

                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?php echo $fetch1['p_name']?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.php"><?php echo $fetch1['description']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $fetch1['original_price'].' '.'$'?>
                                                </div><!-- End .product-price -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                        <?php
                                        endwhile;
                                        ?>
                                        
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane p-0 fade" id="trending-elec-tab" role="tabpanel" aria-labelledby="trending-elec-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>

                                        <?php
                                        while($fetch3=mysqli_fetch_assoc($excon3)):
                                        ?>

<div class="product text-center">
                                            <figure class="product-media"><?php 
if($fetch3['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$fetch3['discount'].' % off </span>';
}


else{
    echo '
    <span class="product-label label-sale">'.$fetch3['discount'].' % off </span>';
}
                  ?>  <div class="img1">
                                                    <img src="../admin/f_image/<?php echo $fetch3['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>

                                              <form method="POST">
                                              <div class="col-sm-12">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="qtn">
                    </div><br>
                    <input type="hidden" name="id" value="<?php echo $fetch3['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $fetch3['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $fetch3['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $fetch3['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $fetch3['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $fetch3['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $fetch3['p_price']?>">
                    <div class="product-action">
                    <?php 
if($fetch3['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>

                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?php echo $fetch3['p_name']?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.php"><?php echo $fetch3['description']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $fetch3['original_price'].' '.'$'?>
                                                </div><!-- End .product-price -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                        <?php
                                        endwhile;
                                        ?>
                                        
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                                    
                                
                                
                                
                                <div class="tab-pane p-0 fade" id="trending-furn-tab" role="tabpanel" aria-labelledby="trending-furn-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>

                                        <?php
                                        while($fetch2=mysqli_fetch_assoc($excon2)):
                                        ?>

<div class="product text-center">
                                            <figure class="product-media"><?php 
if($fetch2['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$fetch2['discount'].' % off </span>';
}


else{
    echo '
    <span class="product-label label-sale">'.$fetch2['discount'].' % off </span>';
}
                  ?>  <div class="img1">
                                                    <img src="../admin/f_image/<?php echo $fetch2['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>

                                              <form method="POST">
                                              <div class="col-sm-12">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="qtn">
                    </div><br>
                    <input type="hidden" name="id" value="<?php echo $fetch2['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $fetch2['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $fetch2['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $fetch2['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $fetch2['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $fetch2['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $fetch2['p_price']?>">
                    <div class="product-action">
                        
    <?php 
if($fetch2['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>

                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?php echo $fetch2['p_name']?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.php"><?php echo $fetch2['description']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $fetch2['original_price'].' '.'$'?>
                                                </div><!-- End .product-price -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                        <?php
                                        endwhile;
                                        ?>
                                        
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane p-0 fade" id="trending-cloth-tab" role="tabpanel" aria-labelledby="trending-cloth-link">
                                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                    data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>

                                        <?php
                                        while($fetch1=mysqli_fetch_assoc($excon1)):
                                        ?>

<div class="product text-center">
                                            <figure class="product-media"><?php 
if($fetch1['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$fetch1['discount'].' % off </span>';
}


else{
    echo '
    <span class="product-label label-sale">'.$fetch1['discount'].' % off </span>';
}
                  ?>  <div class="img1">
                                                    <img src="../admin/f_image/<?php echo $fetch1['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>

                                              <form method="POST">
                                              <div class="col-sm-12">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="qtn">
                    </div><br>
                    <input type="hidden" name="id" value="<?php echo $fetch1['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $fetch1['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $fetch1['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $fetch1['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $fetch1['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $fetch1['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $fetch1['p_price']?>">
                    <div class="product-action">
                    <?php 
if($fetch1['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>

                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?php echo $fetch1['p_name']?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.php"><?php echo $fetch1['description']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?php echo $fetch1['original_price'].' '.'$'?>
                                                </div><!-- End .product-price -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                        <?php
                                        endwhile;
                                        ?>
                                        
                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .bg-lighter -->

                        <div class="mb-5"></div><!-- End .mb-5 -->

                        <div class="row cat-banner-row electronics">
                            <div class="col-xl-3 col-xxl-4">
                                <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                        <div class="banner-list-content">
                                        <h2>Fashion List</h2>

                                        <ul>
                                            <li>Clothes</li>
                                            <li>Glasses</li>
                                            <li>Boots</li>
                                            <li>Jackets</li>
                                            <li>Baby Dresses</li>
                                            <li>More</li>
                                        </ul>
                                        </div><!-- End .banner-list-content -->
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-xl-12 col-xxl-6">
                                        <div class="banner banner-overlay">
                                            <a href="fashion.php">
                                                <img src="assets/images/demos/demo-14/banners/cl.jpg" alt="Banner img desc">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Fashion <br>Items <br><span>Up To 40% Off</span></a></h3><!-- End .banner-title -->
                                                <a href="fashion.php" class="banner-link">View Now <i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .cat-banner -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-xl-9 col-xxl-8">
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
                                        while($fashion=mysqli_fetch_assoc($connn1)):
                                        ?>
                                    <div class="product text-center">
                                        <figure class="product-media">
<?php 
if($fashion['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$fashion['discount'].' % off </span>';
}


else{
    echo '<span class="product-label label-top">Latest</span>
    <span class="product-label label-sale">'.$fashion['discount'].' % off </span>';
}
                  ?>  
                 <div class="img11">
                                                <img src="../admin/f_image/<?php echo $fashion['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>
                                        <form method="POST" action="#ex1" id="ex1">
                                                <div class="qtn1">
                                              <div class="qtn2">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="mb-2">
                    </div></div><br>
                    <input type="hidden" name="id" value="<?php echo $fashion['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $fashion['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $fashion['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $fashion['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $fashion['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $fashion['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $fashion['p_price']?>">
                    <div class="product-action">
                    <?php 
if($fashion['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="fashion.php">Fashion Products</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><?php echo $fashion['p_name']?></h3><!-- End .product-title -->
                                            <div class="product-price">
                                            <?php echo $fashion['original_price'].' '.'$' ?>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                    <?php
                                        endwhile;
                                        ?>
                                </div><!-- End .owl-carousel -->
                            </div><!-- End .col-xl-9 -->
                        </div><!-- End .row cat-banner-row -->

                        <div class="mb-3"></div><!-- End .mb-3 -->

                        <div class="row cat-banner-row furniture">
                            <div class="col-xl-3 col-xxl-4">
                                <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                        <div class="banner-list-content">
                                        <h2>Jewelry List</h2>

                                        <ul>
                                            <li>Simple Rings</li>
                                            <li>Engagement Rings</li>
                                            <li>Bangles</li>
                                            <li>Necklace</li>
                                            <li>Gold sets</li>
                                            <li>More</li>
                                        </ul>
                                        </div><!-- End .banner-list-content -->
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-xl-12 col-xxl-6">
                                        <div class="banner banner-overlay">
                                            <a href="jewelry.php">
                                                <img src="assets/images/demos/demo-14/banners/jew.jpg" alt="Banner img desc">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Jewelry Sets <br><span>Up To 40% Off</span></a></h3><!-- End .banner-title -->
                                                <a href="jewelry.php" class="banner-link">View Now <i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .cat-banner -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-xl-9 col-xxl-8">
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
                                        while($jewelry=mysqli_fetch_assoc($connn2)):
                                        ?>
                                    <div class="product text-center">
                                        <figure class="product-media"><?php 
if($jewelry['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$jewelry['discount'].' % off </span>';
}


else{
    echo '<span class="product-label label-top">Latest</span>
    <span class="product-label label-sale">'.$jewelry['discount'].' % off </span>';
}
                  ?> <div class="img11">
                                                <img src="../admin/f_image/<?php echo $jewelry['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>
                                        <form method="POST" action="#ex2" id="ex2">
                                                <div class="qtn1">
                                              <div class="qtn2">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="mb-2">
                    </div></div><br>
                    <input type="hidden" name="id" value="<?php echo $jewelry['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $jewelry['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $jewelry['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $jewelry['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $jewelry['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $jewelry['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $jewelry['p_price']?>">
                    <div class="product-action">
                    <?php 
if($jewelry['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="jewelry.php">Jewellery Products</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><?php echo $jewelry['p_name']?></h3><!-- End .product-title -->
                                            <div class="product-price">
                                            <?php echo $jewelry['original_price'].' '.'$' ?>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                    <?php
                                        endwhile;
                                        ?>
                                </div><!-- End .owl-carousel -->
                            </div><!-- End .col-xl-9 -->
                        </div><!-- End .row cat-banner-row -->

                        <div class="mb-3"></div><!-- End .mb-3 -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner banner-overlay">
                                    <a href="fashion.php">
                                        <img src="assets/images/demos/demo-14/banners/banner-7.jpg" alt="Banner img desc">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Fashion Products</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Floral T-shirts and Vests  <br><span>Awesome Sale's</span></a></h3><!-- End .banner-title -->
                                        <a href="fashion.php" class="banner-link">View Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="banner banner-overlay">
                                    <a href="product-list.php">
                                        <img src="assets/images/demos/demo-14/banners/banner-8.jpg" alt="Banner img desc">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Search Products <br><span>Style_Tech_Gems</span></a></h3><!-- End .banner-title -->
                                        <a href="product-list.php" class="banner-link">View Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner banner-overlay -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->

                        <div class="mb-3"></div><!-- End .mb-3 -->

                       
                        <div class="row cat-banner-row cooking">
                            <div class="col-xl-3 col-xxl-4">
                                <div class="cat-banner row no-gutters">
                                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                        <div class="banner-list-content">
                                        <h2>Electronic List</h2>

                                        <ul>
                                            <li>Refrigerator</li>
                                            <li>Microwave</li>
                                            <li>Labtops / PC</li>
                                            <li>Juices Machine</li>
                                            <li>Washing Machines</li>
                                            <li>More</li>
                                        </ul>
                                        </div><!-- End .banner-list-content -->
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-xl-12 col-xxl-6">
                                        <div class="banner banner-overlay">
                                            <a href="electronic.php">
                                                <img src="assets/images/demos/demo-14/banners/banner-12.jpg" alt="Banner img desc">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Electronic<br>Items <br><span>Up To 30% Off</span></a></h3><!-- End .banner-title -->
                                                <a href="electronic.php" class="banner-link">View Now <i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .cat-banner -->
                            </div><!-- End .col-xl-3 -->

                            <div class="col-xl-9 col-xxl-8">
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
                                        while($ele=mysqli_fetch_assoc($connn3)):
                                        ?>
                                    <div class="product text-center">
                                        <figure class="product-media"><?php 
if($ele['stock']<=20){
    echo'  <span class="product-label label-sale">Stock End</span>
    <span class="product-label label-new">'.$ele['discount'].' % off </span>';
}


else{
    echo '<span class="product-label label-top">Latest</span>
    <span class="product-label label-sale">'.$ele['discount'].' % off </span>';
}
                  ?>
                                            <div class="img11">
                                                <img src="../admin/f_image/<?php echo $ele['p_image']?>" alt="Product image" class="product-image img2">
                                        </div>
                                        <form method="POST" action="#ex3" id="ex3">
                                                <div class="qtn1">
                                              <div class="qtn2">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="mb-2">
                    </div></div><br>
                    <input type="hidden" name="id" value="<?php echo $ele['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $ele['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $ele['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $ele['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $ele['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $ele['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $ele['p_price']?>">
                    <div class="product-action">
                    <?php 
if($ele['stock']>20){
    echo'<input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">';
}
else{
    echo'<p class="btn-product btn-cart bg-dark text-white w-100">Stock End</p>';
}
?>
                    </div>
                                     </form>
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="electronic.php">Electronic Products</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><?php echo $ele['p_name']?></h3><!-- End .product-title -->
                                            <div class="product-price">
                                            <?php echo $ele['original_price'].' '.'$' ?>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                    <?php
                                        endwhile;
                                        ?>
                                
                                </div><!-- End .owl-carousel -->
                            </div><!-- End .col-xl-9 -->
                        </div><!-- End .row cat-banner-row -->

                        

                        <div class="mb-2"></div><!-- End .mb-5 -->
                    </div><!-- End .col-lg-9 col-xxl-10 -->

                    <aside class="col-xl-3 col-xxl-2 order-xl-top">
                        <div class="sidebar sidebar-home">
                            <div class="row">
                                <div class="col-sm-6 col-xl-12">
                                    <div class="widget widget-banner">
                                        <div class="banner banner-overlay">
                                            <a href="#">
                                                <img src="assets/images/demos/demo-14/banners/jew.jpg" alt="Banner img desc">
                                            </a>

                                            <div class="banner-content banner-content-top banner-content-right text-left">
                                                <h3 class="banner-title text-white"><a href="#">Jewelry <span>upto 40% Off</span></a></h3><!-- End .banner-title -->
                                                <a href="jewelry.php" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner banner-overlay -->
                                    </div><!-- End .widget widget-banner -->
                                </div><!-- End .col-sm-6 col-xl-12 -->

                                <div class="col-sm-6 col-xl-12 mb-2">
                                    <div class="widget widget-products">
                                        <h4 class="widget-title"><span>Easy Shoping</span></h4><!-- End .widget-title -->

                                        <div class="products">
                                            <?php
                                            while($lf=mysqli_fetch_assoc($low)):
                                            ?>
                                            <div class="product product-sm">
                                                <figure class="product-media">
                                                    <a href="<?php if($lf['p_type']==1){echo 'fashion.php';} elseif($lf['p_type']==2){echo 'jewelry.php';}else{echo 'electronic.php';}?>">
                                                        <img src="../admin/f_image/<?php echo $lf['p_image']?>" alt="Product image" class="product-image">
                                                    </a>
                                                </figure>

                                                <div class="product-body">
                                                    <h5 class="product-title"><?php echo $lf['p_name']?></h5><!-- End .product-title -->
                                                    <div class="product-price">
                                                    <?php echo $lf['original_price'].' '.'$'?>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->
                                            </div><!-- End .product product-sm -->
                                            <?php
                                            endwhile;
                                            ?>
                                        </div><!-- End .products -->
                                    </div><!-- End .widget widget-products -->
                                </div><!-- End .col-sm-6 col-xl-12 -->
                                
                                <div class="col-12">
                                    <div class="widget widget-deals">
                                        <h4 class="widget-title"><span>Special Offers</span></h4><!-- End .widget-title -->

                                        <div class="row">
                                            <?php   while($so=mysqli_fetch_assoc($offer)):?>
                                            <div class="col-sm-6 col-xl-12">
                                                <div class="product activeoffer text-center">
                                                    <figure class="product-media">
                                                        <span class="product-label label-sale"><?php echo $so['discount']?> % off</span>
                                                        <div class="img11">
                                                            <img src="../admin/f_image/<?php echo $so['p_image']?>" alt="Product image" class="product-image img2">
                                            </div>


                                                        <form method="POST" action="#offer" id="offer">
                                                <div class="qtn1">
                                              <div class="qtn2">
                    <label for="" class="qtn_name">Quantity</label>
                    <input type="number" value="1" min="1" max="5" name="qtn" class="mb-2">
                    </div></div><br>
                    <input type="hidden" name="id" value="<?php echo $so['id']?>">
                    <input type="hidden" name="p_name" value="<?php echo $so['p_name']?>">
                    <input type="hidden" name="p_image" value="<?php echo $so['p_image']?>">
                    <input type="hidden" name="discount" value="<?php echo $so['discount']?>">
                    <input type="hidden" name="original_price" value="<?php echo $so['original_price']?>">
                    <input type="hidden" name="stock" value="<?php echo $so['stock']?>">
                    <input type="hidden" name="p_price" value="<?php echo $so['p_price']?>">
                    <div class="product-action">
                        <input type="submit" class="btn-product btn-cart w-100" value="Add to cart" name="submit1">
                    </div>
                                     </form>
                                                    </figure><!-- End .product-media -->

                                                    <div class="product-body">
                                                        <div class="product-cat">
                                                            <?php echo $so['p_name']?>
                                                        </div><!-- End .product-cat -->
                                                        <h3 class="product-title"><?php echo $so['description']?></h3><!-- End .product-title -->
                                                        <div class="product-price">
                                                            <span class="new-price"><?php echo $so['p_price']?> $</span>
                                                            <span class="old-price">Was <?php echo $so['original_price']?> $</span>
                                                        </div><!-- End .product-price -->

                                                    </div><!-- End .product-body -->
                                                </div><!-- End .product -->
                                            </div><!-- End .col-sm-6 col-xl-12 -->
                                            <?php
                                            endwhile;
                                            ?>
                                        </div><!-- End .row -->
                                    </div><!-- End .widget widget-deals -->
                                </div><!-- End .col-sm-6 col-lg-xl -->
                                
                                
                                <div class="col-sm-6 col-xl-12 developers">
                                    <div class="widget widget-posts">
                                        <h4 class="widget-title"><span>Developers</span></h4><!-- End .widget-title -->

                                        <div class="owl-carousel owl-simple" data-toggle="owl" 
                                            data-owl-options='{
                                                "nav":false, 
                                                "dots": true, 
                                                "loop": false,
                                                "autoHeight": true
                                            }'>
                                            <article class="entry">
                                                <figure class="entry-media">
                                                    <div class="img11">
                                                        <img src="assets/images/demos/demo-14/blog/post-1.jpeg" alt="image desc" class="img2">
                                        </div>
                                                </figure><!-- End .entry-media -->

                                                <div class="entry-body">
                                                    <h5 class="entry-title">
                                                        Usman Ahmed
                                                    </h5><!-- End .entry-title -->

                                                    <div class="entry-content">
                                                        <p>Developer of Style_Tech_Gems</p>
                                                    </div><!-- End .entry-content -->
                                                </div><!-- End .entry-body -->
                                            </article><!-- End .entry -->

                                            <article class="entry">
                                                <figure class="entry-media">
                                                <div class="img11">
                                                        <img src="assets/images/demos/demo-14/blog/post-2.jpeg" alt="image desc" class="img2">
                                        </div>
                                                </figure><!-- End .entry-media -->

                                                <div class="entry-body">

                                                    <h5 class="entry-title">
                                                        Haider Faraz
                                                    </h5><!-- End .entry-title -->

                                                    <div class="entry-content">
                                                        <p>Developer of Style_Tech_Gems</p>
                                                    </div><!-- End .entry-content -->
                                                </div><!-- End .entry-body -->
                                            </article><!-- End .entry -->

                                            <article class="entry">
                                                <figure class="entry-media">
                                                <div class="img11">
                                                        <img src="assets/images/demos/demo-14/blog/post-3.jpg" alt="image desc" class="img2">
                                        </div>
                                                </figure><!-- End .entry-media -->

                                                <div class="entry-body">

                                                    <h5 class="entry-title">
                                                       Sana Yousuf
                                                    </h5><!-- End .entry-title -->

                                                    <div class="entry-content">
                                                        <p>Developer of Style_Tech_Gems</p>
                                                    </div><!-- End .entry-content -->
                                                </div><!-- End .entry-body -->
                                            </article><!-- End .entry -->
                                        </div><!-- End .owl-carousel -->
                                    </div><!-- End .widget widget-posts -->
                                </div><!-- End .col-sm-6 col-xl-12 -->
                            </div><!-- End .row -->
                        </div><!-- End .sidebar sidebar-home -->
                    </aside><!-- End .col-lg-3 col-xxl-2 -->
                </div><!-- End .row -->
            </div><!-- End .container-fluid -->
        </main><!-- End .main -->

       <?php
       include 'footer.php';
       ?>
   </body>
</html>