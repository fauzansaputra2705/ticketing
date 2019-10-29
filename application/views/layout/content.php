
			<!-- Main Content -->
			<div class="main-content">
			<?php if ($page == "Index") { ?>
				<?php $this->load->view('layout/index'); ?>
			<?php }elseif ($page == "Search") { ?>
				<?php $this->load->view('layout/search'); ?>
			<?php }elseif ($page == "Tampil Pesan") { ?>
				<?php $this->load->view('layout/pemesanan/pesan1'); ?>
			<?php }elseif ($page == "Pemesanan") { ?>
				<?php $this->load->view('layout/pemesanan/pesan2'); ?>
			<?php } ?>
			</div>
