<?php

if (isset($_GET['action'])) {
  $action = $_GET['action'];

  if ($action == 'user_tambah_post') { include "action/user_tambah_post.php"; }
  elseif ($action == 'user_delete_post') { include "action/user_delete_post.php"; }
  elseif ($action == 'user_edit_post') { include "action/user_edit_post.php"; }
  elseif ($action == 'logout') { include "action/logout_post.php"; }

} else {

}

?>