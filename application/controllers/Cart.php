<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in())
	    {
	      redirect('auth/login');
	    }
	    
        $this->load->model('produk');
    }

	public function index()
	{
		$data = [
			'title' => 'Keranjang | Product Listening',
			'user' => $this->ion_auth->user()->row()
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('cart/index.php');
		$this->load->view('template/footer.php');
	}

	public function checkout()
	{
		$slug = $this->input->post('slug');
		$qty = $this->input->post('qty');
		
		$data = [
			'title' => 'Checkout | Product Listening',
			'produk' => $this->produk->getData($slug, 'dat_produk')->result(),
			'qty' => $qty,
			'user' => $this->ion_auth->user()->row()
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

		$id = $this->input->post('id');

		$produk = $this->produk->findCart($id);

		$data = [
			'id'      => $id,
	        'qty'     => 1,
	        'price'   => $produk->satuan_dasar,
	        'terjual' => $produk->status_jual,
	        'ket'	  => $produk->ket,
	        'name'    => $produk->nama_item,
	        'img'	  => $produk->cover_img,
	        'slug' 	  => $produk->slug,
	        'stok' 	  => $produk->stok
		];

		$this->cart->insert($data);
	}

	public function changeCost()
	{

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

		}	
	}

	public function destroy()
	{
		$this->cart->destroy();

		redirect('index.php/cart');
	}
}
