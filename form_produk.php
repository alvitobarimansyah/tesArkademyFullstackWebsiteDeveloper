<?php
    $id = $_GET['idedit'];
    $model = new Produk();
    if(!empty($id)) {
        $rs = $model->detailProduk([$id]);
    } else {
        $rs = [];
    }
    ?>
    <h3>Form Produk</h3>
    <form action="controller_produk.php" method="post" >
        <div class="form-group row">
            <label for="produk" class="col-4 col-form-label"> Nama Produk </label> 
            <div class="col-8">
                <input id="produk" name="produk" value="<?= $rs['nama_produk']?> " type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-4 col-form-label"> Harga </label> 
            <div class="col-8">
                <input id="harga" name="harga" value="<?= $rs['harga'] ?>" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label"> Jumlah </label> 
            <div class="col-8">
                <input id="jumlah" name="jumlah" value="<?= $rs['jumlah'] ?>" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-4 col-form-label"> Keterangan </label> 
            <div class="col-8">
                <input id="keterangan" name="keterangan" value="<?= $rs['keterangan'] ?>" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
            <?php 
            if(empty($id)) {
            ?>
                <button name="proses" value="simpan" type="submit" class="btn btn-primary"> Add </button>
            <?php } else { ?>
                <button name="proses" value="ubah" type="submit" class="btn btn-warning"> Update </button>
                <button name="proses" value="hapus" onclick="return confirm('Yakin mau dihapus')" type="submit" class="btn btn-danger"> Delete </button>
                <input type="hidden" name="idx" value="<?= $id ?>">
            <?php } ?>
            <button name="proses" value="batal" type="submit" class="btn btn-info"> Cancel </button>
            </div>
        </div>
    </form>
