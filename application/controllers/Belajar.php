<?php

defined('BASEPATH') OR exit('No direct script access allowed');
// berfungsi mencegah akses langsung pada file controller

// nama class harus diawali huruf BESAR, harus extends kepada CI_Controller
class Belajar extends CI_Controller {
  
  // function construct adalah function yang akan dijalankan pertama sekali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

  // berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
	public function index(){
		// berikut adalah print echo pada halaman index di controller Belajar
		echo "ini method index pada controller belajar";
	}

  // berikut adalah method halo yang mencoba mengirimkan data melalui array ke view_belajar
	public function halo(){
		// berikut adalah data array yang akan dimasukkan ke view_belajar
		$data = array(
			'judul' => "Cara Membuat View Pada CodeIgniter",
			'tutorial' => "CodeIgniter"
			);
		
		// berikut adalah kode untuk memuat view belajar sekalian membawa data array
		$this->load->view('view_belajar', $data);
	}

	// berikut adalah method user yang mengambil data dari database dan dikirim kepada view user
	function user()
	{
		// berikut adalah variabel data yang berisi hasil query select from tabel user melalui model m_data dan method ambil_data()
		$data['user'] = $this->m_data->ambil_data()->result();
		// berikut adalah kode untuk memuat view user sekalian membawa data dari tabel user
		$this->load->view('v_user.php', $data);
	}

}
