<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http: //example.com/index.php/welcome
	 *	- or -
	 * http: //example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https: //codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('Welcome_model');
	}

	public function index()
	{
		
		redirect('Welcome/login','refresh');
		
	}

	public function error()
	{
		$this->load->view('errors/html/error_404');
	}


	public function register() 
	{
		$data = new stdClass();
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[penumpang.username]', array('is_unique' => 'Nama pengguna ini sudah ada. Silakan pilih yang lain.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[penumpang.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('nama_penumpang','Nama Penumpang','required',['required'=>'Wajib di isi']);
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',['required'=>'Wajib di isi']);
		$this->form_validation->set_rules('telephone','Telephone','required',['required'=>'Wajib di isi']);
		
		if ($this->form_validation->run() == false) {
			
			$this->load->view('layout/register',$data);
			
		} else {
			$id             = "";
			$username       = $this->input->post('username');
			$email          = $this->input->post('email');
			$password       = $this->input->post('password');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$jenis_kelamin  = $this->input->post('jenis_kelamin');
			$telephone      = $this->input->post('telephone');
			
			if ($this->Welcome_model->create_user($id, $username, $email, $password, $jenis_kelamin, $nama_penumpang,$telephone)) {
				
				$this->load->view('layout/login',$data);
				
			} else {
				
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				redirect('layout/register',$data,'refresh');
				
			}
			
		}
		
	}

	public function login() {

		$data = new stdClass();
		
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('layout/login', $data);

		}else {

			$auth = $this->Welcome_model->cek_login();
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau Password salah
					</div>');
				redirect($this->load->view('layout/login', 'refresh'));
			}else{

				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch ($auth->role_id) {
					case 1: redirect('Admin');
					break;

					case 2: redirect('User');
					break;

					default: 
					break;
				}
			}
		}

	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect($this->load->view('layout/login', 'refresh'));
	}


	/*public function insert_dumy()
	{
		for($a=1; $a<=100; $a++){
			$data= array(
				'id_petugas'   => '',
				'email'        => 'fauzan'.$a.'@gmail.com',
				'password'     => 'soekarno',
				'nama_petugas' => 'fauzan',
				'id_level'     => $a,
			);
			$this->db->insert('petugas',$data);
		}
	}
	public function insert_dumy1()
	{
		for($a=1; $a<=100; $a++){
			$data= array(
				'id_level'   => '',
				'nama_level' => 'fauzan',
				'id_level'   => 'id_level'.$a,
			);
			$this->db->insert('level',$data);
		}
	}*/

	/*public function insert_dumy2()
	{
		for($a=1; $a<=100; $a++){
			$data= array(
				'id_type_transportasi' => '',
				'nama_type'            => 'bus'.$a,
				'keterangan'           => 'ada',
			);
			$this->db->insert('type_transportasi',$data);
		}
	}*/
}
