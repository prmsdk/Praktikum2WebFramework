<?php
// berikut adalah baris kode yang mencegah akses langsung pada controller
defined('BASEPATH') OR exit('No direct script access allowed');

// berikut adalah controller yang menerapkan sub bab download file pada BKPM
class Download extends CI_Controller {
	
	// function construct adalah function yang akan dijalankan pertama sekali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	// berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
	public function index(){		
		$this->load->view('v_download');
	}

	// berikut adalah method yang dijalankan ketika link gambar di klik, 
	public function lakukan_download(){				
		// berikut adalah method yang akan memungkinkan pengguna mengunduh gambar yang tertera pada parameter force_download
		force_download('gambar/logo.png',NULL);
	}	

}