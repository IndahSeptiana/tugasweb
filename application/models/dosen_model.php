<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen_model extends CI_Model {
	public function all(){
		return $this->db->get('dosen')->result(); //result untuk menjadikan array
	}
}
 ?>