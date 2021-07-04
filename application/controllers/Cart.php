<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	protected $user;
	protected $direktori;

	public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {
        	$this->user = $this->db->get_where('dat_pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        	// redirect('auth');
        }

        $this->direktori = $this->db->get('konf_direktori')->row();
	    
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
			'produk' => $this->produk->getData($slug, 'dat_produk')->row(),
			'qty' => $qty,
			'user' => $user,
			'alamat' => $alamat,
			'direktori' => $this->direktori
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
			'produkLimit' => $this->produk->findLimit()->result(),
			'direktori' => $this->direktori
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

		if ($produk->tipe_diskon == 'persen') {
			$harga = ($produk->diskon / 100) * $produk->harga_akhir;
		} elseif ($produk->tipe_diskon == 'nominal') {
			$harga = $produk->harga_akhir - ($produk->diskon);
		} elseif ($produk->tipe_diskon == 'no_diskon') {
			$harga = $produk->harga_akhir;
		}

		$data = [
			'id'      => $id,
	        'qty'     => 1,
	        'price'   => $harga,
	        'name'    => $produk->nama_item,
	        'harga_akhir' => $produk->harga_akhir,
	        'status_jual' => $produk->status_jual,
	        'deskripsi'	  => $produk->deskripsi_ecommerce,
	        'nama_file'	  => $produk->nama_file,
	        'slug' 	  => $produk->slug,
	        'diskon' 	  => $produk->diskon,
	        'tipe_diskon' => $produk->tipe_diskon,
	        'berat' => $produk->berat
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

		redirect('pages');
	}

	public function loadOngkir()
	{
		$user = $this->user;

		$alamat = $this->db->select('alamat.*');
		$alamat = $this->db->from('dat_pelanggan');
		$alamat = $this->db->join('alamat', 'alamat.user_id = dat_pelanggan.id');
		$alamat = $this->db->where('alamat.user_id', $user['id']);
		$alamat = $this->db->where('alamat.is_active', 1);
		$alamat = $this->db->get()->row_array();

		if ($alamat) {
			$weight = $this->input->post('weight');
			$kurir = $this->input->post('kurir');

			$post_fields = 'origin=440&destination='.$alamat['kota_id'].'&weight='.$weight.'&courier='.$kurir;
			rtrim($post_fields, '&');

			$ch = curl_init();												//<-- init curl
			curl_setopt_array($ch, array(			
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",		//<-- url rajaongkir
			  CURLOPT_HTTPHEADER => array(										//<-- header http
			    "content-type: application/x-www-form-urlencoded",			//<-- content type
			    "key:f377578c71065bee2e2f45b1336ab296"						//<-- api key rajaongkir
			  ),
			  CURLOPT_POST => 4, 											//<-- jumlah fields {origin,destination,weight,courier}
			  CURLOPT_POSTFIELDS => $post_fields,							//<-- field yang akan dikirim
			));
			$output = curl_exec($ch);
			curl_close($ch);
			$output = json_decode($output);
			die($output);
		}

		
	}



}
