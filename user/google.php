<?php
$port=$_SERVER['HTTP_HOST'];
include "vendor/autoload.php";
$clientID = '134167919347-rc939s7trnqf1h02ib8a8di9ji0a23bf.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://'.$port.'/ecmarket/user/index.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Check if the user is already logged in
if (isset($_SESSION['uname1']) && isset($_SESSION['uimage1'])) {
    // User is logged in, display their information or redirect them to a profile page
    $name1 = $_SESSION['uname1'];
    $image2 = $_SESSION['uimage1'];


if(isset($_SESSION['unknown'])){
include 'mailer2.php';
unset($_SESSION['unknown']);
if(!$_SESSION['unknown']){
  header("location:index.php");
}
}


} elseif (isset($_GET['code'])) {
    // Authenticate code from Google OAuth Flow
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // Get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;

    // Store profile info in the session
    $_SESSION['uname1'] = $name;
    $_SESSION['email']= $email;
    $_SESSION['uimage1'] = $google_account_info->picture;
    $_SESSION['unknown']='mailer';

    // Now you can use this profile info to create an account in your website and make the user logged in.
    // You can redirect the user to a profile page or any other page as needed.
    header('Location:http://'.$port.'/ecmarket/user/index.php'); // Replace with the URL of the profile page
    exit;
} else {
    // User is not logged in, show the login link
    $login= "<a href='" . $client->createAuthUrl() . "'>Login With Google</a>";
    $name1 = null;
    $image2 = null;
}


?>

<?php
if(isset($_POST['reg'])){
    $u_name = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $status="enable";
    $role = 2;
    $f_name = $_FILES["file"]["name"];
    $f_tem = $_FILES["file"]["tmp_name"];
    $img_exist = strtolower(pathinfo($f_name, PATHINFO_EXTENSION));

    $query = "SELECT * FROM `sign_in_up` WHERE `user_name`='$u_name' OR `email`='$email'";
    $con = mysqli_query($connect, $query);
    $row = mysqli_num_rows($con);

    if($row > 0) {
        $_SESSION['already']="Account Already Registered Please Create a New Account";
    } 
    elseif($img_exist == 'png' || $img_exist == 'jpeg' || $img_exist == 'jpg') {
            $timestamp = date("uUsman");
            $newFileName = $timestamp . '_' . $f_name; 
            $folder = "../image/" . $newFileName;

            move_uploaded_file($f_tem, $folder);

            $join = "INSERT INTO `sign_in_up`(`id`, `user_name`, `email`, `password`, `profile`, `role`,`status`)
                VALUES (null, '$u_name', '$email', '$pass', '$newFileName', $role,'$status')";
            mysqli_query($connect, $join);
            $_SESSION['msg']="Account Registered Succesfully ";
        }
         else {
          $_SESSION['extension'] = 'Png, jpg, and jpeg extensions are allowed for the profile picture. 
          Account not registered. Please select the correct file extension';
        }
      }
   

?>


<?php
if(isset($_POST['login'])){
  $l_email=$_POST['email1'];
  $pass=$_POST['pass'];
  $querylogin="SELECT * FROM `sign_in_up` WHERE `email`='$l_email'";
  $con1=mysqli_query($connect,$querylogin);
  $row1=mysqli_num_rows($con1);
  $fetch=mysqli_fetch_assoc($con1);

  $query2="SELECT * FROM `employee` WHERE `email`='$l_email'";
  $con2=mysqli_query($connect,$query2);
  $row2=mysqli_num_rows($con2);
  $fetch2=mysqli_fetch_assoc($con2);

  if($row1==1){
    if($fetch['status']=='enable'){
      if($fetch['password']==$pass){
         if($fetch['role']==1){
           $_SESSION['aname']=$fetch['user_name'];
           $_SESSION['aimage']=$fetch['profile'];
           header("location:../admin/index.php");
         }
  
         elseif($fetch['role']==2){
          $_SESSION['uname']=$fetch['user_name'];
          $_SESSION['uimage']=$fetch['profile'];
          header("location:index.php");
         }
      }
      else
      {
        $_SESSION['invalid'] = 'Invalid Password';
        header("location:index.php");
      }
    }
  else{
    $_SESSION['disabled'] = 'Your Account Is Disabled';
    header("location:index.php");
  }
  }

  elseif($row2==1){
    if($fetch2['password']==$pass){
       if($fetch2['roles']==3){
         $_SESSION['ename']=$fetch2['name'];
         $_SESSION['eimage']=$fetch2['profile'];
         header("location:../employee/index.php");
       }
    }
    else
    {
      $_SESSION['invalid'] = 'Invalid Password';
      header("location:index.php");
    }
  }
  else
  {
    $_SESSION['not'] = 'Account not registered';
    header("location:index.php");
  }

}
?>