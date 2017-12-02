<?php 
	error_reporting(1);
	class Api extends CI_Controller
	{
		public function get_api_user()
		{
			$username = 'admin'; //$this->input->post('username')
			$password = md5('admin'); //md5($this->input->post('password'))
			$data = array('username' => $username ,
						  'password' => $password
				         );
			$x = $this->Mod_Query->get_where('num_rows','user',$data);
			if ($x > 0) {
				$row = $this->Mod_Query->get_where('row','user',$data);
				$list = array();
				$data = array('logged_in' => TRUE,
							 'username' => $row->username,
							 'name' => $row->name,
							 'email' => $row->email,
							 'kontak' => $row->kontak,
							 'level' => $row->otoritas
							);
				array_push($list, $data);
				echo json_encode($list);
				//$this->set_log('Login');
				//redirect('admin-page/');
			}
			else{
				redirect('admin-page/');
			}
		}
		public function get_api_sales_user()
		{
			$list = array();
			//$data = array('status' => 'Aktif');
			$x= $this->Mod_Query->get_where('result','user',array('otoritas' => 'Salesman'));
			foreach ($x as $key) {
				$arr = array('username' => $key->username,
						 	  'password' => $key->password,
						 	  'nama' => $key->name,
							  'email' => $key->email,
							  'kontak' => $key->kontak
						);
				array_push($list, $arr);
			}
			echo json_encode($list);
		}
		public function get_api_salesman()
		{
				$list = array();
				//$data = array('status' => 'Aktif');
				$x= $this->Mod_Query->get('result','v_tracker');
				foreach ($x as $key) {
					$arr = array('kode_sales' => $key->kode_sales,
							 	  'nama_sales' => $key->nama_sales,
							 	  'tujuan' => $key->nama,
								  'alamat' => $key->alamat,
								  'nama' => $key->nama,
							);
					array_push($list, $arr);
				}
				echo json_encode($list);
		}
		public function get_api_customer()
		{
				$list = array();
				$x= $this->Mod_Query->get('result','v_tracker');
				foreach ($x as $key) {
					$arr = array('kode_sales' => $key->kode_sales,
							 	  'nama_sales' => $key->nama_sales,
							 	  'tujuan' => $key->nama,
								  'alamat' => $key->alamat,
								  'nama' => $key->nama,
							);
					array_push($list, $arr);
				}
				
				echo json_encode($list);
		}
		public function get_api_barang()
		{
				$list = array();
				$x= $this->Mod_Query->get('result','barang');
				foreach ($x as $key) {
					$arr = array('kode_barang' => $key->kode_barang,
							 	  'nama_barang' => $key->nama_barang,
							 	  'harga' => $key->harga_beli,
							 	  'harga_retail' => $key->harga_retail,
							 	  'box_stock' => $key->box_stok,
							 	  'stok' => $key->stok_awal,
							 	  'satuan1' => $key->satuan,
								  'satuan2' => $key->satuan2,
								  'satuan3' => $key->satuan3
							);
					array_push($list, $arr);
				}
				
				echo json_encode($list);
		}
	}
?>