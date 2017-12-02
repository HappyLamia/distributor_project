<div class="content-top">	
	<div class="col-md-4 ">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Tasks</h5>
				<label>8761</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-1" class="pie-title-center" data-percent="25"> <span class="pie-value"></span> </div>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Points</h5>
				<label>6295</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="content-top-1">
			<div class="col-md-6 top-content">
				<h5>Cards</h5>
				<label>3401</label>
			</div>
			<div class="col-md-6 top-content1">	   
				<div id="demo-pie-3" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
			</div>
			 <div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="content-mid">
	<div class="col-md-6 ">
		<div class="content-top-1 table-responsive">
			<div class="label label-primary">Grafik</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-6 ">
		<div class="content-top-1 table-responsive">
			<div class="row">
				<div class="col-sm-6">
					<form class="form-inline" action="<?php echo base_url('admin-page/log/host') ?>" method="POST">
						<div class="form-group">
							<select name="host" class="form-control">
								<?php 
									foreach ($log_by as $key) {
								?>
										<option value="<?php echo $key->target_host ?>"><?php echo $key->target_host; ?></option>
								<?php 
									}
								?>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-primary"><i class="fa fa-search"></i></button>
						</div>
					</form>		
				</div>
				<div class="col-sm-6">
					<p><h3>Log <b><?php echo $host; ?></b></h3></p>		
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<hr>
					<table class="table table-stripped">
						<thead>	
							<tr>
								<th>Username</th><th>Aksi</th><th>Target</th><th>Waktu</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($log as $key) {
							?>
									<tr>
										<td><?php echo $key->username ?></td>
										<td><?php echo $key->action ?></td>
										<td><a href=""><?php echo $key->target ?></a></td>
										<td><?php echo $key->date ?></td>
									</tr>
							<?php 
								}
							?>
						</tbody>
					</table>		
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="content-bottom">
	<div class="clearfix"></div>
</div>