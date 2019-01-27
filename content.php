<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'dashboard') { }

  // -------------------- User -----------------------------
  elseif ($page == 'user') { include "page/user/user.php"; }
  elseif ($page == 'user_tambah') { include "page/user/user_tambah.php"; }
  elseif ($page == 'user_edit') { include "page/user/user_edit.php"; }

  // -------------------- Kategori -----------------------------
  elseif ($page == 'kategori') { include "page/kategori/kategori.php"; }
  elseif ($page == 'kategori_tambah') { include "page/kategori/kategori_tambah.php"; }
  elseif ($page == 'kategori_edit') { include "page/kategori/kategori_edit.php"; }

  // -------------------- Jenis -----------------------------
  elseif ($page == 'jenis') { include "page/jenis/jenis.php"; }
  elseif ($page == 'jenis_tambah') { include "page/jenis/jenis_tambah.php"; }
  elseif ($page == 'jenis_edit') { include "page/jenis/jenis_edit.php"; }

  // -------------------- Finishing -----------------------------
  elseif ($page == 'finishing') { include "page/finishing/finishing.php"; }
  elseif ($page == 'finishing_tambah') { include "page/finishing/finishing_tambah.php"; }
  elseif ($page == 'finishing_edit') { include "page/finishing/finishing_edit.php"; }

  // -------------------- Pelanggan -----------------------------
  elseif ($page == 'pelanggan') { include "page/pelanggan/pelanggan.php"; }
  elseif ($page == 'pelanggan_tambah') { include "page/pelanggan/pelanggan_tambah.php"; }
  elseif ($page == 'pelanggan_edit') { include "page/pelanggan/pelanggan_edit.php"; }

  // -------------------- Supplier -----------------------------
  elseif ($page == 'supplier') { include "page/supplier/supplier.php"; }
  elseif ($page == 'supplier_tambah') { include "page/supplier/supplier_tambah.php"; }
  elseif ($page == 'supplier_edit') { include "page/supplier/supplier_edit.php"; }

  // -------------------- Role -----------------------------
  elseif ($page == 'role') { include "page/role/role.php"; }
  elseif ($page == 'role_tambah') { include "page/role/role_tambah.php"; }
  elseif ($page == 'role_edit') { include "page/role/role_edit.php"; }

  // -------------------- Barang -----------------------------
  elseif ($page == 'barang') { include "page/barang/barang.php"; }
  elseif ($page == 'barang_tambah') { include "page/barang/barang_tambah.php"; }
  elseif ($page == 'barang_edit') { include "page/barang/barang_edit.php"; }

} else {

}

?>