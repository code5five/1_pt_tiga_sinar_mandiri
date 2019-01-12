<section class="content-header">
  <h1>
    Kategori
    <small>Manajemen kategori barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Kategori Tambah</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=user_tambah_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kategori Id</label>
                      <input type="name" class="form-control" name="category_id" placeholder="Masukkan kategori id" required>
                    </div>

                    <div class="form-group">
                      <label for="">Kode</label>
                      <input type="name" class="form-control" name="username" placeholder="Masukkan kode" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama kategori" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success pull-left" type="submit" name="submit">Submit</button>
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