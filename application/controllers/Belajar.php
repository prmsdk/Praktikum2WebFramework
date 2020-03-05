<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// berfungsi mencegah akses langsung pada file controller

// nama class harus diawali huruf BESAR
class Belajar extends CI_Controller {
  
  // lah ini apa?
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

  // membuat method index
	public function index(){
		echo "ini method index pada controller belajar";
	}

  // membuat method halo
	public function halo(){
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		$this->load->view('view_belajar', $data);
	}

	function user()
	{
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php', $data);
	}

}
