<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Jumlah Kursi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<!-- Default unchecked -->
		<?php for ($b=1; $b <= $transportasi_id['jumlah_kursi'] ; $b++) { ?>
		<!-- Default inline 1-->
			<div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" name="jumlah_kursi" id="<?php echo $b ?>" value="<?php echo $b ?>">
			<label class="custom-control-label" for="<?php echo $b ?>"> <?php echo $b ?> </label>
			</div>

			<!-- Default inline 2-->
			<!-- <div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" id="defaultInline2">
			<label class="custom-control-label" for="defaultInline2"><?php echo $b ?></label>
			</div> -->

			<!-- Default inline 3-->
			<!-- <div class="custom-control custom-checkbox custom-control-inline">
			<input type="checkbox" class="custom-control-input" id="defaultInline3">
			<label class="custom-control-label" for="defaultInline3"><?php echo $b ?></label>
			</div> -->
			<script>
				$(document).ready(function(){
				$("input[name='jumlah_kursi']").change(function() {
					var maxpil = <?php echo $jumlahkursi ?>;
					var jml = $("input[name='jumlah_kursi']:checked").length;
					if(jml > maxpil){
						$(this).prop("checked","");
					alert('Anda dapat memilih maksimal '+ maxpil);
				}
				});
			});
			</script>
		<?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="pilihkursi">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
	
		$(document).ready(function(){
			$("#pilihkursi").click(function() { 
				if($('.option').is(':checked'))
				{
					alert($('#kursi').val());
				}
			});
			$('.modal').modal('hide');
		});
	
</script>



