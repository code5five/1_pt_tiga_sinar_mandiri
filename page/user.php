<section class="content-header">
  <h1>
    User
    <small>Manajemen pengguna</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li class="active">User</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <a href="?page=user_tambah&parent=settings" class="btn btn-md btn-success"><i></i> Tambah User</a>

          <div class="row">
            <div class="col-md-12">
              <table class="tbl">
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<section class="content">
  <?php
    $user = new User;
    $result = $user->get_all_user();
    foreach ($result as $user) {
      echo $user['id'];
    }
  ?>
</section>