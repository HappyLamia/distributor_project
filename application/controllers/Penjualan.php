<?php 
	error_reporting(1);
	/**
	* 
	*/
	class Penjualan extends CI_Controller
	{	
		public function add_cart()
		{
			// $x  = array('id_barang' => $this->input->post('kode_barang'));
			// $row = $this->Mod_Query->get_where('row','barang',$x);
			// // $val = $this->cek_dis_barang($this->input->post('id_barang'));
			// // $diskon = $row->harga_retail * $val;
			// $harga = $row->harga_retail;
			// $data = array(
			//         'id'      => $this->input->post('kode_barang'),
			//         'qty'     => $this->input->post('qty'),
			//         'price'   => $harga,
			//         'name'    => $row->nama_barang
			// );
			$data = array(
			        'id'      => $this->input->post('kode_barang'),
			        'qty'     => $this->input->post('qty'),
			        'price'   => $this->input->post('harga'),
			        'name'    => $this->input->post('nama'),
			        'options' => array('type'=>'Penjualan')
			);
			$this->cart->insert($data);
			redirect('admin-page/penjualan/add-order');
		}
		public function update_cart($value)
		{
			if ($value=="plus") {
				$qty = $this->input->post('nqty') + 1;
			} else {
				$qty = $this->input->post('nqty') - 1;
			}
			$data = array(
			        'rowid'  => $this->input->post('rowid'),
			        'qty'    => $qty
			);
			$this->cart->update($data);
			redirect('admin-page/penjualan/add-order');
		}
		public function remove_cart($value)
		{
			$this->cart->remove($value);
			redirect('admin-page/penjualan/order-barang');
		}
		public function off()
		{
			$userdata = array('no_order','no_customer','no_salesman','date_delivery');
			$this->session->unset_userdata($userdata);
			$this->cart->destroy();
			redirect('admin-page/penjualan/order-barang');
		}
		public function checkout()
		{
			$data = array('id_penjualan' => $this->session->userdata('no_order'),
						  'id_customer' => $this->session->userdata('no_customer'),
						  'id_sales' => $this->session->userdata('no_salesman'),
						  'tgl_kirim'=> $this->session->userdata('date_delivery')
						);
			$x = $this->Mod_Query->add('penjualan',$data);
			if ($x > 0) {
		    	foreach ($this->cart->contents() as $items){
		    		if ($items['options']['type']=='Penjualan') {
		    			$i=0;
                    	$data1 = array('id_penjualan' => $this->session->userdata('no_order'),
									   'id_barang' => $items['id'],
									   'jumlah_jual' => $items['qty'],
									   'harga' => $items['price']
									  );
                		$x1 = $this->Mod_Query->add('dt_penjualan',$data1);
                    }
                }
				$this->off();
			}
		}
		public function updatePenjualan()
		{
			if ($this->session->userdata('logged_in')) {
				$by = array('id_penjualan' => $this->input->post('id_penjualan'),
							'id_barang' => $this->input->post('id_barang')
						   );
				$data = array('jumlah_jual' => $this->input->post('qty'));
				$x = $this->Mod_Query->renew('dt_penjualan',$data,$by);
				if ($x > 0) {
					$this->set_log('Memperbaharui Data Belanja');
					$this->set_alert("<div class='alert alert-success alert-dismissable'>
									    	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
									    	<strong class='fa fa-check'> Data Telah Diubah</strong> 
									    </div>");
					redirect('main/index/penjualan/');
				}
				else{
					redirect('main/index/penjualan/');
				}
			}
		}
	}
?>