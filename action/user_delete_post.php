<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $user = new User;
  $user->delete($id);
  header("Location: dashboard.php?page=user&parent=settings");
}
?>