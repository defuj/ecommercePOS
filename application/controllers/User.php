<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Profile | Megakomputer'
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/index.php');
		$this->load->view('template/footer.php');
	}


	public function pesanan()
	{
		$data = [
			'title' => 'Daftar Pesanan | Megakomputer'
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/pesanan.php');
		$this->load->view('template/footer.php');
	}

	public function rincian()
	{
		$data = [
			'title' => 'Rincian Pesanan | Megakomputer'
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/rincian.php');
		$this->load->view('template/footer.php');
	}
}
