<div class="col-lg-4">
	<div class="content-top-1">
		<div class="panel panel-primary">
			<div class="panel-heading"><i class="fa fa-building-o"></i> Form Gudang </div>
			<div class="panel-body">
				<?php echo $alert ?>
				<form method="POST" role="form" action="<?php echo base_url('admin-page/gudang/add') ?>">
					<div class="form-group">
						<label class="text-primary"> Kode Gudang</label>
						<input readonly="" type="text" name="kode_gudang" class="form-control" value="<?php echo $kode ?>" />
					</div>

					<div class="form-group">
						<label class="text-primary"> Nama Gudang</label>
						<input required="" type="text" name="nama_gudang" class="form-control" />
					</div>

					<div class="form-group">
						<label class="text-primary">  Alamat </label>
						<textarea required="" class="form-control" name="alamat"></textarea>
					</div>

					<div class="form-group">
						<label class="text-primary">  Kontak </label>
						<input required="" type="text" name="kontak" class="form-control" />
					</div>

					<div class="form-group">
						<label class="text-primary">  Cabang </label>
						<select required="" class="form-control" name="cabang">
							<?php 
								foreach ($cabang as $key) {
							?>
									<option value="<?php echo $key->cabang_kode ?>"><?php echo $key->cabang_nama ?></option>
							<?php 
								}
							?>
						</select>
					</div>

					<div class="form-group">
						<button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Tambah Gudang</button>
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
				<div class="panel-heading"><i class="fa fa-building-o"></i> Data Gudang </div>
				<div class="panel-body">
					<table id="myTable" class="table table-bordered">
						<thead>
							<tr>
								<th>Kode Gudang</th><th>Nama Gudang</th><th>Telepon</th><th>Asosiasi Cabang</th><th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach ($gd as $key) {
									if ($key->status=='Aktif') {
							?>
									<tr>
										<td><?php echo $key->kode_gudang ?></td>
										<td><?php echo $key->nama_gudang ?></td>
										<td><?php echo $key->kontak ?></td>
										<td><?php echo $key->cabang_nama ?></td>
										<td>
											<a data-toggle="modal"  href="#<?php echo $key->kode_gudang ?>"><i class="fa fa-edit"></i></a> | 
											<a onclick="return confirm('Apa Anda Ingin Menghapus Data Ini ?')" href="<?php echo base_url('admin-page/gudang/delete/').$key->kode_gudang ?>"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<div class="modal fade" id="<?php echo $key->kode_gudang ?>" role="dialog">
									    <div class="modal-dialog">
									        <div class="modal-content">
									            <div class="modal-header bg-primary">
									                <button type="button" class="close" data-dismiss="modal">&times;</button>
									                <h4>Edit Cabang</h4>
									            </div>
									            <div class="modal-body">
									            	<form method="POST" role="form" action="<?php echo base_url('admin-page/gudang/update') ?>">
														<div class="form-group">
															<label class="text-primary"> Kode Gudang</label>
															<input readonly="" type="text" name="kode_gudang" class="form-control" value="<?php echo $key->kode_gudang ?>" />
														</div>

														<div class="form-group">
															<label class="text-primary"> Nama Gudang</label>
															<input required="" type="text" name="nama_gudang" class="form-control" value="<?php echo $key->nama_gudang ?>" />
														</div>	

														<div class="form-group">
															<label class="text-primary">  Alamat </label>
															<textarea required="" class="form-control" name="alamat"><?php echo $key->alamat ?></textarea>
														</div>

														<div class="form-group">
															<label class="text-primary">  Kontak </label>
															<input required="" type="text" name="kontak" class="form-control" value="<?php echo $key->kontak ?>"/>
														</div>

														<div class="form-group">
															<label class="text-primary">  Cabang </label>
															<select required="" class="form-control" name="cabang">
																<option value="<?php echo $key->cabang_id ?>"><?php echo $key->cabang_nama ?></option>
																<?php 
																	foreach ($cabang as $key2) {
																?>
																		<option value="<?php echo $key2->cabang_kode ?>"><?php echo $key2->cabang_nama ?></option>
																<?php 
																	}
																?>
															</select>
														</div>

														<div class="form-group">
															<button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Tambah Gudang</button>
														</div>
													</form>
									            </div>
									        </div>
									    </div>
									</div>
							<?php 
									}
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