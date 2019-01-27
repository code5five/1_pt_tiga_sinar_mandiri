<?php
  $pelanggan = new Pelanggan;
  $result = $pelanggan->get_all_pelanggan();
?>

<section class="content-header">
  <h1>
    Pelanggan
    <small>Manajemen pelanggan</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Manajemen</a></li>
    <li class="active">Pelanggan</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pelanggan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <a href="?page=pelanggan_tambah&parent=manajemen" class="btn btn-md btn-success"><i></i> Tambah Pelanggan</a>

          <div class="row">
            <div class="col-md-12">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel pelanggan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                    <tr role="row">
                      <th>Id</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Phone</th>
                      <th>Fax</th>
                      <th>Contact Person</th>
                      <th>Email</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($result as $pelanggan): ?>
                      <tr>
                        <td><?php echo $pelanggan['id']; ?></td>
                        <td><?php echo $pelanggan['kode']; ?></td>
                        <td><?php echo $pelanggan['nama']; ?></td>
                        <td><?php echo $pelanggan['alamat']; ?></td>
                        <td><?php echo $pelanggan['phone']; ?></td>
                        <td><?php echo $pelanggan['fax']; ?></td>
                        <td><?php echo $pelanggan['contact_person']; ?></td>
                        <td><?php echo $pelanggan['email']; ?></td>
                        <td><?php echo $pelanggan['keterangan']; ?></td>
                        <td>
                          <a href="?page=pelanggan_edit&parent=manajemen&id=<?php echo $pelanggan['id'] ?>" class="btn btn-info btn-xs">edit</a>
                          <a href="?action=pelanggan_delete_post&id=<?php echo $pelanggan['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')">delete</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>

                </table>
              </div>
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