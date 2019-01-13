<?php
class Pelanggan {
  function Pelanggan() {
  }

  function get_all_pelanggan() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_customer";
    $pelanggan = $conn->query($query);
    return $pelanggan;
  }

  function find_pelanggan($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_customer WHERE id=$id";
    $pelanggan = $conn->query($query);
    $pelanggan = $pelanggan->fetch_object();
    return $pelanggan;
  }

  function create_new_pelanggan($pelanggan_kode, $nama, $alamat, $phone, $fax, $contact_person, $email,$keterangan) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_customer (id, kode, nama, alamat, phone, fax, contact_person, email, keterangan)
              VALUES ('', '$pelanggan_kode', '$nama', '$alamat', '$phone', '$fax', '$contact_person', '$email', '$keterangan')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data pelanggan berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_pelanggan($id, $pelanggan_kode, $nama, $alamat, $phone, $fax, $contact_person, $email, $keterangan) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_customer SET kode='$pelanggan_kode',
                                  nama='$nama',
                                  alamat='$alamat',
                                  phone='$phone',
                                  fax='$fax',
                                  contact_person='$contact_person',
                                  email='$email',
                                  keterangan='$keterangan'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data pelanggan berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_customer WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data pelanggan berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }
}
?>