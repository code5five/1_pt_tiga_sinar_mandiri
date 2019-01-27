<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $jenis_code = $_POST['jenis_code'];
  $nama = $_POST['nama'];

  $jenis = new Jenis;
  $jenis->edit_jenis($id, $jenis_code, $nama);
  header("Location: dashboard.php?page=jenis&parent=manajemen");
}
?>