<section class="sidebar">
    <div class="user-panel">
    <div class="pull-left image">
        
    </div>
    <div class="pull-left info">
        <p><?= $userdata->username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <li class="<?php if ($_GET['page'] == 'dashboard'){ echo "active";} ?>"><a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    </ul>
</section>