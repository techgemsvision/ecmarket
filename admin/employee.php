<?php
include '../connection.php';
session_start();

include 'img.php';

$query = "SELECT A.id,A.branch,B.name FROM `branch` as A inner join cities_pk as B where A.city=B.id";
$result = mysqli_query($connect, $query);

if (isset($_POST['sub'])) {
    $u_name = $_POST['ename'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $re_pass = $_POST['rpass'];
    $branch = $_POST['branch'];
    $role = 3;
    $fname = $_FILES["file"]["name"];
    $ftem = $_FILES["file"]["tmp_name"];
    $imgexist = strtolower(pathinfo($fname, PATHINFO_EXTENSION));

    $query1 = "SELECT * FROM `employee` WHERE `name`='$u_name' OR `email`='$email'";
    $result1 = mysqli_query($connect, $query1);
    $row = mysqli_num_rows($result1);

    if ($row > 0) {
        $_SESSION['already'] = 'Account Already Registered';
    } elseif ($pass == $re_pass) {
        if ($imgexist == 'png' || $imgexist == 'jpeg' || $imgexist == 'jpg') {
            $timestamp1 = date("uUsman");
            $newFileName1 = $timestamp1 . '_' . $fname;
            $folder1 = "../image/" . $newFileName1;

            move_uploaded_file($ftem, $folder1);

            // Prepare the SQL query to insert the data
            $join1 = "INSERT INTO `employee`(`id`, `name`, `email`, `password`, `profile`, `branch`, `roles`)
                      VALUES (null,'$u_name','$email','$pass','$newFileName1','$branch','$role')";
            
            // Execute the query
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            if (mysqli_query($connect, $join1)) {
                $_SESSION['msg'] = 'Account Registered Successfully';
            } 
            
        } else {
            $_SESSION['extension'] = 'Png, jpg, and jpeg extensions are allowed for the profile picture. 
            Account not registered. Please select the correct file extension';
        }
    } else {
        $_SESSION['password'] = 'Please insert the same password';
    }
}
?>

<!-- Rest of your HTML code -->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Style Tech Gems</title>
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
                    <h3 class="h3"><span class="name">Admin</span>STG</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../image/<?php echo $_SESSION['aimage'] ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $_SESSION['aname'] ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">

                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <hr>
                   <span style="margin-left:2%;font-weight:bolder;opacity:70%; color:white;font-size:80%">CREATE & VIEW</span>
                   <br>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-street-view me-2"></i>View</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="vbranch.php" class="dropdown-item">Branches</a>
                            <a href="vorder.php" class="dropdown-item">Completed_Orders</a>
                            <a href="vuser.php" class="dropdown-item">Users</a>
                            <a href="vemployee.php" class="dropdown-item">Employees</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-plus me-2"></i>Create</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="branch.php" class="dropdown-item">Branches</a>
                            <a href="employee.php" class="dropdown-item">Employees</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cart-plus me-2"></i>ADD_Products</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pfashion.php" class="dropdown-item">Fashion</a>
                            <a href="pelectronic.php" class="dropdown-item">Electronics</a>
                            <a href="pjewelry.php" class="dropdown-item">Jewelry</a>
                        </div>
                    </div>

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
                            <img class="rounded-circle me-lg-2" src="../image/<?php echo $_SESSION['aimage'] ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex s"><?php echo $_SESSION['aname'] ?></span>
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
<h1 class="h11">Create Employee</h1>
<br>

<?php
if(isset($_SESSION['msg'])){
?>
<div class="alert alert-success">
  <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_SESSION['msg']?>
</div>
<?php
unset($_SESSION['msg']);
}

else if(isset($_SESSION['already'])){
    ?>
    <div class="alert alert-info">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['already']?>
    </div>
    <?php
    unset($_SESSION['already']);
    }

else if(isset($_SESSION['extension'])){
    ?>
    <div class="alert alert-info">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['extension']?>
    </div>
    <?php
    unset($_SESSION['extension']);
    }

else if(isset($_SESSION['password'])){
    ?>
    <div class="alert alert-danger">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['password']?>
    </div>
    <?php
    unset($_SESSION['password']);
    }
?>




<div class="text-center">
    <form method="POST" class="form" enctype="multipart/form-data">
        <br>

<div class="container">
    <div class="row">
<div class="col-sm-6">
        <label for="">Employee Name</label>
        <br><br>

    <input type="text" name="ename" placeholder="Employee Name" class="bn" pattern="[A-Za-z]{1,50}[1-9]{1,50}" title="[A-Za-z][1-9] e.g usman131 OR Usman121" required autocomplete="off">
</div>

<div class="col-sm-6">
    <label for="">Email</label>
        <br><br>
    <input type="email" name="email" placeholder="Email" class="bn" pattern="[a-z1-9]+@ecEmployee.com" title="ecEmployee.com missing after @" required autocomplete="off">
</div>

</div>
</div>
    <br><br>

    <div class="container">
    <div class="row">
<div class="col-sm-6"> 

    <label for="">Password</label>
        <br><br>
    <input type="password" name="pass" id="myInput" placeholder="Password" class="bn" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div> 

<div class="col-sm-6"> 
    <label for="">Re_Password</label>
        <br><br>
    <input type="password" name="rpass" id="myInput1" placeholder="Confirm Password" class="bn" required>
    </div>

</div>
</div>
<br><br><p class="sub select"><input type="checkbox" onclick="myFunction()" class="su">Show Password</p><br>

    <label for="">Select Image</label>
        <br>

    <input type="file" class="faaa"  name="file" style="width:70% " required>
   <br><br>

   <label for="">Select Branch</label>

   <br><br>
   <select name="branch" class="select">
   <optgroup label="Select Branch"></optgroup>
   <?php
   while($row=mysqli_fetch_assoc($result)){
    echo"<option value='$row[id]'>".$row['branch']."/".$row['name']."</option>";
   }
   ?>
   </select>
<br><br>
<input type="submit" value="Create Employee" name="sub" class="btn1">
<br></br>
    </form>

<br>
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
    <script>
     function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      
        var y = document.getElementById("myInput1");
        if (y.type === "password") {
          y.type = "text";
        } else {
          y.type = "password";
        }
      
      }
      </script>
    ';
?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>