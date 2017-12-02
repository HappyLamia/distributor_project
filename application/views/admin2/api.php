<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>" type="text/javascript"></script>
<div class="content-top">	
	<div class="col-lg-12">
		<?php if ($this->session->userdata('level')=='Master'): ?>
			<div class="content-top-1">
				<p>
					<?php echo $alert ?>
				</p>
				<form method="POST" action="<?php echo base_url('admin-page/dokumentasi/save') ?>">
					<table class="table table-stripped">
						<tr>
							<td>Nama Dokumentasi</td>
							<td>
								<input class="form-control" type="text" name="nama_dokumentasi">
							</td>
						</tr>
						<tr>
							<td>Isi Dokumentasi</td>
							<td>
								<textarea class="form-control" name="isi" id="isi_api"></textarea>
								<input class="form-control" type="hidden" name="jenis" value="API">
							</td>
						</tr>
						<tr>
							<td>Link</td>
							<td>
								<input class="form-control" type="text" name="link">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button class="btn btn-primary">Simpan</button>
							</td>
						</tr>
					</table>
				</form>
				<div class="clearfix"> </div>
			</div>
		<?php endif ?>
	</div>
	<div class="clearfix"></div>
</div>
<div class="content-mid">
	<div class="col-md-12 ">
		<div class="content-top-1 table-responsive">
				<div class="col-sm-12">
					<hr>
					<table class="table table-stripped">
						<thead>	
							<tr>
								<th>Nama Dokumentasi</th><th>Url</th><th>Demo</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($api as $key) {
							?>
									<tr>
										<td><?php echo $key->nama_dokumentasi ?></td>
										<td><?php echo $key->isi ?></td>
										<td><a target="_blank" href="<?php echo base_url($key->link) ?>">Cek Disini</a></td>
									</tr>
							<?php 
								}
							?>
						</tbody>
					</table>		
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="content-footer">
	<div class="clearfix"></div>
</div>
<div class="clearfix">
	<br>
</div>
<script>
	CKEDITOR.replace('isi_api');
</script>