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


	public function kategori($search = null)
	{
		if ($search) {

			$key = $search;

		} elseif ($this->input->get('key')) {

			$key = $this->input->get('key');

		}
		
		$this->db->select('kategori.id as idKategori, nama_kategori, dat_produk.*');
		$this->db->from('dat_produk');
		$this->db->join('kategori', 'kategori.id = dat_produk.id_kategori');
		$this->db->like('dat_produk.nama_item', $key);
		$this->db->or_like('kategori.nama_kategori', $key);

		$count = $this->db->query("SELECT COUNT(*) FROM `dat_produk` INNER JOIN `kategori` ON `kategori`.id = `dat_produk`.id_kategori WHERE `dat_produk`.nama_item LIKE '%$key%' OR `kategori`.nama_kategori LIKE '%$key%'");

		$data = [
			'title' => 'Kategori Produk | Megakomputer',
			'count' => $count->result_array(),
			'produk' => $this->db->get()->result(),
			'key' => $key
			
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('kategori.php');
		$this->load->view('template/footer.php');
	}


}
