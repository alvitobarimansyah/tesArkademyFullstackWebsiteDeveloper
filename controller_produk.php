<?php
include_once 'connect.php';
include_once 'models/Produk.php';
$produk = $_POST['produk'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];
$data = [$produk, $harga, $jumlah, $keterangan];
$tombol = $_POST['proses'];
$model = new Produk();
switch ($tombol) {
    case 'simpan': $model->tambah($data); break;

    case 'ubah': 
        $data[] = $_POST['idx']; 
        $model->ubah($data); break;

    case 'hapus':
        unset($data); 
        $id = [$_POST['idx']]; 
        $model->hapus($id); break; 
          
    default: header('location:index.php?hal=produk');
}

header('location: index.php?hal=produk');