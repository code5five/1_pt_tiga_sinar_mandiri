<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = new User;
    $user = $user->find_user($id);
  }
?>

<section class="content-header">
  <h1>
    User
    <small>Manajemen pengguna</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">User</a></li>
    <li class="active">User Edit</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=user_edit_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">User Id</label>
                      <input type="name" class="form-control" name="user_id" placeholder="Masukkan user id" required value="<?php echo $user->user_id ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="name" class="form-control" name="username" placeholder="Masukkan username" required value="<?php echo $user->username ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required value="<?php echo $user->nama ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea class="form-control" name="alamat" placeholder="Masukkan alamat" rows="4" required><?php echo $user->alamat ?></textarea>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan password" required value="<?php echo $user->password ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Konfirmasi Password</label>
                      <input type="password" class="form-control" name="password_confirmation" placeholder="Masukkan konfirmasi password" required>
                    </div>

                    <div class="form-group">
                      <label for="">Telepon</label>
                      <input type="phone" class="form-control" name="phone" placeholder="Masukkan no telepon" required value="<?php echo $user->phone ?>">
                    </div>

                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan email" required value="<?php echo $user->email ?>">
                    </div>

                    <div class="form-group">
                      <label>Role</label>
                      <select class="form-control" name="role" >
                        <option value="super_admin">super admin</option>
                        <option value="admin">admin</option>
                        <option value="sales">sales</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $user->id ?>">
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                      <a href="?page=user&parent=settings" class="btn btn-danger">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>

</section>