<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in())
	    {
	      redirect('auth/login');
	    }

    }

	public function index()
	{
		$data = [
			'title' => 'Profile | Megakomputer',
			'user' => $this->ion_auth->user()->row()
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/index.php', $data);
		$this->load->view('template/footer.php');
	}


	public function pesanan()
	{
		$data = [
			'title' => 'Daftar Pesanan | Megakomputer',
			'user' => $this->ion_auth->user()->row()
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/pesanan.php');
		$this->load->view('template/footer.php');
	}

	public function rincian()
	{
		$data = [
			'title' => 'Rincian Pesanan | Megakomputer',
			'user' => $this->ion_auth->user()->row()
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/rincian.php');
		$this->load->view('template/footer.php');
	}
}
