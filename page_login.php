<?php include "helper.php" ?>

<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<?php include "notification.php" ?>

  <body class="hold-transition login-page">
    <div class="login-box">

      <div class="login-logo"><a href="index.php"><i class="fa fa-user"></i> <b>LOGIN</b></a></div>

      <div class="login-box-body">
        <p class="login-box-msg">Please Login</p>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="username" name="username" autocomplete="off" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="password" name="password" autocomplete="off" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="LOGIN">
            </div>
          </div>
        </form>

        <br>
          <div class="row">
            <div class="col-md-12">
              <?php
                if (isset($_POST['submit'])){

                  $username  = $_POST['username'];
                  $password  = $_POST['password'];

                  $user = new User;
                  $user->login($username, $password);

                  header("Location: dashboard.php");
                }
              ?>
            </div>
          </div>
      </div>
    </div>

  </body>
</html>

<?php include "script.php" ?>