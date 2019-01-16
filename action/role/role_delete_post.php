<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $role = new Role;
  $role->delete($id);
  header("Location: dashboard.php?page=role&parent=settings");
}
?>