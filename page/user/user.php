<?php
  $user = new User;
  $result = $user->get_all_user();
?>

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
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $user): ?>
                    <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['user_id']; ?></td>
                      <td><?php echo $user['username']; ?></td>
                      <td><?php echo $user['nama']; ?></td>
                      <td><?php echo $user['password']; ?></td>
                      <td><?php echo $user['phone']; ?></td>
                      <td><?php echo $user['alamat']; ?></td>
                      <td><?php echo $user['email']; ?></td>
                      <td><?php echo $user['role']; ?></td>
                      <td>
                        <a href="?page=user_edit&parent=settings&id=<?php echo $user['id'] ?>" class="btn btn-info btn-xs">edit</a>
                        <a href="?action=user_delete_post&id=<?php echo $user['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')">delete</a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>