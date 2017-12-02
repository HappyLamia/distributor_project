<?php 	
	error_reporting(1);
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Main extends CI_Controller
	{
		public function index()
		{
			echo "forbid";
		}
		function view($url='',$sub_url='',$param='',$param2='')
		{
			$template = 'admin2';
			if ($this->session->userdata('logged_in')) 
			{

				if ($url=="customer") {
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Customer' ,'link'=>'');
					$data['kode'] = $this->generate_kode('CS','customer');
					$data['alert'] = get_alert('customer_alert');
					$data['page'] = $template.'/v_customer';
				}
				elseif ($url=='karyawan') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Karyawan' ,'link'=>'');
					$data['alert'] = get_alert('supplier_alert');
					$data['page'] = $template.'/v_karyawan';
				}
				elseif ($url=='api') 
				{
					$data['section'] = array('name'=>'Dokumentasi' ,'link'=>'');
					$data['sub_section'] = array('name'=>'API' ,'link'=>'');
					$data['alert'] = get_alert('dokumentasi_alert');
					$data['api'] = $this->Mod_Query->get('result','dokumentasi');
					$data['page'] = $template.'/api';
				}
				elseif ($url=='supplier') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Supplier' ,'link'=>'');
					$data['alert'] = get_alert('supplier_alert');
					$data['page'] = $template.'/v_supplier';
				}
				elseif ($url=='satuan') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Satuan' ,'link'=>'');
					$data['alert'] = get_alert('satuan_alert');
					$data['page'] = $template.'/v_satuan';
				}
				elseif ($url=='cabang') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Cabang' ,'link'=>'');
					$data['kode'] = $this->generate_kode('T','m_cabang');
					$data['alert'] = get_alert('cabang_alert');
					$data['page'] = $template.'/v_cabang';
				}
				elseif ($url=='gudang') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Gudang' ,'link'=>'');
					$data['kode'] = $this->generate_kode('GD','gudang');
					$data['alert'] = get_alert('gudang_alert');
					$data['page'] = $template.'/v_gudang';
				}
				elseif ($url=='barang') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Barang' ,'link'=>'');
					$data['barang'] = $this->Mod_Query->get('result','v_stok');
					$data['page'] = $template.'/v_barang';
				}
				elseif ($url=='salesman') 
				{
					$data['section'] = array('name'=>'Master' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Salesman' ,'link'=>'');
					$data['kode'] = $this->generate_kode('SLS','salesman');
					$data['alert'] = get_alert('salesman_alert');
					$data['page'] = $template.'/v_salesman';
				}
				elseif ($url=="order_barang") {
					$data['section'] = array('name'=>'Penjualan' ,'link'=>'admin-page/penjualan/order-barang');
					$data['sub_section'] = array('name'=>'Order' ,'link'=>'admin-page/penjualan/order-barang');
					$data['users'] = $this->Mod_Query->get('result','user');
					$data['alert'] = get_alert('order_alert');
					$data['penjualan'] = $this->Mod_Query->get('result','v_penjualan');
					$data['kode'] = $this->generate_kode2('ORD','penjualan','tgl_penjualan');
					$data['page'] = $template.'/v_order';
				}
				elseif ($url=="add_order") {
					$data['section'] = array('name'=>'Order' ,'link'=>'admin-page/penjualan/order-barang');
					$data['sub_section'] = array('name'=>'Add Order' ,'link'=>'');
					$data['users'] = $this->Mod_Query->get('result','user');
					$data['alert'] = get_alert('order_alert');
					$data['barang'] = $this->Mod_Query->get('result','barang');
					$data['page'] = $template.'/v_order_form';
				}
				elseif ($url=="retur") {
					$data['section'] = array('name'=>'Retur' ,'link'=>'');
					$data['sub_section'] = '';
					$data['row'] = $this->Mod_Query->get('row','2_id_project');
					$data['alert'] = get_alert('retur_alert');
					$data['page'] = $template.'/v_retur';

				}
				elseif ($url=='stock_opname') 
				{
					$data['section'] = array('name'=>'Gudang' ,'link'=>'main/index/projek');
					$data['sub_section'] = array('name'=>'Stock Opname' ,'link'=>'main/index/projek');
					$data['alert'] = get_alert('gudang_alert');
					$data['page'] = $template.'/v_stock_opname';
				}
				elseif ($url=='stock_gudang') 
				{
					$data['section'] = array('name'=>'Gudang' ,'link'=>'main/index/projek');
					$data['sub_section'] = array('name'=>'Stock Opname' ,'link'=>'main/index/projek');
					$data['alert'] = get_alert('gudang_alert');
					$data['page'] = $template.'/v_stock_gudang';
				}
				elseif ($url=='diskon') 
				{
					$data['section'] = 'POS';
					$data['sub_section'] = 'Diskon';
					$data['page'] = 'admin/v_harga';
				}
				elseif ($url=='barcode') 
				{
					$data['section'] = 'POS';
					$data['sub_section'] = 'Barcode Barang';
					$data['barcode'] = $this->Mod_Query->get('result','barcode');
					$data['val'] = $sub_url;
					$data['page'] = 'admin/v_barcode';
				}
				elseif ($url=='pembelian')
				{
					$data['section'] = 'Pembelian';
					if ($sub_url=="detail") {
						$data['sub_section'] = 'Detail Pembelian';
						$data['page'] = $template.'/v_pembelian_dt';
					} else {
						$data['sub_section'] = 'Tambah Data';
						$data['page'] = $template.'/v_pembelian';
					}
				}
				elseif ($url=='penerimaan')
				{
					$data['section'] = array('name'=>'Pembelian' ,'link'=>'');
					$data['sub_section'] = array('name'=>'Penerimaan Barang' ,'link'=>'');
					$data['karyawan'] = $this->Mod_Query->get('result','karyawan');
					$data['kode'] = $this->generate_kode2('BPB','penerimaan_barang','tgl_bpb');
					$data['satuan'] = $this->Mod_Query->get('result','satuan');;
					$data['page'] = $template.'/v_penerimaan_barang2';
				}
				elseif ($url=='tracker')
				{
					$data['section'] = array('name'=>'Salesman' ,'link'=>'admin-page/master/salesman');
					$data['sub_section'] = array('name'=>'Tracker' ,'link'=>'');
					$data['sales'] = $this->Mod_Query->get_where('row','salesman',array('kode_sales' => $sub_url));
					$data['tracker'] = $this->Mod_Query->get_where('result','v_tracker',array('kode_sales' => $sub_url));
					$data['alert'] = get_alert('tracker_alert');
					$data['page'] = $template.'/v_tracker';
				}
				else
				{
					$data['section'] = array('name' => 'Dashboard' , 'link' => 'main/');
					$data['sub_section'] = '';
					$data['log_by'] = $this->Mod_Query->get('result','v_log_by');
					$data['host'] = $this->input->post('host');
					$data['page'] = $template.'/v_dashboard';
				}
				$data['daerah'] = $this->Mod_Query->get('result','kabupaten','','Nama','ASC');
				$data['bio'] = $this->bio($this->session->userdata('username'));
				$data['supplier'] = $this->Mod_Query->get('result','supplier');
				$data['customer'] = $this->Mod_Query->get_where('result','customer',array('status' => 'Aktif' ));
				$data['cabang'] = $this->Mod_Query->get_where('result','m_cabang',array('status' => 'Aktif'));
				$data['salesman'] = $this->Mod_Query->get('result','salesman');
				$data['gudang'] = $this->Mod_Query->get('result','v_gudang');
				$data['list_menu'] = $this->Mod_Query->get('result','s_menu');
				$data['log'] = $this->Mod_Query->get_where('result','v_log',array('target_host' => $this->input->post('host')));
				$data['menus'] = $template.'/menus2';
				$home = $template.'/v_home';
				$this->load->view($home,$data);
			}
			else{
				$data['alert'] = get_alert('login_alert');
				$login = $template.'/v_login';
				$this->load->view($login,$data);
			}
			
		}
		public function bio($value)
		{
			$data = array('username' => $value);
			$x = $this->Mod_Query->get_where('result','user',$data);
			return $x;
		}
		public function generate_kode($char='',$table)
		{
			$x = $this->Mod_Number->get_kode1($table);
			$counts = $x->counts;
			return numb1($char,$counts);
			// $counts = $x->counts;
			// $no = $counts + 1;
			// if ($counts < 9) {
			// 	$concat = $char.'-'.'0000'.$no;
			// }
			// elseif ($counts < 99) {
			// 	$concat = $char.'-'.'000'.$no;
			// }
			// elseif ($counts < 999) {
			// 	$concat = $char.'-'.'00'.$no;
			// }
			// elseif ($counts < 9999) {
			// 	$concat = $char.'-'.'0'.$no;
			// }
			// elseif ($counts < 99999) {
			// 	$concat = $char.'-'.$no;
			// }
			// return $concat;
		}
		public function generate_kode2($char='',$table,$field)
		{
			$x = $this->Mod_Number->get_kode2($table,$field);
			$counts = $x->counts;
			$tgl = $x->tgl;
			return numb2($char,$counts,$tgl);
			// $no = $counts + 1;
			// if ($counts < 9) {
			// 	$concat = $char.'-'.$tgl.'-0000'.$no;
			// }
			// elseif ($counts < 99) {
			// 	$concat = $char.'-'.$tgl.'-000'.$no;
			// }
			// elseif ($counts < 999) {
			// 	$concat = $char.'-'.$tgl.'-00'.$no;
			// }
			// elseif ($counts < 9999) {
			// 	$concat = $char.'-'.$tgl.'-0'.$no;
			// }
			// elseif ($counts < 99999) {
			// 	$concat = $char.'-'.$tgl.'-'.$no;
			// }
			// return $concat;
		}
		public function get_button()
		{
			return '<a class="btn '.$btn.'" href="'.bas_url($link).'">"'.$name.'"</a>';
		}
		public function menus($value='')
		{
			 $arrayMenu = array(
							array(
								'title-menu' => 'Home',
								'url' => 'http://wakhidw.blogspot.com/' ,
								'child' => array(
										    array(
												'title-menu' => 'home 1',
												'url' => 'http://tebar.co.id/'
										    ),
										    array(
												'title-menu' => 'home 2',
												'url' => 'http://blog.tebar.co.id/'
										    ),
										)
		             		),
							array(
								'title-menu' => 'Profile',
								'url' => 'http://wakhidw.blogspot.com/' ,
								'child' => array()
							),
							array(
								'title-menu' => 'Contact',
								'url' => 'http://wakhidw.blogspot.com/' ,
								'child' => array()
							),
							array(
								'title-menu' => 'About',
								'url' => 'http://wakhidw.blogspot.com/' ,
								'child' => array()
							)
			 			);
 
			 // $menus = '<ul>'; 
			 // foreach ($arrayMenu as $key => $value) { 
			 //     $menus .= '<li><a href='.$value['url'].'>'.$value['title-menu'].'</a></li>';
			 //     # untuk mengetahui apakah menu utama memiliki sub menu atau tidak
			 //     if( count($value['child']) > 0 ){
			 //         $menus .= '<ul>'; // pembuka submenu 
			 //         foreach ($value['child'] as $key => $value) { 
			 //             $menus .= '<li><a href='.$value['url'].'>'.$value['title-menu'].'</a></li>'; 
			 //         } 
			 
			 //         $menus .= '</ul>'; // penutup submenu
			 //     }
			 
			 // $menus .= '</ul>'; 
			 
			 // } 
			 return $arrayMenu; 
		}
	}
?>