<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $pelanggan = new Pelanggan;
  $pelanggan->delete($id);
  header("Location: dashboard.php?page=pelanggan&parent=manajemen");
}
?>