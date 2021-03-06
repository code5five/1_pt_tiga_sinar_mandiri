<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $category = new Category;
    $category = $category->find_category($id);
  }
?>

<section class="content-header">
  <h1>
    Kategori
    <small>Manajemen kategori barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Kategori Edit</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Kategori</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=kategori_edit_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kode</label>
                      <input type="hidden" name="id" value="<?= $category->id ?>">
                      <input type="name" class="form-control" name="category_code" placeholder="Masukkan kode" value="<?= $category->kode ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama" value="<?= $category->nama ?>" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                      <a href="?page=kategori&parent=manajemen" class="btn btn-danger">Back</a>
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