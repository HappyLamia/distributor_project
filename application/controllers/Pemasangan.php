<?php 
	/**
	* 
	*/
	class Pemasangan extends CI_Controller
	{
		public function index($value='')
		{
			$this->load->view('install');
		}
		function proses()
		{
			$barang = get_views('barang');
			$this->pasang($barang,'Barang');
			// 
			$penjualan = get_views('penjualan');
			$this->pasang($penjualan,'Penjualan');
			// 
			$total_penjualan = get_views('total_penjualan');
			$this->pasang($total_penjualan,'Total Penjualan');
			// 
			$stok = get_views('stok');
			$this->pasang($stok,'Stok');
			// 
			$gudang = get_views('gudang');
			$this->pasang($gudang,'Gudang');
			// 
			$log = get_views('log');
			$this->pasang($log,'Log');
			// 
			$log_by = get_views('log_by');
			$this->pasang($log_by,'Log By');
			// 
			$tracker = get_views('tracker');
			$this->pasang($tracker,'Tracker');
			//
			$a = $this->Mod_Query->get_where('num_rows','list_view',array('status' => 0));
			if ($a > 0) {
				redirect('admin-page/instalasi');
			}
			else{
				$y = $this->Mod_Query->renew('config',array('status' => 1),array('name' => 'Installasi'));
				$msg = "<div class='alert alert-info alert-dismissable'>
						    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						    <strong>Warning!</strong> Sistem Sudah Terkonfigurasi, Silahkan Login
						  </div>";
				$this->session->set_flashdata('installation_msg',$msg);
				redirect('admin-page');
			}
		}
		public function pasang($query,$value='')
		{
			$this->Mod_Query->get_query('this',$query);
			$this->Mod_Query->renew('list_view',array('status' => 1),array('nama' => $value));
		}
	}
?>