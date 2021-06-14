<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('produk');
    }

	public function index()
	{
		$data = [
			'title' => 'Beranda | Megakomputer',
			'produk' => $this->produk->findAll()->result(),
			'produkLimit' => $this->produk->findLimit()->result()
		];



		$this->load->view('template/header.php', $data);
		$this->load->view('index.php', $data);
		$this->load->view('template/footer.php');
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail Produk | Megakomputer',
			'produk' => $this->produk->getData($id, 'dat_produk')->result(),
			'produkLimit' => $this->produk->findLimit()->result()
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('detail.php', $data);
		$this->load->view('template/footer.php');
	}
	public function kategori()
	{
		$data = [
			'title' => 'Kategori Produk | Megakomputer'
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('kategori.php');
		$this->load->view('template/footer.php');
	}
}
