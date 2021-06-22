<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	protected $user;

	public function __construct()
    {
        parent::__construct();

        // Get user data
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	    
        $this->load->model('produk');

    }

	public function index()
	{

		$data = [
			'title' => 'Beranda | Megakomputer',
			'produk' => $this->produk->findAll()->result(),
			'produkLimit' => $this->produk->findLimit()->result(),
			'user' => $this->user
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('index.php', $data);
		$this->load->view('template/footer.php');
	}

	public function detail($slug)
	{
		$data = [
			'title' => 'Detail Produk | Megakomputer',
			'produk' => $this->produk->getData($slug, 'dat_produk')->result(),
			'produkLimit' => $this->produk->findLimit()->result(),
			'user' => $this->user
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

		if (empty($key)) {
			show_404(base_url('application/views/errors/html/error_404.php', false));
		}

		if ($key) {

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
				'key' => $key,
				'user' => $this->user
			];

			$this->load->view('template/header.php', $data);
			$this->load->view('kategori.php', $data);
			$this->load->view('template/footer.php');
		}

		
	}


}
