<div class="col-lg-12">
	<div class="content-top-1">
		<div class="but_list">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Stock Gudang</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Kartu Stock</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="table-responsive">
							<div class="panel panel-primary">
								<div class="panel-heading"><i class="fa fa-building-o"></i> Stock Gudang </div>
								<div class="panel-body">
									<table id="myTable" class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Cabang</th>
												<th>Gudang</th>
												<th>Barang</th>
												<th>Kode Barang</th>
												<th>Nama Barang</th>
												<th>Jenis Barang</th>
												<th>Minimum Stock</th>
												<th>Stock Gudang</th>
												<th>Satuan Barang</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												foreach ($barang as $key) {
											?>
													<tr>
														<td><?php echo $key->kode_barang ?></td>
														<td><?php echo $key->nama_barang ?></td>
														<td><?php echo $key->nama_gudang ?></td>
														<td><?php echo "Rp. ".$this->cart->format_number($key->harga_retail) ?></td>
														<td><?php 
																if ($key->sn=="Null") {
																	echo "---";
																} 
																else{
																	echo $key->sn;
																}
															?>
														</td>
														<td><?php echo $key->stok_awal ?></td>
													</tr>
											<?php 
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>				
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<div class="panel panel-primary">
								<div class="panel-heading"><i class="fa fa-building-o"></i> Kartu Stock </div>
								<div class="panel-body">
									<table id="myTable" class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>No Bukti</th>
												<th>Keterangan</th>
												<th>Masuk</th>
												<th>Keluar</th>
												<th>Sisa</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												foreach ($barang as $key) {
											?>
													<tr>
														<td><?php echo $key->kode_barang ?></td>
														<td><?php echo $key->nama_barang ?></td>
														<td><?php echo $key->nama_gudang ?></td>
														<td><?php echo "Rp. ".$this->cart->format_number($key->harga_retail) ?></td>
														<td><?php 
																if ($key->sn=="Null") {
																	echo "---";
																} 
																else{
																	echo $key->sn;
																}
															?>
														</td>
														<td><?php echo $key->stok_awal ?></td>
													</tr>
											<?php 
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="clearfix"> </div>
	</div>
</div>