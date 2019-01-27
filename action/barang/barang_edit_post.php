<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $stok = $_POST['stok'];
  $kategori_id = $_POST['kategori_id'];
  $jenis_id = $_POST['jenis_id'];
  $finishing_id = $_POST['finishing_id'];
  $satuan = $_POST['satuan'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = $_POST['harga_jual'];
  $harga_jual_disc = $_POST['harga_jual_disc'];
  $keterangan = $_POST['keterangan'];
  $gudang_id = $_POST['gudang_id'];

  $barang = new Barang;
  $barang->edit_barang($id, $kode, $nama, $stok, $kategori_id, $jenis_id, $finishing_id, $satuan, $harga_beli, $harga_jual, $harga_jual_disc, $keterangan, $gudang_id);
  header("Location: dashboard.php?page=barang&parent=manajemen");
}
?>