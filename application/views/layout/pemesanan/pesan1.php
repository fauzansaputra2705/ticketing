<img src="<?php echo base_url()?>assets/img/background.jpg" alt="gambar" class="bg" />
<div class="jumbotron overflow-auto" style="height: 550px;">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col" colspan="3" class="bg-primary text-white">Info Reservasi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Kode</th>
      <td>:</td>
	  <td><?php echo $transportasi_id['kode'];
	   ?></td>
    </tr>
    <tr>
      <th>Jumlah Kursi</th>
      <td>:</td>
      <td><?php echo $transportasi_id['jumlah_kursi']  ?></td>
    </tr>
    <tr>
      <th>Kota Asal</th>
      <td>:</td>
      <td><?php echo $rute['rute_awal'];?></td>
	</tr>
	<tr>
      <th>Kota Tujuan</th>
      <td>:</td>
      <td><?php echo $rute['rute_akhir']; ?></td>
	</tr>
	<tr>
      <th>Berangkat</th>
      <td>:</td>
      <td><?php echo $rute['tanggal_brngkt']."(".$rute['jam_brngkt'].")"; ?></td>
    </tr>
  </tbody>
</table>




<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col" colspan="3" class="bg-primary text-white">Info Lain</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Harga Tiket</th>
      <td>:</td>
      <td><?php $hasil_rupiah = "Rp " . number_format($rute['harga'],2,',','.'); echo $hasil_rupiah;?></td>
    </tr>
    <tr>
      <th>Penumpang</th>
      <td>:</td>
      <td><?php echo $jumlahkursi . " Jumlah Penumpang";?>
	  </td>
    </tr>
    <tr>
      <th>Total Harga</th>
      <td>:</td>
      <td><?php $hasil_rupiah = "Rp " . number_format($rute['harga']*$jumlahkursi,2,',','.'); echo $hasil_rupiah; ?></td>
		</tr>
		<tr>
      <td colspan="3"><a href="<?php echo site_url('Pemesanan/pesan/').$rute['id_rute']."/".$transportasi_id['id_transportasi']."/".$jumlahkursi ?>" class="btn btn-primary float-right">Lanjutkan</a></td>
		</tr>
  </tbody>
</table>
</div>
