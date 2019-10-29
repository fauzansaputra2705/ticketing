<div class="main-content">
<?php if (validation_errors()) : ?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if (isset($error)) : ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<?= $error ?>
		</div>
	</div>
</div>
<?php endif; ?>
	<div class="card p-3">
		
	<h3>User</h3>
	<hr>
	<button type="button" href="<?php echo site_url('Admin/penumpang') ?>" class="btn btn-primary" data-toggle="modal" data-target="#tambahpenumpang" data-whatever="@mdo" style="width: 80px;">Tambah</button>

	<div class="form-group mt-3">
		<table id="table1" class="display">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Nama Penumpang</th>
					<th>Jenis Kelamin</th>
					<th>Telephone</th>
					<th>Role ID</th>
					<th>Create At</th>
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
                    "searching": false,
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                    	"url": '<?php echo base_url('index.php/Admin/json_penumpang'); ?>',
                    	"type": "POST"
                    },
                    //Set column definition initialisation properties.
                    "columns": [
                    {"data": "id_penumpang",width:50},
                    {"data": "username",width:300},
                    {"data": "email",width:300},
                    {"data": "password",width:200},
                    {"data": "nama_penumpang",width:400},
                    {"data": "jenis_kelamin",width:100},
                    {"data": "telephone",width:150},
                    {"data": "role_id",width:50},
                    {"data": "created_at",width:150},
                    {"data": "edit",width:30},
                    {"data": "hapus",width:50}
                    ],
                });
            });
        </script>
	</div>
