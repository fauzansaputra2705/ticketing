<?php if ($page == "Penumpang") { ?>
<?php echo form_open('Admin/edit_penumpang'); ?>
<?php foreach ($penumpang->result() as $data) { ?>
<div class="modal fade" id="editpenumpang<?php echo $data->id_penumpang; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Penumpang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">

				<input type="hidden" name="id_penumpang" value="<?php echo $data->id_penumpang ?>">

				<label for="nama_penumpang">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_penumpang" value="<?php echo $data->nama_penumpang; ?>" placeholder="Enter a Nama Lengkap">
				<p class="help-block">Wajib Di isi</p>

				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username" value="<?php echo $data->username; ?>">
				<p class="help-block">At least 4 characters, letters or numbers only</p>
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo $data->email; ?>">
				<p class="help-block">A valid email address</p>

				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" value="<?php echo $data->password; ?>">
				<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
				</div>
				<p class="help-block">At least 6 characters</p>

				<label for="password_confirm">Confirm password</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm"
					placeholder="Confirm your password" value="<?php echo $data->password; ?>">
				<p class="help-block">Must match your password</p>

				<label>Jenis Kelamin</label>
				<br>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" <?php if($data->jenis_kelamin == "Laki - Laki"){?> checked="checked" <?php } ?>  name="jenis_kelamin" id="inlineRadio1" value="Laki - Laki">
					<label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" <?php if($data->jenis_kelamin == "Perempuan"){?> checked="checked" <?php } ?> name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
					<label class="form-check-label" for="inlineRadio2">Perempuan</label>
				</div>
				<br>
				<br>
				<label>Telepone</label>
				<input type="number" class="form-control" name="telephone" value="<?php echo $data->telephone ?>">
				<p class="help-block">Wajib Di isi</p>

				<label for="role_id">Role ID</label>
				<select name="role_id" class="form-control">
					<option value="<?php echo $data->role_id ?>"><?php echo $data->role_id ?></option>
					<option value="1">1 (Admin)</option>
					<option value="2">2 (User)</option>
					<option value="3">3 (Petugas)</option>
				</select>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php echo form_close(); ?>







<?php }elseif($page == "Petugas"){ ?>









<?php echo form_open('Admin/edit_petugas'); ?>
<?php foreach ($petugas->result() as $data) { ?>
<div class="modal fade" id="editpetugas<?php echo $data->id_petugas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<input type="hidden" value="<?php echo $data->id_petugas ?>" name="id_petugas">

				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php echo $data->email ?>" placeholder="Enter your email">
				<p class="help-block">A valid email address</p>

				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password"
					placeholder="Enter a password" value="<?php echo $data->password ?>">
				<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
				</div>
				<p class="help-block">At least 6 characters</p>

				<label for="password_confirm">Confirm password</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm"
					placeholder="Confirm your password" value="<?php echo $data->password ?>">
				<p class="help-block">Must match your password</p>

				<label for="nama_petugas">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_petugas" value="<?php echo $data->nama_petugas ?>" placeholder="Enter a Nama Lengkap" value="<?php echo $data->nama_petugas ?>">
				<p class="help-block">Wajib Di isi</p>
					
				<label for="id_level">ID Level</label>
				<select name="id_level" id="" class="form-control">
					<option value="<?php echo $data->id_level ?>"><?php echo $data->id_level ?></option>
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
<?php } ?>
<?php echo form_close(); ?>










<?php }elseif ($page == "Transportasi") { ?>


<?php echo form_open('Admin/edit_transportasi'); ?>
<?php foreach ($transportasi->result() as $data) { ?>
<div class="modal fade" id="edittransportasi<?php echo $data->id_transportasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Transportasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<input type="hidden" name="id_transportasi" value="<?php echo $data->id_transportasi ?>">
				<label for="kode">Kode</label>
				<input type="number" class="form-control" id="kode" name="kode" placeholder="Enter your Kode" value="<?php echo $data->kode ?>">

				<label for="jumlah_kursi">Jumlah Kursi</label>
				<input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" placeholder="Enter your jumlah kursi" value="<?php echo $data->jumlah_kursi ?>" >

				<label for="keterangan">Keterangan</label>
				<textarea name="keterangan" id="" class="form-control" cols="30" rows="10" value=""><?php echo $data->keterangan ?></textarea>

				<label for="id_type_transportasi">ID Level</label>
				<select name="id_type_transportasi" id="" class="form-control">
				<option value="<?php echo $data->id_type_transportasi ?>"><?php echo $data->id_type_transportasi ?></option>
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
<?php } ?>
<?php echo form_close(); ?>





<?php }elseif ($page == "Rute") { ?>

<?php echo form_open('Admin/edit_rute'); ?>

<?php foreach ($rute->result() as $data) { ?>
<div class="modal fade" id="editrute<?php echo $data->id_rute ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edit Transportasi</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">

			<input type="hidden" name="id_rute" value="<?php echo $data->id_rute ?>">

			<label for="tujuan">Tujuan</label>
			<input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Enter your tujuan" value="<?php echo $data->tujuan ?>">

			<label for="rute_awal">Rute Awal</label>
			<input type="text" class="form-control" id="rute_awal" name="rute_awal" placeholder="Enter your Rute Awal" value="<?php echo $data->rute_awal ?>">

			<label for="rute_akhir">Rute Akhir</label>
			<input type="text" class="form-control" id="rute_akhir" name="rute_akhir" placeholder="Enter your Rute Akhir" value="<?php echo $data->rute_akhir ?>">
			
			<label for="harga">Harga</label>
			<input type="number" class="form-control" id="harga" name="harga" placeholder="Enter your Harga" value="<?php echo $data->harga ?>">

			<label for="tanggal_brngkt">Tanggal Berangkat</label>
			<input type="date" class="form-control" id="tanggal_brngkt" name="tanggal_brngkt" placeholder="Enter your Tanggal Berangkat" value="<?php echo $data->tanggal_brngkt ?>">

			<label for="jam_brngkt">Jam Berangkat</label>
			<input type="time" class="form-control" id="jam_brngkt" name="jam_brngkt" placeholder="Enter your Jam Berangkat" value="<?php echo $data->jam_brngkt?>">
			
			<label for="id_transportasi">ID Transportasi</label>
			<select name="id_transportasi" id="" class="form-control">
				<option value="<?php echo $data->id_transportasi ?>"><?php echo $data->id_transportasi ?></option>
			<?php foreach ($transportasi->result() as $data) { ?>
				<option value="<?php echo $data->id_transportasi ?>"><?php echo $data->id_transportasi ?></option>
			<?php } ?>
			</select>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda ingin meyimpan ini?');">Simpan</button>
		</div>
	</div>
</div>
</div>
<?php } ?>

<?php echo form_close(); ?>

<?php } ?>
