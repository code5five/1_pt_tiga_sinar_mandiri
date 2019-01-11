<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if ($page == 'dashboard') { }
  elseif ($page == 'user') { include "page/user.php"; }

} elseif (isset($_GET['action'])) {

} else {

}

?>