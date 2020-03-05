<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// berikut adalah class yang menampilkan view
class Selamat_Datang extends CI_Controller {
	// function construct adalah function yang akan dijalankan pertama sekali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		$this->load->helper('html');
	}

	// berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
	public function index(){
		$this->load->view('view_belajar');
	}
}