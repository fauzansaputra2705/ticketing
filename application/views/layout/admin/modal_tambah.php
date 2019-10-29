<?php if ($page == "Penumpang") { ?>
<?php echo form_open('Admin/tambah_penumpang'); ?>

<div class="modal fade" id="tambahpenumpang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Penumpang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<label for="nama_penumpang">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_penumpang" value=""
					placeholder="Enter a Nama Lengkap">
				<p class="help-block">Wajib Di isi</p>

				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
				<p class="help-block">At least 4 characters, letters or numbers only</p>

				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
				<p class="help-block">A valid email address</p>

				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"
					placeholder="Enter a password">
				<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
				</div>
				<p class="help-block">At least 6 characters</p>

				<label for="password_confirm">Confirm password</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm"
					placeholder="Confirm your password">
				<p class="help-block">Must match your password</p>

				<label>Jenis Kelamin</label>
				<br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
						value="Laki - Laki">
					<label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
						value="Perempuan">
					<label class="form-check-label" for="inlineRadio2">Perempuan</label>
				</div>
				<br>
				<br>
				<label>Telepone</label>
				<input type="number" class="form-control" name="telephone" value="">
				<p class="help-block">Wajib Di isi</p>

				<label for="role_id">Role ID</label>
				<select name="role_id" class="form-control">
					<option value="1">1 (Admin)</option>
					<option value="2">2 (User)</option>
					<option value="3">3 (Petugas)</option>
				</select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"
					onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>







<?php }elseif($page == "Petugas"){ ?>

<?php echo form_open('Admin/tambah_petugas'); ?>

<div class="modal fade" id="tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
				<p class="help-block">A valid email address</p>
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"
					placeholder="Enter a password">
				<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
				</div>
				<p class="help-block">At least 6 characters</p>
				<label for="password_confirm">Confirm password</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm"
					placeholder="Confirm your password">
				<p class="help-block">Must match your password</p>
				<label for="nama_petugas">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_petugas" value="" placeholder="Enter a Nama Lengkap">
				<p class="help-block">Wajib Di isi</p>
					
				<label for="id_level">ID Level</label>
				<select name="id_level" id="" class="form-control">
				<?php foreach ($level->result() as $data) { ?>
					<option value="<?php echo $data->id_level ?>"><?php echo $data->id_level ?> - <?php echo $data->nama_level ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"
					onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>











<?php }elseif ($page == "Transportasi") { ?>

<?php echo form_open('Admin/tambah_transportasi'); ?>

<div class="modal fade" id="tambahtransportasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Transportasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<label for="kode">Kode</label>
				<input type="number" class="form-control" id="kode" name="kode" placeholder="Enter your Kode">

				<label for="jumlah_kursi">Jumlah Kursi</label>
				<input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" placeholder="Enter your jumlah kursi">

				<label for="keterangan">Keterangan</label>
				<textarea name="keterangan" id="" class="form-control" cols="30" rows="10"></textarea>

				<label for="id_type_transportasi">ID Level</label>
				<select name="id_type_transportasi" id="" class="form-control">
				<?php foreach ($type_transportasi->result() as $data) { ?>
					<option value="<?php echo $data->id_type_transportasi ?>"><?php echo $data->id_type_transportasi ?> - <?php echo $data->nama_type ?></option>
				<?php } ?>
				</select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"
					onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>










<?php }elseif ($page == "Rute") { ?>

	<?php echo form_open('Admin/tambah_rute'); ?>

<div class="modal fade" id="tambahrute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Transportasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<label for="tujuan">Tujuan</label>
				<input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Enter your tujuan">

				<label for="rute_awal">Rute Awal</label>
				<input type="text" class="form-control" id="rute_awal" name="rute_awal" placeholder="Enter your Rute Awal">

				<label for="rute_akhir">Rute Akhir</label>
				<input type="text" class="form-control" id="rute_akhir" name="rute_akhir" placeholder="Enter your Rute Akhir">
				
				<label for="harga">Harga</label>
				<input type="number" class="form-control" id="harga" name="harga" placeholder="Enter your Harga">

				<label for="tanggal_brngkt">Tanggal Berangkat</label>
				<input type="date" class="form-control" id="tanggal_brngkt" name="tanggal_brngkt" placeholder="Enter your Tanggal Berangkat">

				<label for="jam_brngkt">Jam Berangkat</label>
				<input type="time" class="form-control" id="jam_brngkt" name="jam_brngkt" placeholder="Enter your Jam Berangkat">
				
				<label for="id_transportasi">ID Transportasi</label>
				<select name="id_transportasi" id="" class="form-control">
				<?php foreach ($transportasi->result() as $data) { ?>
					<option value="<?php echo $data->id_transportasi ?>"><?php echo $data->id_transportasi ?></option>
				<?php } ?>
				</select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"
					onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

<?php } ?>
