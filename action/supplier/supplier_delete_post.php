<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $supplier = new Supplier;
  $supplier->delete($id);
  header("Location: dashboard.php?page=supplier&parent=manajemen");
}
?>