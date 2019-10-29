<img src="<?php echo base_url()?>assets/img/background.jpg" alt="gambar" class="bg" />
<div class="jumbotron overflow-auto" style="height: 550px;">
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col" colspan="3" class="bg-primary text-white">Info Perjalanan</th>
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
	<tr>
      <th>Penumpang</th>
      <td>:</td>
      <td><?php echo $jumlahkursi . " Jumlah Penumpang";?></td>
    </tr>
  </tbody>
</table>







<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" class="bg-primary text-white" colspan="3">Penumpang</th>
	</tr>
	<tr>
      <th>No.</th>
      <th>Nama Penumpang</th>
      <th>No. Kursi</th>
    </tr>
  </thead>
  <tbody></tbody>
	  <?php for ($a = 1; $a <= $jumlahkursi ; $a++) { ?>
		<tr>
			<th scope="row"><?= $a ?></th>
			<td>
				<input type="text" name="" id="kursi" class="form-control">
			</td>
			<td>
				<input type="text" name="" id="jumlah_kursi" class="form-control" data-toggle="modal" data-target="#exampleModalCenter" readonly>
			</td>
		</tr>
	  <?php } ?>
    
  </tbody>
</table>






<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col" colspan="3" class="bg-primary text-white">Data Pemesan</th>
    </tr>
  </thead>
  <tbody>
		<?php foreach ($penumpang->result() as $data){ if ($this->session->userdata('username') == $data->username) {?>
		
    <tr>
      <th>Nama</th>
      <td>:</td>
			<td><?php echo $data->nama_penumpang;?></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>:</td>
      <td><?php echo $data->jenis_kelamin; ?></td>
    </tr>
    <tr>
      <th>Telephone</th>
      <td>:</td>
      <td><?php echo $data->telephone;?></td>
	</tr>
	<tr>
      <th>Email</th>
      <td>:</td>
			<td><?php echo $data->email; ?></td>
	</tr>
	<?php }} ?>
  </tbody>
</table>
</div>
<script>
	$(document).ready(function(){
		$('#exampleModalCenter').modal('show');
	});
</script>
