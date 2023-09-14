<header class="header header-14">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: 0331-1288350</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul class="menus">

                                    <li class="login">
                                    <?php
                                        include 'session.php';
                                    if(($name==null) && $name1==null){
   echo'<div class="nav-item userid dropdown">
       <a href="#" class="nav-link nl n dropdown-toggle" data-toggle="dropdown">User Account</a>
       <div class="dropdown-menu nl2">
       <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
           </div>
   </div>'; 
}
else if(($name==true) && $name1==null)
{
   echo '<div class="nav-item userid dropdown">
   <a href="#" class="nav-link nl n dropdown-toggle" data-toggle="dropdown">'?><img <?php if($image==null){echo "src='".$image2."'";} else{ echo "src='../image/".$image."'";}?> class="im1" alt=""> <?php if($name==null){echo $name1;} else{echo $name;}?></a>
   <?php echo'
   <div class="dropdown-menu nl2">
       <a href="logout.php" class="dropdown-item">Logout</a>
       <form method="POST" enctype="multipart/form-data">
       <label for="file" class="b"> ChangeImage <i class="fa fa-arrow-down"></i></label><br>
       <input type="file" name="file" title="click change after choosing a image"  class="dropdown-item pimage">
       <input type="submit" value="Change" name="change" class="b1">
                                   </form>
   </div>
</div>';
}
else{
   echo '<div class="nav-item userid dropdown">
   <a href="#" class="nav-link nl n dropdown-toggle" data-toggle="dropdown">'?><img <?php if($image==null){echo "src='".$image2."'";} else{ echo "src='../image/".$image."'";}?> class="im1" alt=""> <?php if($name==null){echo $name1;} else{echo $name;}?></a>
   <?php echo'
   <div class="dropdown-menu nl2">
       <a href="logout.php" class="dropdown-item">Logout</a>
       </div>
</div>';
}
   ?>
                                       
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                            <a href="index.php" class="logo" style="margin-top:0% !important">
                                <img src="assets/images/demos/demo-14/logo.png" alt="Style_Tech_Gems Logo" width="105" height="20">
                            </a>
                        </div><!-- End .col-xl-3 col-xxl-2 -->
                    
                        <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                            <div class="row">
                                <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                                    <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                        <form action="product-list.php" method="Post">
                                            <div class="header-search-wrapper search-wrapper-wide">

                                                <div class="select-custom">
                                                    <select id="cat" name="product">
                                                        <option value="1">Fashion</option>
                                                        <option value="2">Jewellery</option>
                                                        <option value="3">Electronics</option>
                                                    </select>
                                                </div><!-- End .select-custom -->
                                                <label for="q" class="sr-only">Search</label>
                                                <input type="search" class="form-control" name="search" id="q" placeholder="Search product ..." required>

                                                <button class="btn btn-primary" type="submit" name="submit"><i class="icon-search"></i></button>
                                            </div><!-- End .header-search-wrapper -->
                                        </form>
                                    </div><!-- End .header-search -->
                                </div><!-- End .col-xxl-4-5col -->

                                <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                                    <div class="header-dropdown-link">

                                    

                                        <div class="dropdown cart-dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                <i class="icon-shopping-cart"></i>
                                                <span class="cart-count"><?php
       if(isset($_SESSION['cart'])){
        if(count($_SESSION['cart'])<=10){
           echo count($_SESSION['cart']);
        }
        else
        {
            $_SESSION['ten']="Please insert only 10 carts";
            echo "10";
        }
       }
       else
       {
           echo "0";
       }
       ?></span>
                                                <span class="cart-txt">Cart</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                            
                                                <div class="dropdown-cart-products">
                                                <?php
                                    $total=0;
                                    $_SESSION['totalprice']=$total;
if (isset($_SESSION['cart'])) :
    ?>
    <?php
    foreach ($_SESSION['cart'] as $k => $item) :
        ?>
                                                    <div class="product">
                                                        <div class="product-cart-details">
                                                            <h4 class="product-title">
                                                                <?php echo $item['p_name']?>
                                                            </h4>

                                                            <span class="cart-product-info">
                                                                <span class="cart-product-qty">Quantity : <?php echo $item['qtn']?> </span><br>
                                                               <?php echo $item['p_price']. ' ' . '$'?>
                                                            </span>
                                                        </div><!-- End .product-cart-details -->

                                                        <figure class="product-image-container">
                                                            <div class="product-image">
                                                                <img src="../admin/f_image/<?php echo $item['p_image']?>" alt="product">
                                                            </div>
                                                        </figure>
                                                        <?php $total += $item['total']?>
                                                        <?php echo "<a href='index.php?id=$item[id]' class='btn-remove' title='Remove Product'><i class='icon-close'></i></a>"?>
                                                    </div><!-- End .product -->

                                                    <?php endforeach ?>
<?php endif ?>


                                                </div><!-- End .cart-product -->

                                                <div class="dropdown-cart-total">
                                                    <span>Total</span>

                                                    <span class="cart-total-price"><?php echo $total . ' ' . '$'?></span>
                                                </div><!-- End .dropdown-cart-total -->

                                                <div class="dropdown-cart-action">
                                                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                                                     </div><!-- End .dropdown-cart-total -->
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .cart-dropdown -->
                                    </div>
                                </div><!-- End .col-xxl-5col -->
                            </div><!-- End .row -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->


            <div class="header-bottom sticky-header">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col col-lg-9 col-xl-9 col-xxl-10 header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
<li><a href="index.php">Home</a></li>
<li><a href="product-list.php">Product-List</a></li>
<li>
                                        <a href="#" class="sf-with-ul">Tracking</a>

                                        <div class="megamenu megamenu-sm g">
                                            <div class="row no-gutters">
                                                <div class="col-md-12">
                                                    <div class="menu-col">
                                                      <form action="track.php" method="POST">
                                                        <input type="text" name="search"  class="f" pattern="[0-9]*" title="Please enter only numbers" placeholder="tracking product" required><br><br>
                                                        <button type="submit" class="btn-primary" name="submit">Search</button>
                                                      </form>  
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-sm -->
                                    </li>

<li><a href="contact.php">Contact</a></li>
<li>
                                        <a href="#" class="sf-with-ul">Categories</a>

                                        <div class="megamenu megamenu-sm g">
                                            <div class="row no-gutters">
                                                <div class="col-md-12">
                                                    <div class="menu-col">
                                                    <ul>
<li><a href="fashion.php" class="text-dark">Fashion</a></li>
<li><a href="jewelry.php" class="text-dark">Jewelry</a></li>
<li><a href="electronic.php" class="text-dark">Electronic</a></li>

                                                    </ul>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .megamenu megamenu-sm -->
                                    </li>
                                </ul>
                               
                            </nav><!-- End .main-nav -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->

                        <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                            <i class="la la-lightbulb-o"></i><p>فیشن، الیکٹرانکس، جیویلری</span></p>
                        </div>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->