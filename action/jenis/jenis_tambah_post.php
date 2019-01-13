<?php
if (isset($_POST['submit'])) {
  $jenis_code = $_POST['jenis_code'];
  $nama = $_POST['nama'];

  $jenis = new Jenis;
  $jenis->create_new_jenis($jenis_code, $nama);
  header("Location: dashboard.php?page=jenis&parent=manajemen");
}
?>