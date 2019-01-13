<?php
class Finishing {
  function Finishing() {
  }

  function get_all_finishing() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_finishing";
    $finishing = $conn->query($query);
    return $finishing;
  }

  function find_finishing($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_finishing WHERE id=$id";
    $finishing = $conn->query($query);
    $finishing = $finishing->fetch_object();
    return $finishing;
  }

  function create_new_finishing($finishing_code, $nama) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_finishing (id, kode, nama)
              VALUES ('', '$finishing_code', '$nama')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data finishing berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_finishing($id, $finishing_code, $nama) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_finishing SET kode='$finishing_code',
                                  nama='$nama'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data finishing berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_finishing WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data finishing berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

}
?>