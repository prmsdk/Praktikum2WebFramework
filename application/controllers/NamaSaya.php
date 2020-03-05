<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// berikut adalah class yang menerapkan pembuatan librari
class NamaSaya extends CI_Controller 
{
  // berikut adalah method yang akan diakses saat controller ini diakses walaupun tanpa menyertakan method
  public function index()
  {
    // berikut adalah baris kode yang bekerja untuk memuat librari yang telah dibuat yaitu PrimsLib, dapat dilihat pada folder application/libraries/
    $this->load->library('primslib');
    // berikut adalah pemanggilan method yang ada pada librari PrimsLib
    $this->primslib->nama_saya();
    echo "</br>";
    // berikut adalah pemanggilan method yang ada pada librari PrimsLib dan membutuhkan 1 parameter
    $this->primslib->nama_kamu("Primasdika Yunia Putra");
  }
}
