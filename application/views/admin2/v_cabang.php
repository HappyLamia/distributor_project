<div class="content-top">	
	<div class="col-lg-4">
		<div class="content-top-1">
			<div class="panel panel-primary">
				<div class="panel-heading"><i class="fa fa-building-o"></i> Form Cabang </div>
				<div class="panel-body">
					<?php echo $alert ?>
					<form method="POST" role="form" action="<?php echo base_url('admin-page/cabang/add') ?>">
						<div class="form-group">
							<label class="text-primary"> Kode Cabang</label>
							<input readonly="" type="text" name="kode_cabang" class="form-control" value="<?php echo $kode ?>" />
						</div>

						<div class="form-group">
							<label class="text-primary"> Nama Cabang</label>
							<input required="" type="text" name="nama_cabang" class="form-control" />
						</div>

						<div class="form-group">
							<label class="text-primary"> Alamat</label>
							<textarea name="alamat" required="" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label class="text-primary">  Kota </label>
							<select required="" class="form-control" name="kota">
								<option value="">-Pilih Kota-</option>
								<?php 
									foreach ($daerah as $key) {
								?>
										<option value="<?php echo $key->Nama ?>"><?php echo $key->Nama ?></option>
								<?php 
									}
								?>
							</select>
						</div>

						<div class="form-group">
							<label class="text-primary">  Telepon </label>
							<input required="" type="text" name="kontak" class="form-control" />
						</div>

						<div class="form-group">
							<label class="text-primary">  Email </label>
							<input required="" type="email" name="email" class="form-control" />
						</div>

						<div class="form-group">
							<label class="text-primary">  Fax </label>
							<input required="" type="text" name="fax" class="form-control" />
						</div>

						<div class="form-group">
							<button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Tambah Cabang</button>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-lg-8">
		<div class="content-top-1">
			<div class="table-responsive">
				<div class="panel panel-primary">
					<div class="panel-heading"><i class="fa fa-building-o"></i> Data Cabang </div>
					<div class="panel-body">
						<table id="myTable" class="table table-bordered">
							<thead>
								<tr>
									<th>No</th><th>Nama Cabang</th><th>Telepon</th><th>Fax</th><th>Email</th><th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$no = 0;
									foreach ($cabang as $key) {
										$no++;
								?>
										<tr>

											<td><?php echo $no ?></td>
											<td><?php echo $key->cabang_nama ?></td>
											<td><?php echo $key->cabang_telepon ?></td>
											<td><?php echo $key->cabang_fax ?></td>
											<td><?php echo $key->cabang_email ?></td>
											<td>
												<a data-toggle="modal"  href="#<?php echo $key->cabang_kode ?>"><i class="fa fa-edit"></i></a> | 
												<a onclick="return confirm('Apa Anda Ingin Menghapus Data Ini ?')" href="<?php echo base_url('admin-page/cabang/delete/').$key->cabang_kode ?>"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<div class="modal fade" id="<?php echo $key->cabang_kode ?>" role="dialog">
										    <div class="modal-dialog">
										        <div class="modal-content">
										            <div class="modal-header bg-primary">
										                <button type="button" class="close" data-dismiss="modal">&times;</button>
										                <h4>Edit Cabang</h4>
										            </div>
										            <div class="modal-body">
										            	<form method="POST" role="form" action="<?php echo base_url('admin-page/cabang/update') ?>">
															<div class="form-group">
																<label class="text-primary"> Kode Cabang</label>
																<input readonly="" type="text" name="kode_cabang" class="form-control" value="<?php echo $key->cabang_kode ?>" />
															</div>

															<div class="form-group">
																<label class="text-primary"> Nama Cabang</label>
																<input required="" type="text" name="nama_cabang" class="form-control" value="<?php echo $key->cabang_nama ?>" />
															</div>

															<div class="form-group">
																<label class="text-primary"> Alamat</label>
																<textarea name="alamat" required="" class="form-control"><?php echo $key->cabang_alamat ?></textarea>
															</div>

															<div class="form-group">
																<label class="text-primary">  Kota </label>
																<select required="" class="form-control" name="kota">
																	<option value="">-Pilih Kota-</option>
																	<?php 
																		foreach ($daerah as $key2) {
																	?>
																			<option value="<?php echo $key->Nama ?>"><?php echo $key2->Nama ?></option>
																	<?php 
																		}
																	?>
																</select>
															</div>

															<div class="form-group">
																<label class="text-primary">  Telepon </label>
																<input required="" type="text" name="kontak" class="form-control" value="<?php echo $key->cabang_telepon ?>" />
															</div>

															<div class="form-group">
																<label class="text-primary">  Email </label>
																<input required="" type="email" name="email" class="form-control" value="<?php echo $key->cabang_email ?>" />
															</div>	

															<div class="form-group">
																<label class="text-primary">  Fax </label>
																<input required="" type="text" name="fax" class="form-control" value="<?php echo $key->cabang_fax ?>" />
															</div>

															<div class="form-group">
																<button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Tambah Cabang</button>
															</div>
														</form>
										            </div>
										        </div>
										    </div>
										</div>
								<?php 
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	