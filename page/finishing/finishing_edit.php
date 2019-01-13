<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $finishing = new Finishing;
    $finishing = $finishing->find_finishing($id);
  }
?>

<section class="content-header">
  <h1>
    Finishing
    <small>Manajemen finishing barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li class="active">Finishing Edit</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Finishing</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=finishing_edit_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kode</label>
                      <input type="hidden" name="id" value="<?= $finishing->id ?>">
                      <input type="name" class="form-control" name="finishing_code" placeholder="Masukkan kode" value="<?= $finishing->kode ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama" value="<?= $finishing->nama ?>" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                      <a href="?page=finishing&parent=manajemen" class="btn btn-danger">Back</a>
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