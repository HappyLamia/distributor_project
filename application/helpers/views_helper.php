<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	if ( ! function_exists('views'))
	{
		function get_views($list)
		{
			if ($list=='barang') {
				$query = "CREATE VIEW `barang` AS select `a`.`kode_barang` AS `kode_barang`,`a`.`nama_barang` AS `nama_barang`,`d`.`harga_beli` AS `harga_beli`,`d`.`harga_retail` AS `harga_retail`,`a`.`qty` AS `box_stok`,sum(((`a`.`qty` * `b`.`dt_qty`) * `c`.`dt_qty`)) AS `stok_awal`,`a`.`satuan` AS `satuan`,`b`.`nama_satuan` AS `satuan2`,`c`.`nama_satuan` AS `satuan3` from ((((`penerimaan_barang_dt` `a` join `satuan_barang_mid` `b`) join `satuan_barang_low` `c`) join `harga` `d`) join `penerimaan_barang` `e`) where ((`a`.`kode_barang` = convert(`b`.`id_barang` using utf8)) and (`a`.`kode_barang` = convert(`c`.`id_barang` using utf8)) and (`a`.`kode_barang` = convert(`d`.`id_barang` using utf8)) and (`a`.`kode_bpb` = `e`.`kode_bpb`)) group by `a`.`kode_barang`";
			}
			elseif ($list=='tracker') {
				$query = "CREATE VIEW `v_tracker` AS select `a`.`kode_track` AS `kode_track`,`c`.`kode_sales` AS `kode_sales`,`c`.`nama_sales` AS `nama_sales`,`b`.`id_customer` AS `id_customer`,`b`.`nama` AS `nama`,`b`.`alamat` AS `alamat`,`b`.`asal_daerah` AS `asal_daerah` from ((`track` `a` join `customer` `b`) join `salesman` `c`) where ((`a`.`kode_customer` = `b`.`id_customer`) and (`a`.`kode_salesman` = `c`.`kode_sales`) and (`b`.`status` = 'Aktif'))";
			}
			elseif ($list=='log') {
				$query = "CREATE VIEW `v_log` AS select `a`.`username` AS `username`,`a`.`name` AS `name`,`b`.`id_log` AS `id_log`,`b`.`user` AS `user`,`b`.`action` AS `action`,`b`.`target_host` AS `target_host`,`b`.`target` AS `target`,`b`.`date` AS `date` from (`user` `a` join `log` `b`) where (`a`.`username` = `b`.`user`)";
			}
			elseif ($list=='log_by') {
				$query = "CREATE VIEW `v_log_by` AS select `log`.`target_host` AS `target_host` from `log` group by `log`.`target_host`";
			}
			elseif ($list=='penjualan') {
				$query = "CREATE VIEW `v_penjualan` AS select `a`.`id_penjualan` AS `id_penjualan`,`a`.`id_sales` AS `id_sales`,`a`.`id_customer` AS `id_customer`,`a`.`tgl_penjualan` AS `tgl_penjualan`,`a`.`tgl_kirim` AS `tgl_kirim`,`c`.`nama` AS `nama`,`d`.`nama_sales` AS `nama_sales`,sum((`b`.`harga` * `b`.`jumlah_jual`)) AS `amount` from (((`penjualan` `a` join `dt_penjualan` `b`) join `customer` `c`) join `salesman` `d`) where ((`a`.`id_penjualan` = `b`.`id_penjualan`) and (`a`.`id_customer` = `c`.`id_customer`) and (`a`.`id_sales` = `d`.`kode_sales`))";
			}
			elseif ($list=='total_penjualan') {
				$query = "CREATE VIEW `total_penjualan` AS select `dt_penjualan`.`id_penjualan` AS `id_penjualan`,`dt_penjualan`.`id_barang` AS `id_barang`,sum(`dt_penjualan`.`jumlah_jual`) AS `jumlah_jual` from `dt_penjualan` group by `dt_penjualan`.`id_barang`";
			}
			elseif ($list=='gudang') {
				$query = "CREATE VIEW `v_gudang` AS select `a`.`kode_gudang` AS `kode_gudang`,`a`.`nama_gudang` AS `nama_gudang`,`a`.`alamat` AS `alamat`,`a`.`kontak` AS `kontak`,`a`.`status` AS `status`,`a`.`cabang_id` AS `cabang_id`,`b`.`cabang_nama` AS `cabang_nama`,`b`.`status` AS `cabang_status` from (`gudang` `a` join `m_cabang` `b`) where (`a`.`cabang_id` = convert(`b`.`cabang_kode` using utf8))";
			}
			elseif ($list=='stok') {
				$query = "CREATE VIEW `v_stok` AS select `barang`.`kode_barang` AS `kode_barang`,`barang`.`nama_barang` AS `nama_barang`,`barang`.`harga_beli` AS `harga_beli`,`barang`.`harga_retail` AS `harga_retail`,`barang`.`stok_awal` AS `stok_awal`,ifnull(`total_penjualan`.`jumlah_jual`,0) AS `jumlah_jual`,(`barang`.`stok_awal` - ifnull(`total_penjualan`.`jumlah_jual`,0)) AS `stok` from (`barang` left join `total_penjualan` on((`barang`.`kode_barang` = `total_penjualan`.`id_barang`))) order by `barang`.`nama_barang`";
			}
			return $query ;
			// $alert = $CI->session->flashdata($name);
			// return $alert;
		}
	}
?>