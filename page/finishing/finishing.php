<?php
  $finishing = new Finishing;
  $result = $finishing->get_all_finishing();
?>

<section class="content-header">
  <h1>
    Finishing
    <small>Manajemen finishing barang</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#">Settings</a></li>
    <li class="active">Finishing</li>
  </ol>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-12">
      <div class="box box-success box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Data Finishing</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="box-body" style="">
          <a href="?page=finishing_tambah&parent=manajemen" class="btn btn-md btn-success"><i></i> Tambah Finishing</a>

          <div class="row">
            <div class="col-md-12">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Finishing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>Id</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($result as $finishing): ?>
                    <tr>
                      <td><?php echo $finishing['id']; ?></td>
                      <td><?php echo $finishing['kode']; ?></td>
                      <td><?php echo $finishing['nama']; ?></td>
                      <td>
                        <a href="?page=finishing_edit&parent=manajemen&id=<?php echo $finishing['id'] ?>" class="btn btn-info btn-xs">edit</a>
                        <a href="?action=finishing_delete_post&id=<?php echo $finishing['id'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin?')">delete</a>
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