<?php
include "lib/db_config.php";
foreach (glob("model/*.php") as $filename)
{
  include $filename;
}

session_start();
?>