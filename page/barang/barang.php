<?php
  $barang = new Barang;
  $result = $barang->get_all_barang();
?>

<section class="content-header">
  <h1>
    Barang
    <small>Manajemen data barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Manajemen</a></li>
    <li class="active">Barang</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Data Barang</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <a href="?page=barang_tambah&parent=manajemen" class="btn btn-md btn-success"><i></i> Tambah Barang</a>

          <div class="row">
            <div class="col-md-12">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>Id</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Kategori_id</th>
                    <th>Jenis_id</th>
                    <th>Finishing_id</th>
                    <th>Satuan</th>
                    <th>Harga_beli</th>
                    <th>Harga_jual</th>
                    <th>Harga_jual_disc</th>
                    <th>Keterangan</th>
                    <th>Gudang_id</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $barang): ?>
                    <tr>
                      <td><?php echo $barang['id']; ?></td>
                      <td><?php echo $barang['kode']; ?></td>
                      <td><?php echo $barang['nama']; ?></td>
                      <td><?php echo $barang['stok']; ?></td>
                      <td><?php echo $barang['kategori_id']; ?></td>
                      <td><?php echo $barang['jenis_id']; ?></td>
                      <td><?php echo $barang['finishing_id']; ?></td>
                      <td><?php echo $barang['satuan']; ?></td>
                      <td><?php echo $barang['harga_beli']; ?></td>
                      <td><?php echo $barang['harga_jual']; ?></td>
                      <td><?php echo $barang['harga_jual_disc']; ?></td>
                      <td><?php echo $barang['keterangan']; ?></td>
                      <td><?php echo $barang['gudang_id']; ?></td>
                      <td>
                        <a href="?page=barang_edit&parent=manajemen&id=<?php echo $barang['id'] ?>" class="btn btn-info btn-xs">edit</a>
                        <a href="?action=barang_delete_post&id=<?php echo $barang['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')">delete</a>
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