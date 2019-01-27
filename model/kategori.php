<?php
class Category {
  function Category() {
  }

  function get_all_category() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_kategori";
    $categories = $conn->query($query);
    return $categories;
  }

  function find_category($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_kategori WHERE id=$id";
    $category = $conn->query($query);
    $category = $category->fetch_object();
    return $category;
  }

  function create_new_category($category_code, $nama) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_kategori (id, kode, nama)
              VALUES ('', '$category_code', '$nama')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data kategori berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_category($id, $category_code, $nama) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_kategori SET kode='$category_code',
                                      nama='$nama'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data user berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;  
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_kategori WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data kategori berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

}
?>