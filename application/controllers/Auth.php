<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('email');

    }

	public function index()
	{
		if ($this->session->userdata('email')) {
        	redirect(base_url());
        }

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email tidak boleh kosong',
			'trim' => 'Email tidak boleh ada spasi',
			'valid_email' => 'Email harus valid'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi'
		]);

		if ($this->form_validation->run() == false) {

			$data = [
				'title' => 'Login | Megakomputer',
			];

			$this->load->view('auth/login', $data);

		} else {

			// Validation Success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('dat_pelanggan', ['email' => $email])->row_array();

		// Cek jika user ada
		if ($user) {

			// Cek jika password benar
			if (password_verify($password, $user['password'])) {

				$data = [
					'email' => $user['email'],
					'group_pelanggan' => $user['group_pelanggan'],
					'img' => $user['img']
				];

				$this->session->set_userdata($data);

				if ($user['group_pelanggan'] == 0) {

					// User jika member Umum
					redirect('pages');

				} elseif ($user['group_pelanggan'] == 1) {

					// User jika admin
					echo "ini user reseller";

				} elseif ($user['group_pelanggan'] == 3) {

					// User jika admin
					echo "ini user dealer";

				}

			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password anda salah!</div>');

				redirect('auth');
			}
			
		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email belum terdaftar!</div>');

			redirect('auth');

		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('group_pelanggan');
		$this->session->unset_userdata('img');

		$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Logout berhasil</div>');

		redirect('pages');
	}

	public function register()
	{
		if ($this->session->userdata('email')) {
        	redirect(base_url());
        }
        
        // Validation Rules
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama tidak boleh kosong',
		]);
		// Validation Rules
		$this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[30]', [
			'required' => 'Username tidak boleh kosong',
			'trim' => 'Username tidak boleh ada spasi',
			// 'is_unique' => 'Username sudah terdaftar',
			'max_length' => 'Username terlalu panjang'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[dat_pelanggan.email]', [
			'required' => 'Email tidak boleh kosong',
			'trim' => 'Email tidak boleh ada spasi',
			'valid_email' => 'Email harus valid',
			'is_unique' => 'Email sudah terdaftar'
		]);
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'required|trim|integer|max_length[13]', [
			'required' => 'No. Telp tidak boleh kosong',
			'trim' => 'No. Telp tidak boleh ada spasi',
			'integer' => 'No. Telp harus angka',
			'max_length' => 'No. Telp terlau panjang'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_pass]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|trim|matches[password]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);



		if ($this->form_validation->run() == false) {

			$data = [
				'title' => 'Register | Megakomputer',
			];

			$this->load->view('auth/register', $data);

		} else {

			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('no_telp', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			if ($this->db->insert('dat_pelanggan', $data)) {

				$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Registrasi Berhasil. Silahkan Login!</div>');

			} else {
				show_error();
			}

			redirect('auth');

		}

	}

	public function forgot()
	{

		// Validation Rules
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email tidak boleh kosong',
			'trim' => 'Email tidak boleh ada spasi',
			'valid_email' => 'Email harus valid'
		]);


		if ($this->form_validation->run() == false) {

			$data = [
				'title' => 'Forgot Password | Megakomputer',
			];

			$this->load->view('auth/forgot', $data);

		} else {

			$email = $this->input->post('email');

			$user = $this->db->get_where('dat_pelanggan', ['email' => $email])->row_array();

			// Cek jika user ada
			if ($user) {

				$token = base64_encode(random_bytes(32));

				$data = [
					'email' => $email,
					'token' => $token,
					'created_at' => time()
				];

				$this->db->insert('user_token', $data);
				$this->_sendEmail($token);
				
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email belum terdaftar!</div>');

				redirect('auth/forgot');

			}

		}

	}


	private function _sendEmail($token)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'youremail@gmail.com',
			'smtp_pass' => 'yourpassword',
			'smtp_port' => '465',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('youremail@gmail.com', 'Megacom');
		$this->email->to($this->input->post('email'));
		$this->email->subject('Reset Password Akun | Megacom');
		$this->email->message('Silahkan klik link ini untuk mereset password anda <a href="'. base_url() .'auth/reset?token='. urlencode($token) .'">Reset</a><br/>Token : '. $token .'');


		if ($this->email->send()) {

			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Email sudah dikirim. Silahkan cek Email anda!</div>');

			redirect('auth/forgot');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Gagal mengirim email!</div>');

			redirect('auth/forgot');
		}

	}

 	public function reset()
 	{

 		// Validation Rules
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[confirm_pass]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|trim|matches[password]', [
			'required' => 'Password tidak boleh kosong',
			'trim' => 'Password tidak boleh ada spasi',
			'matches' => 'Password tidak sama'
		]);


		if ($this->form_validation->run() == false) {

			if ($this->input->get('token')) {

				$token = $this->input->get('token');

			} else {

				$token = "";

			}

			$data = [
				'title' => 'Reset Password | Megakomputer',
				'token' => $token
			];

			$this->load->view('auth/reset', $data);

		} else {

			$token = $this->input->post('token');
			$email = $this->input->post('email');
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			
			$user_email = $this->db->get_where('user_token', ['email' => $email])->row_array();

			// Cek jika user ada
			if ($user_email) {

				$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

				if ($user_token) {

					if (time() - $user_token['created_at'] < (60*60)) {

						$data = [
							'password' => $password
						];

						$this->db->update('dat_pelanggan', $data, ['email' => $email]);

						$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Password berhasil di reset. Silahkan Login!</div>');

						redirect('auth');

					} else {

						$this->db->delete('user_token', ['email' => $email]);
						$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Token anda sudah kadaluarsa</div>');

						redirect('auth/forgot');
					}


				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Token anda salah</div>');

					redirect('auth/reset');

				}


				
			} else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email anda salah</div>');

				redirect('auth/reset');

			}

		}

 	}

}
