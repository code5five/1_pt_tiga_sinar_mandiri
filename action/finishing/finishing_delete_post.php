<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $finishing = new Finishing;
  $finishing->delete($id);
  header("Location: dashboard.php?page=finishing&parent=manajemen");
}
?>