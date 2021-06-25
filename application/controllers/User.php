<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	protected $user;

	public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('email')) {
        	redirect('auth');
        }

        // Get user data
		$this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->library('form_validation');

    }

	public function index()
	{

		if ($this->form_validation->run() == false) {

			$data = [
				'title' => 'Profile | Megakomputer',
				'user' => $this->user		
			];

			$this->load->view('template/header.php', $data);
			$this->load->view('user/index.php', $data);
			$this->load->view('template/footer.php');

		} else {
			
			$id = htmlspecialchars($this->input->post('id', true));

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true))
			];

			if ($this->db->update('user', $data, ['id' => $id])) {

				$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Data profile berhasil di simpan</div>');
				redirect('user');

			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Data profile berhasil gagal di simpan</div>');
				redirect('user');

			}
		}
	}

	public function loadProfile()
	{
		$data = [
				'user' => $this->user		
		];

		$this->load->view('user/profile', $data);
	}


	public function updateProfile()
	{
		// Validation Rules
		$this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[30]', [
			'required' => 'Username tidak boleh kosong',
			'trim' => 'Username tidak boleh ada spasi',
			// 'is_unique' => 'Username sudah terdaftar',
			'max_length' => 'Username terlalu panjang'
		]);
		$this->form_validation->set_rules('name', 'Nama', 'required|trim', [
			'required' => 'Nama tidak boleh kosong',
			'trim' => 'Nama tidak boleh ada spasi',
		]);
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'required|trim|integer|max_length[13]', [
			'required' => 'No. Telp tidak boleh kosong',
			'trim' => 'No. Telp tidak boleh ada spasi',
			'integer' => 'No. Telp harus angka',
			'max_length' => 'No. Telp terlau panjang'
		]);

		if ($this->form_validation->run()) {

			$id = htmlspecialchars($this->input->post('id', true));

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true))
			];

			$this->db->update('user', $data, ['id' => $id]);

			$array = array(
			    'success' => '<div class="alert alert-success">Data berhasil di simpan</div>'
			);

		} else {

			$array = array(
			    'error'   => true,
			    'username_error' => form_error('username', '<small class="text-danger">', '</small>'),
			    'name_error' => form_error('name', '<small class="text-danger">', '</small>'),
			    'noTelp_error' => form_error('no_telp', '<small class="text-danger">', '</small>')
			);

		}

	 	echo json_encode($array);

	}


	public function changeEmail()
	{
		// Validation Rules
		$this->form_validation->set_rules('emailNew', 'Email', 'required|trim|valid_email', [
			'required' => 'Email tidak boleh kosong',
			'trim' => 'Email tidak boleh ada spasi',
			'valid_email' => 'Email harus valid'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[confirm_pass]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|trim|matches[password]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);

		if ($this->form_validation->run()) {

			$id = htmlspecialchars($this->input->post('id', true));
			$emailOld = htmlspecialchars($this->input->post('emailOld', true));
			$emailNew = htmlspecialchars($this->input->post('emailNew', true));
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['email' => $emailOld])->row_array();

			// Cek jika user ada
			if ($user) {

				// Cek jika password benar
				if (password_verify($password, $user['password'])) {

					$data = [
						'email' => $emailNew
					];

					$this->session->unset_userdata('email');
					$this->session->set_userdata($data);


					$this->db->update('user', $data, ['id' => $id]);

					$array = array(
					    'success' => '<div class="alert alert-success text-center">Email berhasil diubah</div>'
					);

				}				
			}

		} else {

			$array = array(
			    'error'   => true,
			    'email_error' => form_error('emailNew', '<small class="text-danger">', '</small>'),
			    'password_error' => form_error('password', '<small class="text-danger">', '</small>'),
			    'confirm_error' => form_error('confirm_pass', '<small class="text-danger">', '</small>')
			);

		}

	 	echo json_encode($array);
	}


	public function pesanan()
	{
		
		$data = [
			'title' => 'Daftar Pesanan | Megakomputer',
			'user' => $this->user
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/pesanan.php');
		$this->load->view('template/footer.php');
	}

	public function rincian()
	{
		

		$data = [
			'title' => 'Rincian Pesanan | Megakomputer',
			'user' => $this->user
		];

		$this->load->view('template/header.php', $data);
		$this->load->view('user/rincian.php');
		$this->load->view('template/footer.php');
	}
}
