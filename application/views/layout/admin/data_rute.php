<div class="main-content">
	<div class="card p-3">
		
	<h3>Rute</h3>
	<hr>
	<button type="button" href="<?php echo site_url('Admin/rute') ?>" class="btn btn-primary" data-toggle="modal" data-target="#tambahrute" data-whatever="@mdo" style="width: 80px;">Tambah</button>
	<div class="form-group mt-3">
		<table id="table1" class="display">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tujuan</th>
					<th>Rute Awal</th>
					<th>Rute Akhir</th>
					<th>Harga</th>
					<th>ID Transportasi</th>
					<th>Tanggal Berangkat</th>
					<th>Jam Berangkat</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
            var save_method; //for save method string
            var table;
            
            $(document).ready(function() {
                //datatables
                // $('#table1').parent().addClass('table-responsive');
                table = $('#table1').DataTable({
                	scrollY:        1000,
                	scrollX:        true,
                	scrollCollapse: true,
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // "searching": false,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                    	"url": '<?php echo base_url('index.php/Admin/json_rute'); ?>',
                    	"type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                    {"data": "id_rute",width:50},
                    {"data": "tujuan",width:200},
                    {"data": "rute_awal",width:200},
                    {"data": "rute_akhir",width:200},
                    {"data": "harga",width:100},
                    {"data": "id_transportasi",width:100},
                    {"data": "tanggal_brngkt",width:100},
                    {"data": "jam_brngkt",width:100},
                    {"data": "edit",width:30},
                    {"data": "hapus",width:50}
                    ],
                });
            });
        </script>
	</div>
