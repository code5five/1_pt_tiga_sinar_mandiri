<section class="sidebar">
  <div class="user-panel">
    <div class="pull-left image">

    </div>
    <div class="pull-left info">

    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN MENU</li>

    <li <?php child_active("dashboard") ?>><a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

    <li class="treeview <?php parent_active("settings") ?>">
      <a href="#">
        <i class="fa fa-gear"></i>
        <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="<?php display_child("settings") ?>">
        <li <?php if (child_active("user") || child_active("user_tambah") || child_active("user_edit")) ?>><a href="?page=user&parent=settings"><i class="fa fa-user"></i> User</a></li>
        <li <?php child_active("role") ?>><a href="?page=role&parent=settings"><i class="fa fa-hand-paper-o"></i> Role</a></li>
      </ul>
    </li>

    <li class="treeview <?php parent_active("manajemen") ?>">
      <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>Manajemen</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="<?php display_child("manajemen") ?>">
        <li <?php child_active("barang") ?>><a href="?page=barang&parent=manajemen"><i class="fa fa-dropbox"></i> Stock & Barang</a></li>
        <li <?php if (child_active("kategori") || child_active("kategori_tambah") || child_active("kategori_edit")) ?>><a href="?page=kategori&parent=manajemen"><i class="fa fa-google-wallet"></i> Kategori Barang</a></li>
        <li <?php if (child_active("jenis") || child_active("jenis_tambah") || child_active("jenis_edit")) ?>><a href="?page=jenis&parent=manajemen"><i class="fa fa-square"></i> Jenis Bentuk</a></li>
        <li <?php if (child_active("finishing") || child_active("finishing_tambah") || child_active("finishing_edit")) ?>><a href="?page=finishing&parent=manajemen"><i class="fa fa-paint-brush"></i> Finishing</a></li>
        <li <?php if (child_active("pelanggan") || child_active("pelanggan_tambah") || child_active("pelanggan_edit")) ?>><a href="?page=pelanggan&parent=manajemen"><i class="fa fa-users"></i> Pelanggan</a></li>
        <li <?php if (child_active("supplier") || child_active("supplier_tambah") || child_active("supplier_edit")) ?>><a href="?page=supplier&parent=manajemen"><i class="fa fa-ils"></i> Supplier</a></li>
      </ul>
    </li>

    <li class="treeview <?php parent_active("transaksi") ?>">
      <a href="#">
        <i class="fa fa-credit-card"></i>
        <span>Transaksi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="<?php display_child("transaksi") ?>">
        <li <?php child_active("transaksi_pembelian") ?>><a href="?page=transaksi_pembelian&parent=transaksi"><i class="fa fa-reply"></i> Pembelian</a></li>
        <li <?php child_active("transaksi_pemasukan_lain") ?>><a href="?page=transaksi_pemasukan_lain&parent=transaksi"><i class="fa fa-reply-all"></i> Pemasukan Barang Lain</a></li>
        <li <?php child_active("transaksi_penjualan") ?>><a href="?page=transaksi_penjualan&parent=transaksi"><i class="fa fa-share"></i> Penjualan</a></li>
        <li <?php child_active("transaksi_pengeluaran_lain") ?>><a href="?page=transaksi_pengeluaran_lain&parent=transaksi"><i class="fa fa-share"></i> Pengeluaran Barang Lain</a></li>
        <li <?php child_active("transaksi_entry_stock_awal") ?>><a href="?page=transaksi_entry_stock_awal&parent=transaksi"><i class="fa fa-share-square-o"></i> Entry Stock Awal</a></li>
        <li <?php child_active("transaksi_stock_opname") ?>><a href="?page=transaksi_stock_opname&parent=transaksi"><i class="fa fa-chain"></i> Stock Opname</a></li>
        <li <?php child_active("transaksi_closing_stock") ?>><a href="?page=transaksi_closing_stock&parent=transaksi"><i class="fa fa-times-circle"></i> Closing Stock</a></li>
      </ul>
    </li>

    <li class="treeview <?php parent_active("laporan") ?>">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="<?php display_child("laporan") ?>">
        <li <?php child_active("laporan_rekap_saldo_stock") ?>><a href="?page=laporan_rekap_saldo_stock&parent=laporan"><i class="fa fa-file-text-o"></i> Rekap Saldo Stock</a></li>
        <li <?php child_active("laporan_buku_stock") ?>><a href="?page=laporan_buku_stock&parent=laporan"><i class="fa fa-book"></i> Buku Stock</a></li>
        <li <?php child_active("laporan_history_pembelian") ?>><a href="?page=laporan_history_pembelian&parent=laporan"><i class="fa fa-bars"></i> History Pembelian</a></li>
        <li <?php child_active("laporan_history_penjualan") ?>><a href="?page=laporan_history_penjualan&parent=laporan"><i class="fa fa-bars"></i> History Penjualan</a></li>
        <li <?php child_active("laporan_mutasi_barang") ?>><a href="?page=laporan_mutasi_barang&parent=laporan"><i class="fa fa-bus"></i> Mutasi Barang</a></li>
      </ul>
    </li>

  </ul>
</section>

<?php
function parent_active($parent) {
  if (isset($_GET['parent'])) {
    if ($_GET['parent'] == $parent) {
      echo "active menu-open";
    }
  }
}

function display_child($parent) {
  if (isset($_GET['parent'])) {
    if ($_GET['parent'] == $parent) {
      echo "";
    } else {
      echo "display: none;";
    }
  }
}

function child_active($page) {
  if (isset($_GET['page'])) {
    if ($_GET['page'] == $page) {
      echo "class=\"active\"";
    }
  } elseif ($page == 'dashboard') {
    echo "class=\"active\"";
  }
}
?>
