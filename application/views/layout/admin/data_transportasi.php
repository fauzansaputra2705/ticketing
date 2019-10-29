<div class="main-content">
	<section class="section">
		<div class="row">
	<div class="card p-3">	
	<h3>Transportasi</h3>
	<hr>
	<button type="button" href="<?php echo site_url('Admin/transportasi') ?>" class="btn btn-primary" data-toggle="modal" data-target="#tambahtransportasi" data-whatever="@mdo" style="width: 80px;">Tambah</button>
	<div class="form-group mt-3">
		<table id="table1" class="display">
			<thead>
				<tr>
					<th>ID</th>
					<th>Kode</th>
					<th>Jumlah Kursi</th>
					<th>Keterangan</th>
					<th>ID Type Transportasi</th>
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
                    	"url": '<?php echo base_url('index.php/Admin/json_transportasi'); ?>',
                    	"type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                    {"data": "id_transportasi",width:50},
                    {"data": "kode",width:100},
                    {"data": "jumlah_kursi",width:100},
                    {"data": "keterangan",width:300},
                    {"data": "id_type_transportasi",width:100},
                    {"data": "edit",width:30},
                    {"data": "hapus",width:50}
                    ],
                });
            });
		</script>
		
		</section>
	</div>
