<?php
if(isset($_SESSION['msg1'])){
?>
<div class="alert alert-success">
  <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_SESSION['msg1']?>
</div>
<?php
unset($_SESSION['msg1']);
}

else if(isset($_SESSION['extension1'])){
    ?>
    <div class="alert alert-danger">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['extension1']?>
    </div>
    <?php
    unset($_SESSION['extension1']);
    }
?>

