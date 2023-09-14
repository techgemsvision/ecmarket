<!-- Bottom Bar Start -->
<div class="bottom-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-3">
<div class="logo">
   <a href="index.php">
       <h2 class="market"><span class="ec">ec</span>Market</h2>
   </a>
</div>
</div>
<div class="col-md-6">
    <form action="" method="POST">
<div class="search">
   <input type="text" placeholder="Search" name='search' class="search">
   <button type="submit" name='submitsearch'><i class="fa fa-search"></i></button>
</div>
</form>
</div>
<div class="col-md-3">
<div class="user">
   <a href="cart.php" class="btn cart countcart">
       <i class="fa fa-shopping-cart"></i>
       <span><?php
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
   </a>
</div>
</div>
</div>
</div>
</div>
