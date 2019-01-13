<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $category_code = $_POST['category_code'];
  $nama = $_POST['nama'];

  $category = new Category;
  $category->edit_category($id,$category_code, $nama);
  header("Location: dashboard.php?page=kategori&parent=manajemen");
}
?>