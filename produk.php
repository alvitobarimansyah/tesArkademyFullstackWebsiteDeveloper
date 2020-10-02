<?php
	$ar_judul = ['No', 'Nama Produk', 'Harga', 'Jumlah', 'Keterangan', 'Action'];
	?>
	<a href="index.php?hal=form_produk" type="button" class="btn btn-primary"> Add Data </a>
	<br><br>
	<h3>Data Produk</h3>
	<br>
	<table class="table table-striped">
		<thead>
			<tr class="table-success">
				<?php
				foreach($ar_judul as $jdl) {
				?>
					<th><?= $jdl ?></th>
				<?php } ?>  
			</tr>
		</thead>
		<tbody>
			<?php
			$model = new Produk();
			$rs = $model->dataProduk();
			$no = 1;
			foreach ($rs as $produk) {
			?>
				<tr>
					<td> <?= $no?></td>
					<td> <?= $produk['nama_produk']?> </td>
					<td>Rp. <?= number_format($produk['harga'], 0, ',', '.')?> </td>
					<td> <?= $produk['jumlah']?> </td>
					<td> <?= $produk['keterangan']?> </td>
					<td>
						<a href="index.php?hal=form_produk&idedit=<?= $produk['id'] ?>" type="button" class="btn btn-warning"> Edit </a>
					</td>
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
