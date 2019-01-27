<?php
class Barang {
  function Barang() {
  }

  function get_all_barang() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_barang";
    $barang = $conn->query($query);
    return $barang;
  }

  function find_barang($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_barang WHERE id=$id";
    $barang = $conn->query($query);
    $barang = $barang->fetch_object();
    return $barang;
  }

  function create_new_barang($kode, $nama, $stok, $kategori_id, $jenis_id, $finishing_id, $satuan, $harga_beli, $harga_jual, $harga_jual_disc, $keterangan, $gudang_id) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_barang (id, kode, nama, stok, kategori_id, jenis_id, finishing_id, satuan, harga_beli, harga_jual, harga_jual_disc, keterangan, gudang_id)
              VALUES ('', '$kode', '$nama', '$stok', '$kategori_id', '$jenis_id', '$finishing_id', '$satuan', '$harga_beli', '$harga_jual', '$harga_jual_disc', '$keterangan', '$gudang_id')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data barang berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_barang($id, $kode, $nama, $stok, $kategori_id, $jenis_id, $finishing_id, $satuan, $harga_beli, $harga_jual, $harga_jual_disc, $keterangan, $gudang_id) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_barang SET kode='$kode',
                                    nama='$nama',
                                    stok='$stok',
                                    kategori_id='$kategori_id',
                                    jenis_id='$jenis_id',
                                    finishing_id='$finishing_id',
                                    satuan='$satuan',
                                    harga_beli='$harga_beli',
                                    harga_jual='$harga_jual',
                                    harga_jual_disc='$harga_jual_disc',
                                    keterangan='$keterangan',
                                    gudang_id='$gudang_id'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data barang berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_barang WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data barang berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

}
?>
