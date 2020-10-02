<?php
class Produk {
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataProduk() {
        $sql = "SELECT produk.* FROM produk";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function detailProduk($id) {
        $sql = "SELECT produk.nama_produk, produk.harga, produk.jumlah, produk.keterangan
                FROM produk 
                WHERE produk.id = ?";  
        $ps = $this->koneksi->prepare($sql); 
        $ps->execute($id); 
        $rs = $ps->fetch(); 
        return $rs;
    }

    public function tambah($data) {
        $sql = "INSERT INTO produk(nama_produk, harga, jumlah, keterangan) 
                VALUES (?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data) {
        $sql = "UPDATE produk SET nama_produk = ?, harga = ?, jumlah = ?, keterangan = ? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id) {
        $sql = "DELETE FROM produk WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }
}