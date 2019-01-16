<section class="content-header">
  <h1>
    Role
    <small>Manajemen aksi user</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">Role</a></li>
    <li class="active">Role Tambah</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Role</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=role_tambah_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Role</label>
                      <input type="name" class="form-control" name="role" placeholder="Masukkan nama role" required>
                    </div>

                    <div class="form-group">
                      <label for="">Aksi</label>
                      <input type="name" class="form-control" name="aksi" placeholder="Masukkan aksi" required>
                    </div>

                    <div class="form-group">
                      <label for="">Status</label>
                      <input type="name" class="form-control" name="status" placeholder="Masukkan status" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success pull-left" type="submit" name="submit">Submit</button>
                      <a href="?page=role&parent=settings" class="btn btn-danger">Back</a>
                    </div>
                  </div>

                  <div class="col-md-6">

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