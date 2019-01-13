<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $category = new Category;
  $category->delete($id);
  header("Location: dashboard.php?page=kategori&parent=manajemen");
}
?>