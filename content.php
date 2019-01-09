<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="dashboard";

if ($page == "dashboard") include("page/dashboard.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- user --------------------------
    elseif ($page == "user")                include("page/user/user.php");
    elseif ($page == "useradd")             include("page/user/useradd.php");
    elseif ($page == "useraddpro")          include("page/user/useraddpro.php");
    elseif ($page == "useredit")            include("page/user/useredit.php");
    elseif ($page == "usereditpro")         include("page/user/usereditpro.php");
    elseif ($page == "userdelete")          include("page/user/userdelete.php");


else echo"Konten tidak ada";

?>