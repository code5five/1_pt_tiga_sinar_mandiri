<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $jenis = new Jenis;
  $jenis->delete($id);
  header("Location: dashboard.php?page=jenis&parent=manajemen");
}
?>