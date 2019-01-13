<?php
if (isset($_POST['submit'])) {
  $category_code = $_POST['category_code'];
  $nama = $_POST['nama'];

  $category = new Category;
  $category->create_new_category($category_code, $nama);
  header("Location: dashboard.php?page=kategori&parent=manajemen");
}
?>