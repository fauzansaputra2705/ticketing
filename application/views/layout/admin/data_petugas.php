<div class="main-content">
	<div class="card p-3">
		
	<h3>Petugas</h3>
	<hr>
	<button type="button" href="<?php echo site_url('Admin/petugas') ?>" class="btn btn-primary" data-toggle="modal" data-target="#tambahpetugas" data-whatever="@mdo" style="width: 80px;">Tambah</button>
	<div class="form-group mt-3">
		<table id="table1" class="display">
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Password</th>
					<th>Nama Petugas</th>
					<th>ID Level</th>
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
                    	"url": '<?php echo base_url('index.php/Admin/json_petugas'); ?>',
                    	"type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                    {"data": "id_petugas",width:50},
                    {"data": "email",width:300},
                    {"data": "password",width:200},
                    {"data": "nama_petugas",width:250},
                    {"data": "id_level",width:50},
                    {"data": "edit",width:30},
                    {"data": "hapus",width:50}
                    ],
                });
            });
        </script>
	</div>
