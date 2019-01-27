<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $finishing_code = $_POST['finishing_code'];
  $nama = $_POST['nama'];

  $finishing = new Finishing;
  $finishing->edit_finishing($id, $finishing_code, $nama);
  header("Location: dashboard.php?page=finishing&parent=manajemen");
}
?>