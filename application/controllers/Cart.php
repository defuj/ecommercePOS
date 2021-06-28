<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

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
		if (!$this->user) {
			redirect('pages');
		}

		$data = [
			'title' => 'Keranjang | Product Listening',
			'user' => $this->user
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('cart/index.php');
		$this->load->view('template/footer.php');
	}

	public function checkout()
	{
		if (!$this->user) {
			redirect('pages');
		}
		
		$user = $this->user;

		$alamat = $this->db->select('dat_pelanggan.id as idUser, dat_pelanggan.nama, dat_pelanggan.telepon, alamat.*');
		$alamat = $this->db->from('dat_pelanggan');
		$alamat = $this->db->join('alamat', 'alamat.user_id = dat_pelanggan.id');
		$alamat = $this->db->where('alamat.user_id', $user['id']);
		$alamat = $this->db->where('alamat.is_active', 1);
		$alamat = $this->db->get()->row_array();

		$slug = $this->input->post('slug');
		$qty = $this->input->post('qty');
		
		$data = [
			'title' => 'Checkout | Product Listening',
			'produk' => $this->produk->getData($slug, 'dat_produk')->result(),
			'qty' => $qty,
			'user' => $user,
			'alamat' => $alamat
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('cart/checkout.php', $data);
		$this->load->view('template/footer.php');
	}

	public function loadCost()
	{
		echo $this->cart->total_items();
	}

	public function loadPrice()
	{
		echo number_format(($this->cart->total()), 0,',','.');
	}

	public function loadItems()
	{
		$data = [
			'dataCart' => $this->cart->contents(),
			'produkLimit' => $this->produk->findLimit()->result()
		];

		$this->load->view('cart/cart-items.php', $data);
	}

	public function insert()
	{
		if (!$this->input->post('id')) {
			show_404();
		}

		$id = $this->input->post('id');

		$produk = $this->produk->findCart($id);

		$data = [
			'id'      => $id,
	        'qty'     => 1,
	        'price'   => $produk->harga_akhir,
	        'status_jual' => $produk->status_jual,
	        'ket'	  => $produk->ket,
	        'name'    => $produk->nama_item,
	        'nama_file'	  => $produk->nama_file,
	        'slug' 	  => $produk->slug,
	        'diskon' 	  => $produk->diskon,
	        'tipe_diskon' => $produk->tipe_diskon
		];

		$this->cart->insert($data);
	}

	public function changeCost()
	{
		if (!$this->input->post('id')) {
			show_404();
		}

		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$cost = $this->input->post('cost');

		$produk = $this->produk->findCart($kode);

		$data = [
			'rowid'      => $id,
	        'qty'     => $cost,
		];

		$this->cart->update($data);
	}

	public function remove()
	{
		if ($this->input->post('id')) {

			$id = $this->input->post('id');
			return $this->cart->remove($id);

		} else {

			show_404();

		}
	}

	public function destroy()
	{
		$this->cart->destroy();

		redirect('index.php/cart');
	}
}
