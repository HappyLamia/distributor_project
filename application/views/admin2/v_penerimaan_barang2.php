<div class="content-top">
	<div class="col-lg-12">
		<div class="content-top-1">
			<?php 
				if ($this->session->userdata('listed')) {
			?>
					<form method="POST" class="form-horizontal" action="<?php echo base_url('admin-page/gudang/save-penerimaan') ?>">
						<div class="form-body">
				            <div class="form-group">
				                <label class="control-label col-md-4">Kode BPB (Auto)
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="kode_bpb" value="<?php echo $this->session->userdata('no_bpb') ?>" readonly /> </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Tanggal BPB
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <div class=" input-group">
				                            <input name="tgl_bpb" type="text" class="form-control" value="<?php echo $this->session->userdata('tgl_bpb') ?>" readonly="">
				                            <span class="input-group-addon" style="">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Tanggal BPB
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <div class=" input-group">
				                            <input name="tgl_terima" type="text" class="form-control" value="<?php echo $this->session->userdata('tgl_terima') ?>" readonly="">
				                            <span class="input-group-addon" style="">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Supplier
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="kode_supplier" value="<?php echo $this->session->userdata('kode_supplier') ?>" readonly="">
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nama Pemeriksa
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="pemeriksa" value="<?php echo $this->session->userdata('pemeriksa') ?>" readonly="">
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nama Penyetuju
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="penyetuju" value="<?php echo $this->session->userdata('penyetuju') ?>" readonly="">
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Gudang Masuk
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                         <input type="text" class="form-control" name="gudang" value="<?php echo $this->session->userdata('gudang') ?>" readonly="">
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nomor SJ
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="no_sj" value="<?php echo $this->session->userdata('no_sj') ?>" readonly="" /> 
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nomor PO
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-7">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="no_po" value="<?php echo $this->session->userdata('no_po') ?>" readonly="" /> 
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
					            <label class="control-label col-md-4">Catatan
					            </label>
					            <div class="col-md-8">
					                <div class="input-icon right">
					                    <i class="fa"></i>
					                    <textarea class="form-control" rows="3" name="catatan" readonly=""><?php echo $this->session->userdata('gudang') ?></textarea> </div>
					            </div>
					        </div>
				            <hr>
				            <div class="form-group" id="tblInsert">
				                <div class="col-md-12">
				                    <div id="divfilter" class="col-md-4">
				                        <div class="input-icon right">
				                            <i class="fa"></i>
				                            <select onchange="selectloaddata(this);">
				                              <option value="1"> All </option>
				                              <option value="2"> Delcom </option>
				                              <option value="2"> Barang Kurang </option>
				                            </select>
				                        </div>
				                        <br>
				                    </div>
				                    <a class="btn btn-primary" data-toggle="modal" data-target="#uraian" href="">Tambah Uraian</a>
				                </div>
				            </div>
				        </div>
					</form>	
			<?php 
				}
				else{
			?>
					<form method="POST" class="form-horizontal" action="<?php echo base_url('admin-page/gudang/set-list') ?>">
						<div class="form-body">
				            <div class="form-group">
				                <label class="control-label col-md-4">Kode BPB (Auto)
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="kode_bpb" value="<?php echo $kode ?>" readonly /> </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Tanggal BPB
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <div class=" input-group date datepicker datepickerid" data-date-format="yyyy/mm/dd">
				                            <input name="tgl_bpb" type="date" class="form-control" required>
				                            <span class="input-group-addon" style="">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Tanggal Terima BPB
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <div class="input-group date datepicker datepickerid"
				                         data-date-format="yyyy/mm/dd" data-date-start-date="+0d">
				                            <input type="date" class="form-control" name="tgl_terima" required>
				                            <span class="input-group-addon" style="">
				                                <span class="fa fa-calendar"></span>
				                            </span>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Supplier
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <select class="form-control" id="kode_supplier" name="kode_supplier">
				                        	<?php 
				                        		foreach ($supplier as $key) {
				                        	?>
				                        			<option value="<?php echo $key->id_supplier ?>"><?php echo $key->nama?></option>
				                        	<?php 
				                        		}
				                        	?>
				                        </select>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nama Pemeriksa
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <select class="form-control" id="pemeriksa" name="pemeriksa">
				                        	<?php 
				                        		foreach ($karyawan as $key) {
				                        			if ($key->type==2) {
				                        	?>
				                        				<option value="<?php echo $key->nip ?>"><?php echo $key->nama ?></option>
				                        	<?php 
				                        			}
				                        		}
				                        	?>
				                        </select>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nama Penyetuju
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <select class="form-control" id="penyetuju" name="penyetuju">
				                        	<?php 
				                        		foreach ($karyawan as $key) {
				                        			if ($key->type==3) {
				                        	?>
				                        				<option value="<?php echo $key->nip ?>"><?php echo $key->nama ?></option>
				                        	<?php 
				                        			}
				                        		}
				                        	?>
				                        </select>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Gudang Masuk
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                         <select class="form-control" id="kode_gudang" name="kode_gudang">
				                        	<?php 
				                        		foreach ($gudang as $key) {
				                        	?>
				                        			<option value="<?php echo $key->kode_gudang ?>"><?php echo $key->nama_gudang." - ".$key->cabang_nama ?></option>
				                        	<?php 
				                        		}
				                        	?>
				                        </select>
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nomor SJ
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-8">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="no_sj" required /> 
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="control-label col-md-4">Nomor PO
				                    <span class="required"> * </span>
				                </label>
				                <div class="col-md-7">
				                    <div class="input-icon right">
				                        <i class="fa"></i>
				                        <input type="text" class="form-control" name="no_po" required /> 
				                    </div>
				                </div>
				            </div>
				            <div class="form-group">
					            <label class="control-label col-md-4">Catatan
					            </label>
					            <div class="col-md-8">
					                <div class="input-icon right">
					                    <i class="fa"></i>
					                    <textarea class="form-control" rows="3" name="catatan"></textarea> </div>
					            </div>
					        </div>
				            <hr>
				            <div class="form-group">
				                <div class="col-md-12">
				            		<div class="form-actions">
							            <div class="row">
							                <div class="col-md-offset-4 col-md-8 text-right">
							                    <button type="submit" id="submit" class="btn btn-success">Set Data</button>
							                </div>
							            </div>
							        </div>
				                </div>
				            </div>
				        </div>
					</form>
			<?php 
				}
			?>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Satuan</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
				    	$no = 0;
				    	foreach ($this->cart->contents() as $items){
				    		$foo = $this->cart->product_options($items['rowid']);
				    		if ($foo['type']=="Pembelian") {
				    			$no++;
				    ?>
					            <tr>
					            	<td><?php echo $no; ?></td>
				            		<td><?php echo $items['id']; ?></td>
									<td><?php echo $items['name']; ?></td>
									<td><?php echo $items['price']; ?></td>
									<td><?php echo $items['qty']; ?></td>
										<?php 
											if ($this->cart->has_options($items['rowid']) == TRUE)
											{
                                        ?>
                                        			 <td><?php echo $foo['satuan']; ?></td>
                                        			
                                        <?php 
		                                    } 
		                                ?>

				                    <td class="text-center">
										<form class="form-inline" method="POST" action="<?php echo base_url('penjualan/update_cart/plus') ?>">
											<div class="form-group">
												<input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
												<input type="hidden" name="nqty" value="<?php echo $items['qty']; ?>">
											</div>
											<div class="form-group">
												<button class="btn btn-sm btn-default"><i class="fa fa-plus"></i></button>
											</div>
										</form>
										<form class="form-inline" method="POST" action="<?php echo base_url('penjualan/update_cart/minus') ?>">
											<div class="form-group">
												<input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
												<input type="hidden" name="nqty" value="<?php echo $items['qty']; ?>">
											</div>
											<div class="form-group">
												<button class="btn btn-sm btn-default"><i class="fa fa-minus"></i></button>
											</div>
										</form>
									</td>
									<td  class="text-center"><a class="btn btn-default" href="<?php echo base_url('admin-page/gudang/remove-list/'). $items['rowid']?>"><i class="fa fa-times"></i></a>
									</td>
					            </tr>
					            
				    <?php 
				    		}
				    	}
				    ?>
				</tbody>
			</table>
			<hr>
			<?php 
				if ($this->session->userdata('listed')) {
			?>
					<table class="table table-stripped">
						<tr>
							<td colspan="4"><a class="hidden btn btn-success btn-block" href="">Save</a></td>
							<td colspan="4"><a class="btn btn-success btn-block" href="<?php echo base_url('admin-page/pembelian/save-penerimaan') ?>">Save</a></td>
						</tr>
					</table>		
			<?php 
				}
				else{
					echo "";
				}
			?>
			<div class="modal fade" id="uraian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h2 class="modal-title">Form Barang</h2>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" action="<?php echo base_url('admin-page/pembelian/add-list') ?>" method="POST">
								<div class="form-body">
						            <div class="form-group">
						                <label class="control-label col-md-4">Kode Barang
						                    <span class="required"> * </span>
						                </label>
						                <div class="col-md-5">
						                    <div class="input-icon right">
						                        <i class="fa"></i>
						                        <input type="text" class="form-control" name="kode_barang" required="" /> </div>
						                </div>
						                <div class="col-md-3">
						                	<a class="btn btn-primary" href="#"><i class="fa fa-search"></i></a>
						                </div>
						            </div>
						        </div>
						        <div class="form-body">
						            <div class="form-group">
						                <label class="control-label col-md-4">Nama Barang
						                    <span class="required"> * </span>
						                </label>
						                <div class="col-md-8">
						                    <div class="input-icon right">
						                        <i class="fa"></i>
						                        <input type="text" class="form-control" name="nama_barang" required="" /> </div>
						                </div>
						            </div>
						        </div>
						        <div class="form-body">
						            <div class="form-group">
						                <label class="control-label col-md-4">Qty
						                    <span class="required"> * </span>
						                </label>
						                <div class="col-md-8">
						                    <div class="input-icon right">
						                        <i class="fa"></i>
						                        <input type="text" class="form-control" name="qty"  required="" /> </div>
						                </div>
						            </div>
						        </div>
						        <div class="form-body">
						            <div class="form-group">
						                <label class="control-label col-md-4">Satuan
						                    <span class="required"> * </span>
						                </label>
						                <div class="col-md-8">
						                    <div class="input-icon right">
						                        <i class="fa"></i>
						                        <select name="satuan" class="form-control" required="" >
						                        	<?php 
						                        		foreach ($satuan as $key) {
						                        			if ($key->level_satuan=='Level 1') {
						                        	?>
						                        				<option value="<?php echo $key->nama_satuan ?>"><?php echo $key->nama_satuan ?></option>
						                        	<?php 
						                        			}
						                        		}
						                        	?>
						                        </select>
						                </div>
						            </div>
						        </div>
						        <div class="form-body">
						            <div class="form-group">
						                <label class="control-label col-md-4">
						                    <span class="required"></span>
						                </label>
						                <div class="col-md-8">
						                    <button class="btn btn-primary btn-block">Add</button>
						                </div>
						            </div>
						        </div>
							</form>
	                    </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
</div>