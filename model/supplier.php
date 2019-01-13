<?php
class Supplier {
  function Supplier() {
  }

  function get_all_supplier() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_supplier";
    $supplier = $conn->query($query);
    return $supplier;
  }

  function find_supplier($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_supplier WHERE id=$id";
    $supplier = $conn->query($query);
    $supplier = $supplier->fetch_object();
    return $supplier;
  }

  function create_new_supplier($supplier_kode, $nama, $alamat, $phone, $fax, $contact_person, $email,$keterangan) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_supplier (id, kode, nama, alamat, phone, fax, contact_person, email, keterangan)
              VALUES ('', '$supplier_kode', '$nama', '$alamat', '$phone', '$fax', '$contact_person', '$email', '$keterangan')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data supplier berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_supplier($id, $supplier_kode, $nama, $alamat, $phone, $fax, $contact_person, $email, $keterangan) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_supplier SET kode='$supplier_kode',
                                  nama='$nama',
                                  alamat='$alamat',
                                  phone='$phone',
                                  fax='$fax',
                                  contact_person='$contact_person',
                                  email='$email',
                                  keterangan='$keterangan'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data supplier berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_supplier WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data supplier berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }
}
?>