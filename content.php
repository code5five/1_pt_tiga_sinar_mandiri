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

  // -------------------- Role -----------------------------
  elseif ($page == 'role') { include "page/role.php"; }

} else {

}

?>