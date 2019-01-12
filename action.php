<?php

if (isset($_GET['action'])) {
  $action = $_GET['action'];

  // ----------------------- User -------------------------
  if ($action == 'user_tambah_post') { include "action/user/user_tambah_post.php"; }
  elseif ($action == 'user_delete_post') { include "action/user/user_delete_post.php"; }
  elseif ($action == 'user_edit_post') { include "action/user/user_edit_post.php"; }

  // ----------------------- Kategori -------------------------
  if ($action == 'kategori_tambah_post') { include "action/kategori/kategori_tambah_post.php"; }
  elseif ($action == 'kategori_delete_post') { include "action/kategori/kategori_delete_post.php"; }
  elseif ($action == 'kategori_edit_post') { include "action/kategori/kategori_edit_post.php"; }

  elseif ($action == 'logout') { include "action/logout_post.php"; }

} else {

}

?>