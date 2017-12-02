<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$x = $this->Mod_Query->get_where('num_rows','config',array('name'=>'Installasi','status' => 1));
		if ($x > 0) {
			redirect('admin-page');
		}
		else{
			redirect('admin-page/instalasi');
		}
	}
	public function index($value='')
	{
		echo "Welcome";
	}
}
