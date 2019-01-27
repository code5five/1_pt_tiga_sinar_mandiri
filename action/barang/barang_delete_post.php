<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $barang = new Barang;
  $barang->delete($id);
  header("Location: dashboard.php?page=barang&parent=manajemen");
}
?>