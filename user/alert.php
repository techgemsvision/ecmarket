
<div class="container">
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

if(isset($_SESSION['msg2'])){
    ?>
    <div class="alert alert-danger">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['msg2']."------------------------------------------"?>
      <a class="btn btn-primary" href="#signin-modal" data-toggle="modal">Login</a>
    </div>
    <?php
    unset($_SESSION['msg2']);
    }

    if(isset($_SESSION['exist'])){
      ?>
      <div class="alert alert-danger">
        <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
        <?php echo $_SESSION['exist']?>
      </div>
      <?php
      unset($_SESSION['exist']);
      }

      if(isset($_SESSION['ten'])){
        ?>
        <div class="alert alert-danger">
          <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
          <?php echo $_SESSION['ten']?>
        </div>
        <?php
        unset($_SESSION['ten']);
        }

        if(isset($_SESSION['add_cart'])){
          ?>
          <div class="alert alert-danger">
            <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo $_SESSION['add_cart']?>
          </div>
          <?php
          unset($_SESSION['add_cart']);
          }

          if(isset($_SESSION['bill1'])){
            ?>
            <div class="alert alert-success">
              <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
              <?php echo $_SESSION['bill1']?>
            </div>
            <?php
            unset($_SESSION['bill1']);
            }
?>


<?php
if(isset($_SESSION['msg'])){
?>
<div class="alert alert-success SS">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_SESSION['msg']?>
</div>
<?php
unset($_SESSION['msg']);
}

else if(isset($_SESSION['extension'])){
    ?>
    <div class="alert alert-danger DD">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['extension']?>
    </div>
    <?php
    unset($_SESSION['extension']);
    }

if(isset($_SESSION['already'])){
    ?>
    <div class="alert alert-info IN">
      <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $_SESSION['already']?>
    </div>
    <?php
    unset($_SESSION['already']);
    }

    if(isset($_SESSION['password'])){
      ?>
      <div class="alert alert-info IN">
        <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
        <?php echo $_SESSION['password']?>
      </div>
      <?php
      unset($_SESSION['password']);
      }

      if(isset($_SESSION['invalid'])){
        ?>
        <div class="alert alert-danger DD">
          <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
          <?php echo $_SESSION['invalid']?>
        </div>
        <?php
        unset($_SESSION['invalid']);
        }

        if(isset($_SESSION['disabled'])){
          ?>
          <div class="alert alert-danger DD">
            <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo $_SESSION['disabled']?>
          </div>
          <?php
          unset($_SESSION['disabled']);
          }

          if(isset($_SESSION['not'])){
            ?>
            <div class="alert alert-danger DD">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <?php echo $_SESSION['not']?>
            </div>
            <?php
            unset($_SESSION['not']);
            }
?>


</div> <br> 