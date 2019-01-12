<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'dashboard') { }
  elseif ($page == 'user') { include "page/user.php"; }
  elseif ($page == 'user_tambah') { include "page/user_tambah.php"; }
  elseif ($page == 'user_edit') { include "page/user_edit.php"; }

} else {

}

?>