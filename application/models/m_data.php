<?php

// berikut adalah class yang mendefinisikan model yang bernama M_data
class M_data extends CI_Model{
	// berikut adalah method yang berisi query "SELECT * FROM user"
	function ambil_data(){
		return $this->db->get('user');
	}
}
