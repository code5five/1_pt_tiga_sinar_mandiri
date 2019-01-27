<?php
class Jenis {
  function Jenis() {
  }

  function get_all_jenis() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_jenis";
    $jenis = $conn->query($query);
    return $jenis;
  }

  function find_jenis($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_jenis WHERE id=$id";
    $jenis = $conn->query($query);
    $jenis = $jenis->fetch_object();
    return $jenis;
  }

  function create_new_jenis($jenis_code, $nama) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_jenis (id, kode, nama)
              VALUES ('', '$jenis_code', '$nama')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data jenis berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_jenis($id, $jenis_code, $nama) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_jenis SET kode='$jenis_code',
                                   nama='$nama'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data jenis berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_jenis WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data jenis berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

}
?>