<?php
function parent_active() {

}

function child_active() {

}
?>

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

    <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-gear"></i>
        <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="?page=user"><i class="fa fa-user"></i> User</a></li>
        <li><a href="?page=aksi"><i class="fa fa-hand-paper-o"></i> Aksi</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-pencil-square-o"></i>
        <span>Manajemen</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="?page=barang"><i class="fa fa-dropbox"></i> Stock & Barang</a></li>
        <li><a href="?page=kategori"><i class="fa fa-google-wallet"></i> Kategori Barang</a></li>
        <li><a href="?page=jenis"><i class="fa fa-square"></i> Jenis Bentuk</a></li>
        <li><a href="?page=finishing"><i class="fa fa-paint-brush"></i> Finishing</a></li>
        <li><a href="?page=pelanggan"><i class="fa fa-users"></i> Pelanggan</a></li>
        <li><a href="?page=supplier"><i class="fa fa-ils"></i> Supplier</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-credit-card"></i>
        <span>Transaksi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="?page=transaksi_pembelian"><i class="fa fa-reply"></i> Pembelian</a></li>
        <li><a href="?page=transaksi_pemasukan_lain"><i class="fa fa-reply-all"></i> Pemasukan Barang Lain</a></li>
        <li><a href="?page=transaksi_penjualan"><i class="fa fa-share"></i> Penjualan</a></li>
        <li><a href="?page=transaksi_pengeluaran_lain"><i class="fa fa-share"></i> Pengeluaran Barang Lain</a></li>
        <li><a href="?page=transaksi_entry_stock_awal"><i class="fa fa-share-square-o"></i> Entry Stock Awal</a></li>
        <li><a href="?page=transaksi_stock_opname"><i class="fa fa-chain"></i> Stock Opname</a></li>
        <li><a href="?page=transaksi_closing_stock"><i class="fa fa-times-circle"></i> Closing Stock</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Laporan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="?page=laporan_rekap_saldo_stock"><i class="fa fa-file-text-o"></i> Rekap Saldo Stock</a></li>
        <li><a href="?page=laporan_buku_stock"><i class="fa fa-book"></i> Buku Stock</a></li>
        <li><a href="?page=laporan_history_pembelian"><i class="fa fa-bars"></i> History Pembelian</a></li>
        <li><a href="?page=laporan_history_penjualan"><i class="fa fa-bars"></i> History Penjualan</a></li>
        <li><a href="?page=laporan_mutasi_barang"><i class="fa fa-bus"></i> Mutasi Barang</a></li>
      </ul>
    </li>

  </ul>
</section>