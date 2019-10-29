<img src="<?php echo base_url()?>assets/img/background.jpg" alt="gambar" class="bg" />
				<div class="jumbotron">
					<div class="row">
						<div class="col-3">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
									aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-bus mr-3"></i>Bis</a>
								<!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
									aria-controls="v-pills-messages" aria-selected="false"><i
										class="fas fa-fighter-jet mr-3"></i>Pesawat</a> -->
								<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
									aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-subway mr-3"></i>Kereta Api</a>
							</div>
						</div>










						<div class="col-9">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<?php echo form_open("User/search/1") ?>
								<div class="row mt-4">
										<div class="col-md-6">
										<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 1) { ?>
											<input type="hidden" name="id_transportasi" id="" value="<?php echo $data->id_transportasi?>">
										<?php }} ?>
											<h6>From</h6>
											<select name="rute_awal" id="" class="form-control">
												<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 1){ ?>
												<option value="<?php echo $data->rute_awal?>" ><?php echo $data->rute_awal?></option>
											<?php }} ?>											
											</select>
										</div>
										<div class="col-md-6">
											<h6>To</h6>
											<select name="rute_akhir" id="" class="form-control">
											<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 1) { ?>
												<option value="<?php echo $data->rute_akhir?>" ><?php echo $data->rute_akhir?></option>
											<?php }} ?>
											</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-4">
											<h6>Departure Date</h6>
											<input type="date" class="form-control" name="tanggal_brngkt">
										</div>
										<div class="col-md-3">
										</div>
										<!-- <?php echo form_open("Pemesanan/index/$data->id_rute/1") ?> -->
										<div class="col-md-3">
											<h6>No. of Seats</h6>
											<select id="" name="jumlah_kursi" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
										<!-- <?php echo form_close() ?> -->
									</div>
									<button type="submit" class="btn btn-outline-primary float-right ">Search Bus</button>
									<?php echo form_close() ?>	
								</div>










								<!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<div class="row mt-4">
										<div class="col-md-3">
										<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 1) { ?>
											<input type="hidden" name="id_transportasi" id="" value="<?php echo $data->id_transportasi?>">
										<?php }} ?>
											<h6>From</h6>
											<select name="" id="" class="form-control">
											<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 3) { ?>
												<option value="<?php echo $data->rute_awal?>"><?php echo $data->rute_awal?></option>
											<?php }} ?>											
											</select>
										</div>
										<div class="col-md-3">
											<h6>To</h6>
											<select name="" id="" class="form-control">
											<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 3) { ?>
												<option value="<?php echo $data->rute_akhir?>"><?php echo $data->rute_akhir?></option>
											<?php }} ?>
											</select>
										</div>
										<div class="col-md-3">
											<h6>Passenggers</h6>
											<input type="text" class="form-control" style="width: 300px;">
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-3">
											<h6>Date</h6>
											<input type="date" class="form-control">
										</div>
										<div class="col-md-3">
										</div>
										<div class="col-md-3">
											<h6>Passenggers</h6>
											<select id="" class="form-control">
												<option value="Economy">Economy</option>
												<option value="Business">Business</option>
												<option value="First Class">First Class</option>
												<option value="Premium Economy">Premium Economy</option>
											</select>
										</div>
									</div>
									<button type="button" class="btn btn-outline-primary float-right">Search Flights</button>
								</div> -->










								<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								<?php echo form_open("User/search/2") ?>
									<div class="row mt-4">
										<div class="col-md-6">
										<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 2) { ?>
											<input type="hidden" name="id_transportasi" id="" value="<?php echo $data->id_transportasi?>">
										<?php }} ?>
											<h6>From</h6>
											<select name="rute_awal" id="" class="form-control">
											<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 2) { ?>
												<option value="<?php echo $data->rute_awal?>"><?php echo $data->rute_awal?></option>
											<?php }} ?>											
											</select>
										</div>
										<div class="col-md-6">
											<h6>To</h6>
											<select name="rute_akhir" id="" class="form-control">
											<option value="...">...</option>
											<?php foreach ($rute->result() as $data) { if ($data->id_transportasi == 2) { ?>
												<option value="<?php echo $data->rute_akhir?>"><?php echo $data->rute_akhir?></option>
											<?php }} ?>
											</select>
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-md-4">
											<h6>Departure Date</h6>
											<input type="date" class="form-control" name="tanggal_brngkt">
										</div>
										<div class="col-md-3">
										</div>
										<div class="col-md-3">
											<h6>No. of Seats</h6>
											<select id="" name="jumlah_kursi" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<button type="submit" class="btn btn-outline-primary float-right">Search Train</button>
									<?php echo form_close() ?>
								</div>
							</div>
						</div>
					</div>
