<?php

if (isset($_GET['action'])) {
  $action = $_GET['action'];

  // ----------------------- User -------------------------
  if ($action == 'user_tambah_post') { include "action/user/user_tambah_post.php"; }
  elseif ($action == 'user_delete_post') { include "action/user/user_delete_post.php"; }
  elseif ($action == 'user_edit_post') { include "action/user/user_edit_post.php"; }

  // ----------------------- Role -------------------------
  if ($action == 'role_tambah_post') { include "action/role/role_tambah_post.php"; }
  elseif ($action == 'role_delete_post') { include "action/role/role_delete_post.php"; }
  elseif ($action == 'role_edit_post') { include "action/role/role_edit_post.php"; }

  // ----------------------- Kategori -------------------------
  if ($action == 'kategori_tambah_post') { include "action/kategori/kategori_tambah_post.php"; }
  elseif ($action == 'kategori_delete_post') { include "action/kategori/kategori_delete_post.php"; }
  elseif ($action == 'kategori_edit_post') { include "action/kategori/kategori_edit_post.php"; }

  // ----------------------- Jenis------------------
  if ($action == 'jenis_tambah_post') { include "action/jenis/jenis_tambah_post.php"; }
  elseif ($action == 'jenis_delete_post') { include "action/jenis/jenis_delete_post.php"; }
  elseif ($action == 'jenis_edit_post') { include "action/jenis/jenis_edit_post.php"; }

  // ----------------------- Finishing------------------
  if ($action == 'finishing_tambah_post') { include "action/finishing/finishing_tambah_post.php"; }
  elseif ($action == 'finishing_delete_post') { include "action/finishing/finishing_delete_post.php"; }
  elseif ($action == 'finishing_edit_post') { include "action/finishing/finishing_edit_post.php"; }

  // ----------------------- Pelanggan------------------
  if ($action == 'pelanggan_tambah_post') { include "action/pelanggan/pelanggan_tambah_post.php"; }
  elseif ($action == 'pelanggan_delete_post') { include "action/pelanggan/pelanggan_delete_post.php"; }
  elseif ($action == 'pelanggan_edit_post') { include "action/pelanggan/pelanggan_edit_post.php"; }

  // ----------------------- Supplier------------------
  if ($action == 'supplier_tambah_post') { include "action/supplier/supplier_tambah_post.php"; }
  elseif ($action == 'supplier_delete_post') { include "action/supplier/supplier_delete_post.php"; }
  elseif ($action == 'supplier_edit_post') { include "action/supplier/supplier_edit_post.php"; }

  elseif ($action == 'logout') { include "action/logout_post.php"; }

} else {

}

?>