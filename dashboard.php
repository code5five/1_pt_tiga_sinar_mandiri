<?php include "helper.php" ?>

<?php if (isset($_SESSION['user'])): ?>

<!DOCTYPE html>
<html>
  <?php include "head.php" ?>


  <?php include "notification.php" ?>
  <?php include "action.php" ?>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <header class="main-header"> <?php include "header.php"; ?> </header>
      <aside class="main-sidebar"> <?php include "sidebar.php"; ?> </aside>

      <div class="content-wrapper">
        <?php include "content.php"; ?>
      </div>

      <footer class="main-footer">
        <strong>Copyright &copy; 2019 </strong> | PT Tiga Sinar Mandiri
      </footer>

      <div class="control-sidebar-bg"></div>
    </div>
  </body>
  <?php include "script.php" ?>
</html>

<?php else: ?>

<?php header("Location: page_login.php") ?>

<?php endif ?>