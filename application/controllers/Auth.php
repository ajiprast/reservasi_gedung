<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	// halaman login
	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Halaman Login';
			$this->load->view('admin/template/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['name' => $nama])->row_array();

		// usernya ada
		if ($user) {
			// jika usernya aktif
				// cek passeord
			if (password_verify($password, $user['password'])) {
				$data  = [
					'role_id' => $user['role_id'],
					'id_user' => $user['id_user'],
					'nama' => $user['name'],
					'login' => 'true'
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('admin');
				} else {

					redirect('pengelola');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">akun belum terdaftar</div>');
			redirect('auth');
		}
	}

	public function logout()
	{

		$data  = [
			'email' => '',
			'role_id' => '',
			'id_user' => '',
			'nama' => '',
			'login' => ''
		];
		$this->session->set_userdata($data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar! </div>');
		redirect('auth');
	}

	public function blocked(){

		$this->load->view('admin/template/blocked');
	}

	public function gantiPassword($id){
		$data['kk'] = 'gantiPassword';
		$data['admin'] = $this->db->query("SELECT * FROM user where id_user = $id")->row_array();
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/ganti_password',$data);
		$this->load->view('admin/template/footer');
	}

	public function simpanPassword(){

		$nama = $this->input->post('nama');
		$id_user = $this->input->post('id_user');
		$password1 = $this->input->post('password1');
		$password2 =  password_hash($this->input->post('password2'), PASSWORD_DEFAULT);

		$user = $this->db->get_where('user', ['id_user' => $id_user])->row_array();

		if (password_verify($password1, $user['password'])) {
			$query = $this->db->query("UPDATE user SET password = '$password2' where id_user = $id_user");

			if($query){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">password Berhasil diubah</div>');
				$data  = [
					'email' => '',
					'role_id' => '',
					'id_user' => '',
					'nama' => '',
					'login' => ''
				];
				$this->session->set_userdata($data);
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password lama tidak cocok</div>');
			header('location:'.base_url().'Auth/gantiPassword/'.$id_user);
		}

	}



	// halaman registrasi
	// public function registration()
	// {

	// 	if ($this->session->userdata('email')) {
	// 		redirect('user');
	// 	}

	// 	$this->form_validation->set_rules('name', 'Name', 'required|trim');
	// 	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
	// 		'is_unique' => 'email sudah didaftarkan'
	// 	]);

	// 	$this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[4]|matches[password2]', [
	// 		'matches' => 'password tidak cocok!',
	// 		'min_length' => 'password terlalu pendek!'
	// 	]);

	// 	$this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'Halaman Daftar inGIS ';
	// 		$this->load->view('admin/template/register', $data);
	// 	} else {
	// 		$email = $this->input->post('email', true);
	// 		$data = [
	// 			'name' => htmlspecialchars($this->input->post('name', true)),
	// 			'email' => htmlspecialchars($email),
	// 			'image' => 'default.jpg',
	// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	// 			'role_id' => 2,
	// 			'is_active' => 0

	// 		];

	// 		$token = base64_encode(random_bytes(29));
	// 		$user_token = [
	// 			'email' => $email,
	// 			'token' => $token,
	// 			// verifikasi agar expired
	// 			'date_created' => time()
	// 		];
	// 		$this->db->insert('user', $data);
	// 		$this->db->insert('user_token', $user_token);

	// 		$this->_sendEmail($token, 'verify');


	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda telah dibuat. Silahkan cek email untuk aktivasi! </div>');
	// 		redirect('auth');
	// 	}
	// }


	// private function _sendEmail($token, $type)
	// {
	// 	$config = [
	// 		'protocol'  => 'smtp',
	// 		'smtp_host' => 'ssl://smtp.googlemail.com',
	// 		'smtp_user' => 'oa.corp101@gmail.com',
	// 		'smtp_pass' => '@Lenggokgoreng8123.',
	// 		'smtp_port' =>  465,
	// 		'mailtype'  => 'html',
	// 		'charset'   => 'utf-8',
	// 		'newline'   => "\r\n"
	// 	];

	// 	$this->load->library('email', $config);
	// 	$this->email->initialize($config);

	// 	$this->email->from('oa.corp101@gmail.com', 'onlyandri corporation');
	// 	$this->email->to($this->input->post('email'));

	// 	// verifikasi token
	// 	if ($type == 'verify') {
	// 		$this->email->subject('Verifikasi Akun website template login');
	// 		$this->email->message('Klik link aktivasi dibawah ini untuk verifikasi akun anda! : <br />
	// 			<a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a> ');
	// 	} elseif ($type == 'forgot') {
	// 		$this->email->subject('Reset Password');
	// 		$this->email->message('Klik link dibawah ini untuk mereset password! : <br />
	// 			<a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a> ');
	// 	}

	// 	if ($this->email->send()) {
	// 		return true;
	// 	} else {
	// 		echo $this->email->print_debugger();
	// 		die;
	// 	}
	// }

	// // agar bisa login
	// public function verify()
	// {
	// 	$email = $this->input->get('email');
	// 	$token = $this->input->get('token');

	// 	$user = $this->db->get_where('user', ['email' => $email])->row_array();

	// 	if ($user) {
	// 		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

	// 		if ($user_token) {
	// 			// batasi waktu aktivasi
	// 			if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
	// 				$this->db->set('is_active', 1);
	// 				$this->db->where('email', $email);
	// 				$this->db->update('user');

	// 				$this->db->delete('user_token', ['email' => $email]);
	// 				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' Telah diaktivasi! silahkan login.</div>');
	// 				redirect('auth');
	// 			} else {

	// 				$this->db->delete('user', ['email' => $email]);
	// 				$this->db->delete('user_token', ['email' => $email]);

	// 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Kadaluarsa!</div>');
	// 				redirect('auth');
	// 			}
	// 		} else {
	// 			// menghindari input data secara manual dari url
	// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Token Invalid!</div>');
	// 			redirect('auth');
	// 		}
	// 	} else {
	// 		// menghindari input data secara manual dari url
	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi token gagal! email salah.</div>');
	// 		redirect('auth');
	// 	}
	// }

	// public function blocked()
	// {
	// 	$this->load->view('auth/blocked');
	// }

	// public function forgotPassword()
	// {
	// 	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'Lupa Password';
	// 		$this->load->view('templates/auth_header', $data);
	// 		$this->load->view('auth/forgotpassword');
	// 		$this->load->view('templates/auth_footer');
	// 	} else {
	// 		$email = $this->input->post('email');
	// 		$user  = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
	// 		if ($user) {
	// 			$token  = base64_encode(random_bytes(29));
	// 			$user_token = [
	// 				'email' => $email,
	// 				'token' => $token,
	// 				'date_created' => time()
	// 			];

	// 			$this->db->insert('user_token', $user_token);
	// 			$this->_sendEmail($token, 'forgot');
	// 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan cek email untuk mereset password! </div>');
	// 			redirect('auth/forgotpassword');
	// 		} else {
	// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar atau diaktivasi! </div>');
	// 			redirect('auth/forgotpassword');
	// 		}
	// 	}
	// }

	// public function resetPassword()
	// {
	// 	$email = $this->input->get('email');
	// 	$token = $this->input->get('token');

	// 	$user = $this->db->get_where('user', ['email' => $email])->row_array();

	// 	if ($user) {
	// 		$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
	// 		if ($user_token) {
	// 			$this->session->set_userdata('reset_email', $email);
	// 			$this->changePassword();
	// 		} else {
	// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Token salah.</div>');
	// 			redirect('auth');
	// 		}
	// 	} else {
	// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal! Email salah.</div>');
	// 		redirect('auth');
	// 	}
	// }

	// public function changePassword()
	// {
	// 	// agar user tidak sembarangan ganti password tanpa dari email
	// 	if (!$this->session->userdata('reset_email')) {
	// 		redirect(auth);
	// 	}

	// 	$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]');
	// 	$this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[4]|matches[password1]');
	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'Ganti Password';
	// 		$this->load->view('templates/auth_header', $data);
	// 		$this->load->view('auth/changepassword');
	// 		$this->load->view('templates/auth_footer');
	// 	} else {
	// 		$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
	// 		$email = $this->session->userdata('reset_email');

	// 		$this->db->set('password', $password);
	// 		$this->db->where('email', $email);
	// 		$this->db->update('user');

	// 		// hapus session reset
	// 		$this->session->unset_userdata('reset_email');

	// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti! Silahkan login.</div>');
	// 		redirect('auth');
	// 	}
	// }
}
