<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	protected $user;

	public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {
        	$this->user = $this->db->get_where('dat_pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        	// redirect('auth');
        }
	    
        $this->load->model('produk');

    }

	public function index()
	{
		// var_dump([$this->produk->findAll()->result(), $this->produk->findLimit()->result()]);
		// die();
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

	public function detail($slug = null)
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

			$this->db->select('ref_jenis.jenis, dat_produk.*, dat_img_produk.nama_file, dat_konversi_satuan.harga_akhir, dat_konversi_satuan.diskon, dat_konversi_satuan.tipe_diskon');
			$this->db->from('dat_produk');
			$this->db->join('ref_jenis', 'ref_jenis.id = dat_produk.id_jenis');
			$this->db->join('dat_img_produk', 'dat_img_produk.id = dat_produk.id_cover_img');
			$this->db->join('dat_konversi_satuan', 'dat_konversi_satuan.id = dat_produk.satuan_dasar');
			$this->db->like('dat_produk.nama_item', $key);
			$this->db->or_like('ref_jenis.jenis', $key);

			$count = $this->db->query("SELECT COUNT(*) FROM `dat_produk` INNER JOIN `ref_jenis` ON `ref_jenis`.id = `dat_produk`.id_jenis WHERE `dat_produk`.nama_item LIKE '%$key%' OR `ref_jenis`.jenis LIKE '%$key%'");

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
