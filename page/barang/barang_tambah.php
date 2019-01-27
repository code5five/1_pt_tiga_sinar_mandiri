<section class="content-header">
  <h1>
    Barang
    <small>Manajemen barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Manajemen</a></li>
    <li class="active">Barang Tambah</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Barang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">

          <form method="post" action="?action=barang_tambah_post">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kode</label>
                      <input type="name" class="form-control" name="kode" placeholder="Masukkan kode" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="name" class="form-control" name="nama" placeholder="Masukkan nama" required>
                    </div>

                    <div class="form-group">
                      <label for="">Stok</label>
                      <input type="number" class="form-control" name="stok" placeholder="Masukkan stok" required>
                    </div>

                    <div class="form-group">
                      <label for="">Kategori id</label>
                      <input type="number" class="form-control" name="kategori_id" placeholder="Masukkan kategori id" required>
                    </div>

                    <div class="form-group">
                      <label for="">Jenis id</label>
                      <input type="number" class="form-control" name="jenis_id" placeholder="Masukkan jenis id" required>
                    </div>

                    <div class="form-group">
                      <label for="">Finishing id</label>
                      <input type="number" class="form-control" name="finishing_id" placeholder="Masukkan finishing id" required>
                    </div>

                    <div class="form-group">
                      <label for="">Satuan</label>
                      <input type="name" class="form-control" name="satuan" placeholder="Masukkan satuan" required>
                    </div>

                    <div class="form-group">
                      <label for="">Harga beli</label>
                      <input type="number" class="form-control" name="harga_beli" placeholder="Masukkan harga beli" required>
                    </div>

                    <div class="form-group">
                      <label for="">Harga jual</label>
                      <input type="number" class="form-control" name="harga_jual" placeholder="Masukkan harga jual" required>
                    </div>

                    <div class="form-group">
                      <label for="">Harga jual diskon</label>
                      <input type="number" class="form-control" name="harga_jual_disc" placeholder="Masukkan harga jual diskon" required>
                    </div>

                    <div class="form-group">
                      <label for="">Keterangan</label>
                      <input type="name" class="form-control" name="keterangan" placeholder="Masukkan keterangan" required>
                    </div>

                    <div class="form-group">
                      <label for="">Gudang id</label>
                      <input type="number" class="form-control" name="gudang_id" placeholder="Masukkan gudang id" required>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>
                      <a href="?page=finishing&parent=manajemen" class="btn btn-danger">Back</a>
                    </div>

                  </div>

                  <div>
                    
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