<?php 

    $user = $_SESSION['username'];
    $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$user'");
    $userdata = mysqli_fetch_array($sql);

?>
<a href="?page=dashboard" class="logo">
    <span class="logo-mini"><b>A</b>DM</span>
    <span class="logo-lg">
    <i class="fa fa-user"></i> <?= $userdata['username'] ?>
    </span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="img/pln.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= strtoupper($userdata['username']) ?></span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                <img src="img/pln.png" class="img-circle" alt="User Image">
                    <p>
                        <?= "<b>".$userdata['username'] ."</b>"; ?>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="?page=logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </li> 
            </ul>
        </li>
    </ul>
    </div>
</nav>