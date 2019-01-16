<?php
if (isset($_POST['submit'])) {
  $roles = $_POST['role'];
  $aksi = $_POST['aksi'];
  $status = $_POST['status'];

  $role = new Role;
  $role->create_new_role($roles, $aksi, $status);
  header("Location: dashboard.php?page=role&parent=settings");
}
?>