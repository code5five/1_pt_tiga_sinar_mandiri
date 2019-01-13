<?php
if (isset($_POST['submit'])) {
  $supplier_kode = $_POST['supplier_kode'];
  $nama = $_POST['nama'];
  $alamat = addslashes($_POST['alamat']);
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $contact_person = $_POST['contact_person'];
  $email = $_POST['email'];
  $keterangan = $_POST['keterangan'];

  $supplier = new Supplier;
  $supplier->create_new_supplier($supplier_kode, $nama, $alamat, $phone, $fax, $contact_person, $email,$keterangan);
  header("Location: dashboard.php?page=supplier&parent=manajemen");
}
?>