<?php 
	error_reporting(1);
	class Dokumentasi extends CI_Controller
	{
		function save(){
			if ($this->session->userdata('logged_in')) {
				$data = array('nama_dokumentasi' => $this->input->post('nama_dokumentasi'),
							  'isi' => $this->input->post('isi'),
							  'link' => $this->input->post('link'),
							  'jenis' => $this->input->post('jenis')
							);
				$x = $this->Mod_Query->add('dokumentasi',$data);
				if ($x > 0) {
					set_alert('dokumentasi_alert',1);
					$this->Mod_Number->set_log(get_user(),'Tambah Dokumentasi','Dokumentasi',$data['jenis']);
					redirect('admin-page/dokumentasi/api');
				}
				else{
					redirect('admin-page/dokumentasi/api');
				}
			}
		}
		function delete($value){
			if ($this->session->userdata('logged_in')) {
				$by = array('cabang_kode' => $value);
				$data = array('status' => 'Tidak Aktif');
				$x = $this->Mod_Query->renew('m_cabang',$data,$by);
				if ($x > 0) {
					set_alert('cabang_alert',3);
					$this->Mod_Number->set_log(get_user(),'Hapus Cabang','Cabang',$by['cabang_kode']);
					redirect('admin-page/master/cabang');
				}
				else{
					redirect('admin-page/master/cabang');;
				}
			}
		}
		function renew(){
			if ($this->session->userdata('logged_in')) {
				$by = array('cabang_kode' => $this->input->post('kode_cabang'));
				$data = array('cabang_nama' => $this->input->post('nama_cabang'),
					    	  'cabang_alamat' => $this->input->post('alamat'),
					    	  'cabang_kota' => $this->input->post('kota'),
					    	  'cabang_telepon' => $this->input->post('kontak'),
					    	  'cabang_fax' => $this->input->post('fax'),
					    	  'cabang_email' => $this->input->post('email')
						);
				$x = $this->Mod_Query->renew('m_cabang',$data,$by);
				if ($x > 0) {
					set_alert('cabang_alert',2);
					$this->Mod_Number->set_log(get_user(),'Perbaharui Cabang','Cabang',$by['cabang_kode']);
					redirect('admin-page/master/cabang');
				}
				else{
					redirect('admin-page/master/cabang');
				}
			}
		}
	}
?>