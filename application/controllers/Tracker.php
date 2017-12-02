<?php 
	error_reporting(1);
	class Tracker extends CI_Controller
	{
		function add(){
			if ($this->session->userdata('logged_in')) {
				$kode_salesman = $this->input->post('kode_sales');
				$data = array('kode_salesman' => $kode_salesman,
							  'kode_customer' => $this->input->post('kode_customer')
							);
				$x = $this->Mod_Query->add('track',$data);
				if ($x > 0) {
					set_alert('tracker_alert',1);
					$this->Mod_Number->set_log(get_user(),'Tambah Track','Track',$data['kode_salesman']);
					$url = 'admin-page/master/salesman/add-tracker/'.$kode_salesman;
					redirect($url);
				}
				else{
					redirect($url);
				}
			}
		}
		function delete($value,$from){
			if ($this->session->userdata('logged_in')) {
				$data = array('kode_track' => $value);
				$x = $this->Mod_Query->clear_by('track',$data);
				if ($x > 0) {
					set_alert('tracker_alert',3);
					$this->Mod_Number->set_log(get_user(),'Hapus Track','Track',$from);
					$url = 'admin-page/master/salesman/add-tracker/'.$from;
					redirect($url);
				}
				else{
					$url = 'admin-page/master/salesman/add-tracker/'.$from;
					redirect($url);
				}
			}
		}
		function ubah_salesman(){
			if ($this->session->userdata('logged_in')) {
				$by = array('id_salesman' => $this->input->post('kode_salesman'));
				$data = array('nama' => $this->input->post('nama_salesman'),
							  'tgl_lhr' => $this->input->post('tgl_lahir'),
							  'alamat' => $this->input->post('alamat'),
							  'asal_daerah' => $this->input->post('asal_daerah')
							);
				$x = $this->Mod_Query->renew('salesman',$data,$by);
				if ($x > 0) {
					$this->set_log('Mengatur Diskon');
					$this->set_alert("<div class='alert alert-success alert-dismissable'>
										    	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										    	<strong class='fa fa-check'> Data Telah Diperbaharui </strong> 
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