<?php
$u_name=$_SESSION['ename'];
$queryemp="SELECT * FROM `employee` WHERE `name`='$u_name'"; 
$conemp=mysqli_query($connect,$queryemp);
$fetchemp=mysqli_fetch_assoc($conemp);
$b=$fetchemp['branch'];
?>