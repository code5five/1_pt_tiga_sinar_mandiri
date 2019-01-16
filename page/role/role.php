<?php
  $role = new Role;
  $result = $role->get_all_role();
?>

<section class="content-header">
  <h1>
    Role
    <small>Manajemen aksi user</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li class="active">Role</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Data Role</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <a href="?page=role_tambah&parent=settings" class="btn btn-md btn-success"><i></i> Tambah Role</a>

          <div class="row">
            <div class="col-md-12">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel role</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>Id</th>
                    <th>Role</th>
                    <th>Aksi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $user): ?>
                    <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['role']; ?></td>
                      <td><?php echo $user['aksi']; ?></td>
                      <td><?php echo $user['status']; ?></td>
                      <td>
                        <a href="?page=role_edit&id=<?php echo $user['id'] ?>" class="btn btn-info btn-xs">edit</a>
                        <a href="?action=role_delete_post&id=<?php echo $user['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')">delete</a>
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