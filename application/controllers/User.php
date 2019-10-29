<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('User_model');

		// if ($this->session->userdata('role_id') != '2') {
		// 	$this->session->set_flashdata('pesan','<div class="alert alert-danger role="alert">
		// 		Anda belum login
		// 		</div>');
		// 	redirect('Welcome/login');
		// }
	}

	public function renderlayout($data)
	{
		$this->load->view('layout/header', $data);
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
		
	}

	public function search($id){
		$data['page'] = "Search";
		$rute_awal = $this->input->post('rute_awal');
		$rute_akhir = $this->input->post('rute_akhir');
		$tanggal_brngkt = $this->input->post('tanggal_brngkt');
		$tanggal_brngkt1 = $this->input->post('tanggal_brngkt');
		$transportasi = $this->input->post('id_transportasi');

		$data['jumlahkursi'] = $this->input->post('jumlah_kursi');
		$gabung = $rute_awal.' - '.$rute_akhir;
		
		$data['products']=$this->User_model->get_search($gabung,$tanggal_brngkt);

		if ($tanggal_brngkt1 == $this->input->post('tanggal_brngkt') AND $transportasi == $this->input->post('id_transportasi')) {
			$data['products1']=$this->User_model->get_search_tanggal($tanggal_brngkt1,$transportasi);
		}
		
		$data['transportasi_id'] = $this->User_model->gettransportasi($id);

		$this->renderlayout($data);
	}

	public function index()
	{
		$data['page'] = "Index";
		$data['rute'] = $this->User_model->getallrute();
		$this->renderlayout($data);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
