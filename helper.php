<?php
foreach (glob("model/*.php") as $filename)
{
  include $filename;
}

session_start();
?>