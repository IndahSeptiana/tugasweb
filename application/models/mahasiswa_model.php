<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {
	public function all(){
		return $this->db->get('mahasiswa')->result(); //result untuk menjadikan array
	}
}
 ?>