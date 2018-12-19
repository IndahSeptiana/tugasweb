<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {

	public function data($nama='')
	{
		echo "Hello saudara...<br>";
		echo "Nama saya ".$nama."<br><br>";
		echo "Salam lemper...";
	}
}