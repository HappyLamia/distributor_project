<?php 
	error_reporting(1);
	class Pembelian extends CI_Controller
	{	
		public function add_cart()
		{
			$data = array(
			        'id'      => $this->input->post('kode_barang'),
			        'qty'     => $this->input->post('qty'),
			        'price'   => 1000000,
			        'name'    => $this->input->post('nama_barang'),
			        'options' => array('satuan' => $this->input->post('satuan'),
			        				   'retail' => 11000,
			        				   'satuan2' => 'Pack',
			        				   'qty2' => 10,
			        				   'satuan3' => 'Strip',
			        				   'qty3' => 100,
			        				   'type'=>'Pembelian'
			        				  )
			);
			// $data = array(
			//         'id'      => 125,
			//         'qty'     => 2,
			//         'price'   => 19999,
			//         'name'    =>'HAHAHA'
			// );
			$this->cart->insert($data);
			redirect('admin-page/pembelian/penerimaan-barang');
		}
		public function save()
		{
			$main = array('kode_bpb' => $this->session->userdata('no_bpb'),
						  'tgl_bpb' => $this->session->userdata('tgl_bpb'),
						  'tgl_terima' => $this->session->userdata('tgl_terima'),
						  'kode_supplier' => $this->session->userdata('kode_supplier'),
						  'pemeriksa' => $this->session->userdata('pemeriksa'),
						  'penyetuju' => $this->session->userdata('penyetuju'),
						  'kode_gudang' => $this->session->userdata('gudang'),
						  'no_sj' => $this->session->userdata('no_sj'),
						  'no_po' => $this->session->userdata('no_po')
						 );
			$y = $this->Mod_Query->add('penerimaan_barang',$main);
			if ($y > 0) {
				foreach ($this->cart->contents() as $items){
					$i=0;
					$foo = $this->cart->product_options($items['rowid']);
						$i++;
						$data = array('kode_bpb' => $this->session->userdata('no_bpb'),
							   'kode_barang' => $items['id'],
							   'nama_barang' => $items['name'],
							   'qty' => $items['qty'],
							   'satuan' => $foo['satuan'],
							  );
						$data_harga = array('id_barang' => $items['id'],
							   'harga_beli' => $items['price'],
							   'harga_retail' => $foo['retail']
							  );
						$data_mid = array('id_barang' => $items['id'],
							   'nama_satuan' => $foo['satuan2'],
							   'dt_qty' => $foo['qty2']
							  );
						$data_low = array('id_barang' => $items['id'],
							   'nama_satuan' => $foo['satuan3'],
							   'dt_qty' => $foo['qty3']
							  );
						$x1 = $this->Mod_Query->add('penerimaan_barang_dt',$data);
						$x2 = $this->Mod_Query->add('harga',$data_harga);
						$x3 = $this->Mod_Query->add('satuan_barang_mid',$data_mid);
						$x3 = $this->Mod_Query->add('satuan_barang_low',$data_low);
				}
				set_alert('pembelian_alert',1);
				$this->Mod_Number->set_log(get_user(),'Input Penerimaan Barang','Pembelian',$this->session->userdata('no_bpb'));
				$this->off();
			}
			redirect('admin-page/pembelian/penerimaan-barang');
		}
		public function off()
		{
			$userdata = array('listed');
			$this->session->unset_userdata($userdata);
			$this->cart->destroy();
		}
	}
?>