<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
		public function __construct(){//_ ada 2
		parent::__construct();
		$this->load->model('mahasiswa_model');//kenalan
	}

	public function index(){
		$data['judul']='mahasiswa';
		$data['sub_judul']='Halaman mahasiswa';
		$data['halaman']='admin/v_mahasiswa';
		$data['isi_tabel']= $this->mahasiswa_model->all();//tampung data

		$this->load->view('admin/v_template',$data);
	}
	public function tambah(){
		$data['judul']='mahasiswa';
		$data['sub_judul']=' Tambah mahasiswa';
		$data['halaman']='admin/v_tambah_mahasiswa';


		$this->load->view('admin/v_template',$data);
	}
	public function tambah_proses(){

	}

}

 ?>