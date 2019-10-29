<img src="<?php echo base_url()?>assets/img/background.jpg" alt="gambar" class="bg" />
<div class="jumbotron">
	<div class="row">
		<div class="col-md-6">
			<?php if ($products == true) { foreach (array_slice($products,0,1) as $data) {?>
				<b><?php echo $data->tujuan ?></b>
				<p><?php echo $data->tanggal_brngkt ?> | <?php echo $jumlahkursi ?> Penumpang</p>
			<?php }}elseif ($products1 == true) { foreach (array_slice($products1,0,1) as $data) {?>
				<p><?php echo $data->tanggal_brngkt ?> | <?php echo $jumlahkursi ?> Penumpang</p>
			<?php }} ?> 
		</div>
		<div class="col-md-6">
			<a href="<?php echo site_url('User') ?>" class="btn btn-primary float-right">Kembali</a>
		</div>
	</div>
	<?php if ($products == true) { foreach ($products as $data) { if ($transportasi_id['id_transportasi'] ==  1) {?>
	<div class="row">
		<div class="col-md-2">
			<br>Rute <br> <?php echo $data->tujuan ?>
		</div>
		<div class="col-md-1">
			<br>Tersedia <br> <?php echo $transportasi_id['jumlah_kursi'] ?> kursi
		</div>
		<div class="col-md-1">
			<br>Kode <br> <?php echo $transportasi_id['kode'] ?>
		</div>
		<div class="col-md-2">
			<br>Jam Berangkat <br> <?php echo $data->jam_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Tanggal Berangkat <br> <?php echo $data->tanggal_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Harga <br> <?php echo $data->harga ?>
		</div>
		<?php if ($jumlahkursi <= $transportasi_id['jumlah_kursi']) { ?>
		<div class="col-md-2">
			<br><a href="<?php echo site_url('Pemesanan/index/').$data->id_rute."/".$transportasi_id['id_transportasi']."/".$jumlahkursi ?>" class="btn btn-primary float-right">Pesan Bus</a>
		</div>
		<?php } ?>
	</div>
	<?php }elseif ($transportasi_id['id_transportasi'] ==  2) { ?>
		<div class="row">
		<div class="col-md-2">
			<br>Rute <br> <?php echo $data->tujuan ?>
		</div>
		<div class="col-md-1">
			<br>Tersedia <br> <?php echo $transportasi_id['jumlah_kursi'] ?> kursi
		</div>
		<div class="col-md-1">
			<br>Kode <br> <?php echo $transportasi_id['kode'] ?>
		</div>
		<div class="col-md-2">
			<br>Jam Berangkat <br> <?php echo $data->jam_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Tanggal Berangkat <br> <?php echo $data->tanggal_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Harga <br> <?php echo $data->harga ?>
		</div>
		<?php if ($jumlahkursi <= $transportasi_id['jumlah_kursi']) { ?>
		<div class="col-md-2">
			<br><a href="<?php echo site_url('Pemesanan/index/').$data->id_rute."/".$transportasi_id['id_transportasi']."/".$jumlahkursi ?>" class="btn btn-primary float-right">Pesan Kereta Api</a>
		</div>
		<?php } ?>
	</div>











	<?php }}}elseif ($products1 == true) { foreach ($products1 as $data) { if ($transportasi_id['id_transportasi'] ==  1) {?>
		<div class="row">
		<div class="col-md-2">
			<br>Rute <br> <?php echo $data->tujuan ?>
		</div>
		<div class="col-md-1">
			<br>Tersedia <br> <?php echo $transportasi_id['jumlah_kursi'] ?> kursi
		</div>
		<div class="col-md-1">
			<br>Kode <br> <?php echo $transportasi_id['kode'] ?>
		</div>
		<div class="col-md-2">
			<br>Jam Berangkat <br> <?php echo $data->jam_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Tanggal Berangkat <br> <?php echo $data->tanggal_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Harga <br> <?php echo $data->harga ?>
		</div>
		<?php if ($jumlahkursi <= $transportasi_id['jumlah_kursi']) { ?>
		<div class="col-md-2">
			<br><a href="<?php echo site_url('Pemesanan/index/').$data->id_rute."/".$transportasi_id['id_transportasi']."/".$jumlahkursi ?>" class="btn btn-primary float-right">Pesan Bus</a>
		</div>
		<?php } ?>
	</div>
	<?php }elseif ($transportasi_id['id_transportasi'] ==  2) { ?>
		<div class="row">
		<div class="col-md-2">
			<br>Rute <br> <?php echo $data->tujuan ?>
		</div>
		<div class="col-md-1">
			<br>Tersedia <br> <?php echo $transportasi_id['jumlah_kursi'] ?> kursi
		</div>
		<div class="col-md-1">
			<br>Kode <br> <?php echo $transportasi_id['kode'] ?>
		</div>
		<div class="col-md-2">
			<br>Jam Berangkat <br> <?php echo $data->jam_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Tanggal Berangkat <br> <?php echo $data->tanggal_brngkt ?>
		</div>
		<div class="col-md-2">
			<br>Harga <br> <?php echo $data->harga ?>
		</div>
		<?php if ($jumlahkursi <= $transportasi_id['jumlah_kursi']) { ?>
		<div class="col-md-2">
			<br><a href="<?php echo site_url('Pemesanan/index/').$data->id_rute."/".$transportasi_id['id_transportasi']."/".$jumlahkursi ?>" class="btn btn-primary float-right">Pesan Kereta Api</a>
		</div>
		<?php } ?>
	</div>
	<?php }}} ?>
</div>
