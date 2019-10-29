<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pemesanan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('Pemesanan_model');

		if ($this->session->userdata('role_id') != '2') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger role="alert">
				Anda belum login
				</div>');
			redirect('Welcome/login');
		}
		
	
	}
	
	public function renderlayout($data)
	{
		$this->load->view('layout/header', $data);
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
		
	}

	public function index($id,$id1,$jumlahkursi)
	{
		$data['page'] = "Tampil Pesan";
		$data['rute'] = $this->Pemesanan_model->getrute($id);
		$data['transportasi_id'] = $this->Pemesanan_model->gettransportasi($id1);
		$data['jumlahkursi'] = $jumlahkursi;
		$this->renderlayout($data);
	}

	public function pesan($id,$id1,$jumlahkursi)
	{
		$data['page'] = "Pemesanan";
		$data['rute'] = $this->Pemesanan_model->getrute($id);
		$data['transportasi_id'] = $this->Pemesanan_model->gettransportasi($id1);
		$data['penumpang'] =  $this->Pemesanan_model->getallpenumpang();
 		$data['jumlahkursi'] = $jumlahkursi;
		$this->renderlayout($data);

		
		$this->load->view('layout/pemesanan/modal_kursi',$data);
		
	}
        
}
        
    /* End of file  pemesanan.php */
        
                            