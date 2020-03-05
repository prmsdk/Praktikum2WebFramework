<?php 

class Form extends CI_Controller{
	// function construct adalah function yang akan dijalankan pertama sekali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		// berikut adalah baris kode yang memuat pustaka form_validation
		$this->load->library('form_validation');
	}

	// berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
	function index(){
		// method untuk menampilkan view form
		$this->load->view('v_form');
	}

	// berikut adalah method yang akan dijalankan ketika tombol submit di klik
	function aksi(){
		// ketiga baris dibawah adalah baris kode yang akan melakukan validasi form 
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		// ini adalah baris kode percabangan logika "if else" yang jika benar maka akan menampilkan tulisan Form validation oke, sedangkan jika salah akan dikembalikan kembali pada view form
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');
		}
	}
}