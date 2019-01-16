<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $roles = $_POST['role'];
  $aksi = $_POST['aksi'];
  $status = $_POST['status'];

  $role = new Role;
  $role->edit_role($id, $roles, $aksi, $status);
  header("Location: dashboard.php?page=role&parent=settings");
}
?>