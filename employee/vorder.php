<?php
include '../connection.php';
session_start();
include 'emp.php';
include 'img.php';
$query="SELECT * FROM `order_details` WHERE `status`='complete' and `branch`=$b";
$conn=mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FEJ e-commerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<?php
echo '

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    '
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="h3"><span>ec</span>Market</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../image/<?php echo $_SESSION['eimage'] ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['ename'] ?></h6>
                        <span>employee</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">

                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <hr>
                   <span style="margin-left:2%;font-weight:bolder;opacity:70%; color:white;font-size:80%">VIEW</span>
                   <br>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-street-view me-2"></i>View</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="vbranch.php" class="dropdown-item">Branches</a>
                            <a href="vorder.php" class="dropdown-item">Completed_Orders</a>
                            <a href="vuser.php" class="dropdown-item">Users</a>
                        </div>
                    </div>

                    <hr>

                    <span style="margin-left:2%;font-weight:bolder;opacity:70%; color:white;font-size:80%">MANAGE</span>
                    <br>
               
                    <a href="status.php" class="nav-item nav-link"><i class="fa fa-sitemap me-2"></i>Status</a>
                    <a href="manage.php" class="nav-item nav-link"><i class="fa fa-list-ol me-2"></i>ManageOrders</a>
                    <a href="month.php" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>OrdersMonth</a>
                    <hr>

                    <span style="margin-left:2%;font-weight:bolder;opacity:70%; color:white;font-size:80%">PRODUCTS</span>
                    <br>

    

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-window-maximize me-2"></i>View_Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="vfashion.php" class="dropdown-item">Fashion</a>
                            <a href="velectronic.php" class="dropdown-item">Electronics</a>
                            <a href="vjewelry.php" class="dropdown-item">Jewelry</a>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar n navbar-expand  sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="h3 mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4" method="post">
                    <input class="form-contro border-0 m-1 aa1" type="search" name="search" placeholder="Search">
                    <input class="aa" type="submit" value="Search" name="submit">
                </form>
                <div class="navbar-nav align-items-center ms-auto me-4">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="../image/<?php echo $_SESSION['eimage'] ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex s"><?php echo $_SESSION['ename'] ?></span>
                        </a>
                        <div class="dropdown-menu d dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="../logout.php" class="dropdown-item dd">Log Out</a><hr>
                            <form method="POST" enctype="multipart/form-data">
<label for="file" class="b"> ChangeImage <i class="fa fa-arrow-down"></i></label><br>
<input type="file" name="file" title="click change after choosing a image"  class="dropdown-item">
<input type="submit" value="Change" name="change" class="b1">
                            </form>
                        </div>
                    </div>
                </div>
                <a href="index.php" class="p22"><p class="p2 btn btn-lg btn-lg-square"><i class="fa fa-tachometer-alt"></i></p></a>
            </nav>
            <!-- Navbar End -->
            <br>
<div class="container">
<?php
include 'alert.php';
?>
<h1 class="h11">Completed Orders</h1>
<div class="text-center">
<div class="table-responsive">
<table class='table'>
        <thead>
            <tr>
                <th>Tracking_id</th>
                <th><span class="color">........................</span>Name<span class="color">........................</span></th>
                <th><span class="color">........................</span>Email<span class="color">........................</span></th>
                <th><span class="color">........................</span>Contact<span class="color">........................</span></th>
                <th><span class="color">........................</span>Address<span class="color">........................</span></th>
                <th><span class="color">........................</span>Status<span class="color">........................</span></th>
                <th><span class="color">......</span>Coupan<span class="color">......</span></th>
                <th>Coupan_Discount</th>
                <th><span class="color">........................</span>Date<span class="color">........................</span></th>
                <th>Quantities</th>
                <th>Total_Amount</th>

            </tr>
            </thead>
            <?php
while($row=mysqli_fetch_assoc($conn))
{
    echo " 
    <tbody class='me-3'>
  <tr>
    <td class='ts'>".$row['tracking_id']."</td>
    <td class='ts'>".$row['user_name']."</td>
    <td class='ts'>".$row['email']."</td>
    <td class='ts'>".$row['contact']."</td>
    <td class='ts'>".$row['address']."</td>
    <td class='tu'>".$row['status']."</td>
    <td class='ts'>".$row['coupan']."</td>
    <td class='ts'>".$row['coupan discount']."</td>
    <td class='ts'>".$row['date']."</td>
    <td class='ts'>".$row['total_qtn']."</td>
    <td class='ts'>".$row['total']."</td>
  </tr>";
}
?>
</body>
    </table>
    <div>


</div>
</div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start s">
                            &copy; <a href="index.php">Fast Services</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end s">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <br>Created By: <a href="#" target="_blank">Usman,Haider,Sana</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            <!-- Footer End -->
        </div>
        
        <!-- Content End -->

        
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php
    echo '<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    '
?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>