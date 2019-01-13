<?php
if (isset($_POST['submit'])) {
  $finishing_code = $_POST['finishing_code'];
  $nama = $_POST['nama'];

  $finishing = new Finishing;
  $finishing->create_new_finishing($finishing_code, $nama);
  header("Location: dashboard.php?page=finishing&parent=manajemen");
}
?>