<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CAuth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{

		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => 'Email wajib diisi.',
				'valid_email' => 'Format email tidak valid.'
			]
		);

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[6]',
			[
				'required' => 'Password wajib diisi.',
				'min_length' => 'Password harus memiliki minimal 6 karakter.'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('Template/header');
			$this->load->view('Pages/Auth/login');
			$this->load->view('Template/footer');
		} else {
			$this->_login();
		}
	}


	public function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			//kondisi jika user aktif 
			if ($user['is_active'] == 1) {
				//cek password 
				if (password_verify($password, $user['password'])) {
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('CAdmin/menu_laporan_pengaduan');
					} elseif ($user['role_id'] == 2) {
						redirect('CPages/Warga');
					} elseif ($user['role_id'] == 3) {
						redirect('CPages/Stafpelayanan');
					} elseif ($user['role_id'] == 4) {
						redirect('CPages/KepalaDinas');
					}
				} else {
					$this->session->set_flashdata('message', '<p class="text-sm text-red-500">
					password salah
		 			 </p>');
					redirect('CAuth');
				}
			} else {
				$this->session->set_flashdata('message', '<p class="text-sm text-red-500">
				email belum diaktivasi
		 		 </p>');
				redirect('CAuth');
			}
		} else {
			$this->session->set_flashdata('message', '<p class="text-sm text-red-500">
			email tidak terdaftar
		 	 </p>');
			redirect('CAuth');
		}
	}

	public function registrasiWarga()
	{

		//validasi nama
		$this->form_validation->set_rules(
			'nama_warga',
			'Nama',
			'required|trim',
			['required' => 'nama harus diisi yaa']
		);

		//validasi NIK
		$this->form_validation->set_rules(
			'nik',
			'NIK',
			'required|numeric|exact_length[4]',
			[
				'required' => 'Field NIK wajib diisi.',
				'numeric' => 'NIK harus berupa angka.',
				'exact_length' => 'NIK harus berisi tepat 4 digit.'
			]
		);

		//validasi alamat
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required|trim',
			['required' => 'Alamat wajib diisi.']
		);

		//validasi jenis kelamin
		$this->form_validation->set_rules(
			'jenis_kelamin',
			'Jenis Kelamin',
			'required',
			['required' => 'Jenis kelamin wajib dipilih.']
		);

		//validasi email
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.email]',
			[
				'required' => 'Email wajib diisi.',
				'valid_email' => 'Format email tidak valid.',
				'is_unique' => 'email ini udah digunain'
			]
		);

		//validasi password
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[6]',
			[
				'required' => 'Password wajib diisi.',
				'min_length' => 'Password harus memiliki minimal 6 karakter.'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('Template/header');
			$this->load->view('Pages/Auth/Registrasi/Warga/index.php');
			$this->load->view('Template/footer');
		} else {
			$dataUser = [
				'nama_warga' => htmlspecialchars($this->input->post('nama_warga', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role' => 'warga',
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => date('Y-m-d H:i:s')
			];

			$this->db->insert('user', $dataUser);

			$dataWarga = [
				'nama_warga' => htmlspecialchars($this->input->post('nama_warga', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
			];

			$this->db->insert('warga', $dataWarga);
			$this->session->set_flashdata('message', '<p class="text-sm text-green-500">akun warga berhasil dibuat</p>');
			redirect('CAuth');
		}
	}

	public function registrasiStafpelayanan()
	{

		//validasi nama
		$this->form_validation->set_rules(
			'nama_stafpelayanan',
			'Nama',
			'required|trim',
			['required' => 'nama harus diisi yaa']
		);

		//validasi NIK
		$this->form_validation->set_rules(
			'nik',
			'NIK',
			'required|numeric|exact_length[16]',
			[
				'required' => 'Field NIK wajib diisi.',
				'numeric' => 'NIK harus berupa angka.',
				'exact_length' => 'NIK harus berisi tepat 16 digit.'
			]
		);

		//validasi alamat
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required|trim',
			['required' => 'Alamat wajib diisi.']
		);

		//validasi jenis kelamin
		$this->form_validation->set_rules(
			'jenis_kelamin',
			'Jenis Kelamin',
			'required',
			['required' => 'Jenis kelamin wajib dipilih.']
		);

		//validasi email
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.email]',
			[
				'required' => 'Email wajib diisi.',
				'valid_email' => 'Format email tidak valid.',
				'is_unique' => 'email ini udah digunain'
			]
		);

		//validasi password
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[6]',
			[
				'required' => 'Password wajib diisi.',
				'min_length' => 'Password harus memiliki minimal 6 karakter.'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('Template/header');
			$this->load->view('Pages/Auth/Registrasi/Stafpelayanan/index.php');
			$this->load->view('Template/footer');
		} else {
			$dataUser = [
				'nama_warga' => htmlspecialchars($this->input->post('nama_stafpelayanan', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role' => 'stafpelayanan',
				'role_id' => 3,
				'is_active' => 0,
				'date_created' => date('Y-m-d H:i:s')
			];

			$this->db->insert('user', $dataUser);

			$dataStafpelayanan = [
				'nama_stafpelayanan' => htmlspecialchars($this->input->post('nama_stafpelayanan', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
			];

			$this->db->insert('stafpelayanan', $dataStafpelayanan);
			$this->session->set_flashdata('message', '<p class="text-sm text-green-500">akun stafpelayanan berhasil dibuat</p>');
			redirect('CAuth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<p class="text-sm text-red-500">yeyy Kamu berhasil logout</p>');
		redirect('CAuth');
	}
}
