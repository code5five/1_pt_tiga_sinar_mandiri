<?php
if (isset($_POST['submit'])) {
  $pelanggan_kode = $_POST['pelanggan_kode'];
  $nama = $_POST['nama'];
  $alamat = addslashes($_POST['alamat']);
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $contact_person = $_POST['contact_person'];
  $email = $_POST['email'];
  $keterangan = $_POST['keterangan'];

  $pelanggan = new Pelanggan;
  $pelanggan->create_new_pelanggan($pelanggan_kode, $nama, $alamat, $phone, $fax, $contact_person, $email,$keterangan);
  header("Location: dashboard.php?page=pelanggan&parent=manajemen");
}
?>