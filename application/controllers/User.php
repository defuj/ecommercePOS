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
				'user' => $this->user,
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

	public function loadAlamat()
	{
		$user = $this->user;

		$alamat = $this->db->select('user.id as idUser, user.name, user.no_telp, alamat.*');
		$alamat = $this->db->from('user');
		$alamat = $this->db->join('alamat', 'alamat.user_id = user.id');
		$alamat = $this->db->where('alamat.user_id', $user['id']);
		$alamat = $this->db->order_by('id', 'DESC');
		$alamat = $this->db->get()->result_array();

		$data = [
			'alamat' => $alamat
		];

		$this->load->view('user/alamat', $data);
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
			    'success' => true
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
		$this->form_validation->set_rules('emailNew', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'required' => 'Email tidak boleh kosong',
			'trim' => 'Email tidak boleh ada spasi',
			'valid_email' => 'Email harus valid',
			'is_unique' => 'Email sudah terdaftar'
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


	public function addAlamat()
	{
		// Validation Rules
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
			'required' => 'Provinsi tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kota', 'Kota', 'required', [
			'required' => 'Kota tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
			'required' => 'Kecamatan tidak boleh kosong',
		]);
		$this->form_validation->set_rules('desa', 'Desa', 'required', [
			'required' => 'Desa tidak boleh kosong',
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kode-pos', 'Kode Pos', 'required', [
			'required' => 'Kode Pos tidak boleh kosong',
		]);

		if ($this->form_validation->run()) {

			$user = $this->user;

			$data = [
				'user_id' => $user['id'],
				'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
				'kota' => htmlspecialchars($this->input->post('kota', true)),
				'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
				'desa' => htmlspecialchars($this->input->post('desa', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'kode_pos' => htmlspecialchars($this->input->post('kode-pos', true)),
			];

			$this->db->insert('alamat', $data);

			$array = array(
			    'success' => true
			);

		} else {

			$array = array(
			    'error'   => true,
			    'provinsi_add_alamat_error' => form_error('provinsi', '<small class="text-danger">', '</small>'),
			    'kota_add_alamat_error' => form_error('kota', '<small class="text-danger">', '</small>'),
			    'kecamatan_add_alamat_error' => form_error('kecamatan', '<small class="text-danger">', '</small>'),
			    'desa_add_alamat_error' => form_error('desa', '<small class="text-danger">', '</small>'),
			    'alamat_add_alamat_error' => form_error('alamat', '<small class="text-danger">', '</small>'),
			    'kode_pos_add_alamat_error' => form_error('kode-pos', '<small class="text-danger">', '</small>'),
			);

		}

	 	echo json_encode($array);

	}

	public function editAlamat()
	{

		if ($this->input->post('id')) {

			$id = htmlspecialchars($this->input->post('id', true));

			$alamat = $this->db->get_where('alamat', ['id' => $id])->row_array();

			$data = [
				'success' => true,
				'provinsi' => $alamat['provinsi'],
				'kota' => $alamat['kota'],
				'kecamatan' => $alamat['kecamatan'],
				'desa' => $alamat['desa'],
				'alamat' => $alamat['alamat'],
				'kode_pos' => $alamat['kode_pos']
			];

		} else {

			$data = [
				'error' => true
			];

		}

		echo json_encode($data);

	}

	public function updateAlamat()
	{
		// Validation Rules
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required', [
			'required' => 'Provinsi tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kota', 'Kota', 'required', [
			'required' => 'Kota tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
			'required' => 'Kecamatan tidak boleh kosong',
		]);
		$this->form_validation->set_rules('desa', 'Desa', 'required', [
			'required' => 'Desa tidak boleh kosong',
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat tidak boleh kosong',
		]);
		$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required', [
			'required' => 'Kode Pos tidak boleh kosong',
		]);

		if ($this->form_validation->run()) {

			$id = htmlspecialchars($this->input->post('id', true));

			$data = [
				'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
				'kota' => htmlspecialchars($this->input->post('kota', true)),
				'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
				'desa' => htmlspecialchars($this->input->post('desa', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)),
			];

			$this->db->update('alamat', $data, ['id' => $id]);

			$array = array(
			    'success' => true
			);

		} else {

			$array = array(
			    'error'   => true,
			    'provinsi_update_alamat_error' => form_error('provinsi', '<small class="text-danger">', '</small>'),
			    'kota_update_alamat_error' => form_error('kota', '<small class="text-danger">', '</small>'),
			    'kecamatan_update_alamat_error' => form_error('kecamatan', '<small class="text-danger">', '</small>'),
			    'desa_update_alamat_error' => form_error('desa', '<small class="text-danger">', '</small>'),
			    'alamat_update_alamat_error' => form_error('alamat', '<small class="text-danger">', '</small>'),
			    'kode_pos_update_alamat_error' => form_error('kode_pos', '<small class="text-danger">', '</small>'),
			);

		}

	 	echo json_encode($array);

	}

	public function activeAlamat()
	{
		$id = $this->input->post('id');

		$user = $this->user;

		$reset = $this->db->update('alamat', ['is_active' => 0], ['user_id' => $user['id']]);

		$update = $this->db->update('alamat', ['is_active' => 1], ['id' => $id]);
	}


	public function deleteAlamat()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$this->db->delete('alamat');
	}


	public function changePass()
	{
		// Validation Rules
		$this->form_validation->set_rules('passwordOld', 'Password', 'required|trim|matches[confirm_pass1]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('confirm_pass1', 'Confirm Password 1', 'required|trim|matches[passwordOld]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('passwordNew', 'Password', 'required|trim|min_length[8]|matches[confirm_pass2]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('confirm_pass2', 'Confirm Password 2', 'required|trim|matches[passwordNew]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);

		if ($this->form_validation->run()) {

			$user = $this->user;

			$passwordOld = $this->input->post('passwordOld');
			$passwordNew = password_hash($this->input->post('passwordNew'), PASSWORD_DEFAULT);


			// Cek jika user ada
			if ($user) {

				// Cek jika password benar
				if (password_verify($passwordOld, $user['password'])) {

					$data = [
						'password' => $passwordNew
					];

					$this->db->update('user', $data, ['id' => $user['id']]);

					$array = array(
					    'success' => true
					);

				}				
			}

		} else {

			$array = array(
			    'error'   => true,
			    'passwordOld_change_error' => form_error('passwordOld', '<small class="text-danger">', '</small>'),
			    'confirm_pass1_change_error' => form_error('confirm_pass1', '<small class="text-danger">', '</small>'),
			    'passwordNew_change_error' => form_error('passwordNew', '<small class="text-danger">', '</small>'),
			    'confirm_pass2_change_error' => form_error('confirm_pass2', '<small class="text-danger">', '</small>')
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
