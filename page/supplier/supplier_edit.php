<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $supplier = new Supplier;
    $supplier = $supplier->find_supplier($id);
  }
?>

<section class="content-header">
  <h1>
    Pelanggan
    <small>Manajemen pelanggan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li class="active">Pelanggan Edit</li>
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
          <form method="post" action="?action=supplier_edit_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kode</label>
                      <input type="name" class="form-control" name="supplier_kode" placeholder="Masukkan kode" value="<?= $supplier->kode ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama" value="<?= $supplier->nama ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea class="form-control" name="alamat" placeholder="Masukkan alamat" rows="4" required><?= $supplier->alamat ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="">Phone</label>
                      <input type="name" class="form-control" name="phone" placeholder="Masukkan phone" value="<?= $supplier->phone ?>" required>
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Fax</label>
                      <input type="name" class="form-control" name="fax" placeholder="Masukkan fax" value="<?= $supplier->fax ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Contact Person</label>
                      <input type="name" class="form-control" name="contact_person" placeholder="Masukkan konfirmasi password" value="<?= $supplier->contact_person ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan email" value="<?= $supplier->email ?>" required>
                    </div>

                    <div class="form-group">
                      <label for="">Keterangan</label>
                      <input type="name" class="form-control" name="keterangan" placeholder="Masukkan email" value="<?= $supplier->keterangan ?>">
                    </div>

                    <div class="form-group">
                      <input type="hidden" value="<?= $supplier->id ?>" name="id">
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                      <a href="?page=pelanggan&parent=manajemen" class="btn btn-danger">Back</a>
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