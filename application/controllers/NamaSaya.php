<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NamaSaya extends CI_Controller 
{
  public function index()
  {
    $this->load->library('primslib');
    $this->primslib->nama_saya();
    echo "</br>";
    $this->primslib->nama_kamu("Primasdika Yunia Putra");
  }
}
