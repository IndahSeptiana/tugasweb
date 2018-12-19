<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
		public function __construct(){//_ ada 2
		parent::__construct();
		$this->load->model('dosen_model');//kenalan
	}

	public function index(){
		$data['judul']='Dosen';
		$data['sub_judul']='Halaman Dosen';
		$data['halaman']='admin/v_dosen';
		$data['isi_tabel']= $this->dosen_model->all();//tampung data

		$this->load->view('admin/v_template',$data);
	}
	public function tambah(){
		$data['judul']='Dosen';
		$data['sub_judul']=' Tambah Dosen';
		$data['halaman']='admin/v_tambah_dosen';


		$this->load->view('admin/v_template',$data);
	}
	public function tambah_proses(){

	}

}

 ?>