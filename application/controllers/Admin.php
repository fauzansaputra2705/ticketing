<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('Admin_model');

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger role="alert">
				Anda belum login
				</div>');
			redirect('Welcome/login');
		}
	}

	public function renderlayout($data)
	{
		$this->load->view('layout/admin/headeradmin', $data);
		$this->load->view('layout/admin/contentadmin');
		$this->load->view('layout/admin/footeradmin');
	}


	public function index()
	{
		$data['page'] = "Admin";
		$this->renderlayout($data);
	}

	public function penumpang()
	{
		$data['page']      = "Penumpang";
		$data['penumpang'] = $this->Admin_model->getpenumpang();
		$this->renderlayout($data);
		$this->load->view('layout/admin/modal_tambah',$data);
		$this->load->view('layout/admin/modal_edit',$data);
	}

	public function petugas()
	{
		$data['page']    = "Petugas";
		$data['petugas'] = $this->Admin_model->getpetugas();
		$data['level'] = $this->Admin_model->getlevel();
		$this->renderlayout($data);
		$this->load->view('layout/admin/modal_tambah',$data);
		$this->load->view('layout/admin/modal_edit',$data);

	}

	public function transportasi()
	{
		$data['page'] = "Transportasi";
		$data['transportasi'] = $this->Admin_model->gettransportasi();
		$data['type_transportasi'] = $this->Admin_model->gettype_transportasi();
		$this->renderlayout($data);
		$this->load->view('layout/admin/modal_tambah',$data);
		$this->load->view('layout/admin/modal_edit',$data);
	}

	public function rute()
	{
		$data['page'] = "Rute";
		$data['modal'] = "RUTE";
		$data['rute'] = $this->Admin_model->getrute();
		$data['transportasi'] = $this->Admin_model->gettransportasi();
		$this->renderlayout($data);
		$this->load->view('layout/admin/modal_tambah', $data);
		$this->load->view('layout/admin/modal_edit', $data);

	}













	public function json_penumpang()
	{
		$this->load->library('datatables');
		$this->datatables->select('id_penumpang , username , email , password , nama_penumpang , jenis_kelamin , telephone , role_id , created_at');

		$this->datatables->add_column('edit', anchor('Admin/penumpang/$1','Edit',array('class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#editpenumpang'.'$1')), 'id_penumpang');

		$this->datatables->add_column('hapus', anchor('Admin/hapus_penumpang','Hapus',array('class'=>'btn btn-danger','onclick'=>"return confirm('Apakah anda ingin menghapus data ini?')" ) ), 'id_penumpang');

		$this->datatables->from('penumpang');
		return print_r($this->datatables->generate());
	}

	public function json_petugas()
	{
		$this->load->library('datatables');
		$this->datatables->select('id_petugas , email , password , nama_petugas , id_level');
		$this->datatables->add_column('edit', anchor('Admin/petugas/$1','Edit',array('class'=>'btn btn-success','data-toggle'=>'modal', 'data-target'=>'#editpetugas'.'$1')), 'id_petugas');
		$this->datatables->add_column('hapus', anchor('Admin/hapus_petugas/$1','Hapus',array('class'=>'btn btn-danger', 'onclick'=>"return confirm('Apakah anda ingin menghapus data ini?')")), 'id_petugas');
		$this->datatables->from('petugas');
		return print_r($this->datatables->generate());
	}

	public function json_transportasi()
	{
		$this->load->library('datatables');
		$this->datatables->select('id_transportasi , kode , jumlah_kursi , keterangan , id_type_transportasi');
		$this->datatables->add_column('edit', anchor('Admin/transportasi/$1','Edit',array('class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#edittransportasi'.'$1')), 'id_transportasi');
		$this->datatables->add_column('hapus', anchor('Admin/hapus_transportasi/$1','Hapus',array('class'=>'btn btn-danger', 'onclick'=>"return confirm('Apakah anda ingin menghapus data ini?')")), 'id_transportasi');
		$this->datatables->from('transportasi');
		return print_r($this->datatables->generate());
	}

	public function json_rute()
	{
		$this->load->library('datatables');
		$this->datatables->select('id_rute , tujuan , rute_awal , rute_akhir , harga , tanggal_brngkt , jam_brngkt , id_transportasi');
		$this->datatables->add_column('edit', anchor('Admin/rute/$1','Edit',array('class'=>'btn btn-success', 'data-toggle'=>'modal', 'data-target'=>'#editrute'.'$1')), 'id_rute');
		$this->datatables->add_column('hapus', anchor('Admin/hapus_rute/$1','Hapus',array('class'=>'btn btn-danger', 'onclick'=>"return confirm('Apakah anda ingin menghapus data ini?')")), 'id_rute');
		$this->datatables->from('rute');
		return print_r($this->datatables->generate());
	}















	public function tambah_penumpang()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[penumpang.username]', array('is_unique' => 'Nama pengguna ini sudah ada. Silakan pilih yang lain.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[penumpang.email]');
		
		if ($this->form_validation->run() == false) {
			
			echo "<script>alert('Data Gagal')</script>";
			redirect('Admin/penumpang','refresh');
			
			
		} else {

			$username       = $this->input->post('username');
			$email          = $this->input->post('email');
			$password       = $this->input->post('password');
			$nama_penumpang = $this->input->post('nama_penumpang');
			$jenis_kelamin  = $this->input->post('jenis_kelamin');
			$telephone      = $this->input->post('telephone');
			$role_id        = $this->input->post('role_id');
			$created_at     = date('Y-m-j H:i:s');

			$saveinsert = array('username' => $username, 'email' => $email, 'password' => $password, 'nama_penumpang' => $nama_penumpang, 'jenis_kelamin' => $jenis_kelamin, 'telephone' => $telephone, 'role_id' => $role_id , 'created_at' => $created_at);

			$cekinsert = $this->Admin_model->insertpenumpang($saveinsert);

			if ( $cekinsert == true) {
				redirect('Admin/penumpang','refresh');
			}else{
				echo "Gagal Meyimpan data";
			}
		}
	}

	public function edit_penumpang()
	{
		$username       = $this->input->post('username');
		$email          = $this->input->post('email');
		$password       = $this->input->post('password');
		$nama_penumpang = $this->input->post('nama_penumpang');
		$jenis_kelamin  = $this->input->post('jenis_kelamin');
		$telephone      = $this->input->post('telephone');
		$role_id        = $this->input->post('role_id');

		$editinsert = array('username' => $username, 'email' => $email, 'password' => $password, 'nama_penumpang' => $nama_penumpang, 'jenis_kelamin' => $jenis_kelamin, 'telephone' => $telephone, 'role_id' => $role_id);
		
		$cekupdate = $this->Admin_model->updatepenumpang($editinsert);

		if ( $cekupdate == true) {
			redirect('Admin/penumpang','refresh');
		}else{
			echo "Gagal Meyimpan data";
		}
	}

	public function hapus_penumpang($id)
	{
		$cekhapus = $this->Admin_model->hapuspenumpang($id);
   		if ($cekhapus == true) {
     	 redirect('Admin/penumpang','refresh');
  		}else{
     	 echo "gagal";
  		}
	}













	public function tambah_petugas()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[petugas.email]');
		if ($this->form_validation->run() == false) {
			
			echo "<script>alert('Data Gagal')</script>";
			redirect('Admin/penumpang','refresh');
						
		} else {
			$email        = $this->input->post('email');
			$password     = $this->input->post('password');
			$nama_petugas = $this->input->post('nama_petugas');
			$id_level     = $this->input->post('id_level');

			$saveinsert = array('email' => $email, 'password' => $password, 'nama_petugas' => $nama_petugas, 'id_level' => $id_level);

			$cekinsert = $this->Admin_model->insertpetugas($saveinsert);

			if ( $cekinsert == true) {
				redirect('Admin/petugas','refresh');
			}else{
				echo "Gagal Meyimpan data";
			}
		}
	}

	public function edit_petugas()
	{
			$email        = $this->input->post('email');
			$password     = $this->input->post('password');
			$nama_petugas = $this->input->post('nama_petugas');
			$id_level     = $this->input->post('id_level');

			$editinsert = array('email' => $email, 'password' => $password, 'nama_petugas' => $nama_petugas, 'id_level' => $id_level);
		
		$cekupdate = $this->Admin_model->updatepetugas($editinsert);

		if ( $cekupdate == true) {
			redirect('Admin/petugas','refresh');
		}else{
			echo "Gagal Meyimpan data";
		}
	}

	public function hapus_petugas($id)
	{
		$cekhapus = $this->Admin_model->hapuspetugas($id);
   		if ($cekhapus == true) {
     	 redirect('Admin/petugas','refresh');
  		}else{
     	 echo "gagal";
  		}
	}













	public function tambah_transportasi()
	{
			$kode        = $this->input->post('kode');
			$jumlah_kursi     = $this->input->post('jumlah_kursi');
			$keterangan = $this->input->post('keterangan');
			$id_type_transportasi     = $this->input->post('id_type_transportasi');

			$saveinsert = array('kode' => $kode, 'jumlah_kursi' => $jumlah_kursi, 'keterangan' => $keterangan, 'id_type_transportasi' => $id_type_transportasi);

			$cekinsert = $this->Admin_model->inserttransportasi($saveinsert);

			if ( $cekinsert == true) {
				redirect('Admin/transportasi','refresh');
			}else{
				echo "Gagal Meyimpan data";
			}
	}

	public function edit_transportasi()
	{
		$kode        = $this->input->post('kode');
		$jumlah_kursi     = $this->input->post('jumlah_kursi');
		$keterangan = $this->input->post('keterangan');
		$id_type_transportasi     = $this->input->post('id_type_transportasi');

		$editinsert = array('kode' => $kode, 'jumlah_kursi' => $jumlah_kursi, 'keterangan' => $keterangan, 'id_type_transportasi' => $id_type_transportasi);
		
		$cekupdate = $this->Admin_model->updatetransportasi($editinsert);

		if ( $cekupdate == true) {
			redirect('Admin/transportasi','refresh');
		}else{
			echo "Gagal Meyimpan data";
		}
	}

	public function hapus_transportasi($id)
	{
		$cekhapus = $this->Admin_model->hapustransportasi($id);
   		if ($cekhapus == true) {
     	 redirect('Admin/transportasi','refresh');
  		}else{
     	 echo "gagal";
  		}
	}















	public function tambah_rute()
	{
		$tujuan        = $this->input->post('tujuan');
		$rute_awal     = $this->input->post('rute_awal');
		$rute_akhir = $this->input->post('rute_akhir');
		$harga     = $this->input->post('harga');
		$tanggal_brngkt     = $this->input->post('tanggal_brngkt');
		$jam_brngkt     = $this->input->post('jam_brngkt');
		$id_transportasi     = $this->input->post('id_transportasi');

		$saveinsert = array('tujuan' => $tujuan, 'rute_awal' => $rute_awal, 'rute_akhir' => $rute_akhir, 'harga'=>$harga , 'tanggal_brngkt'=>$tanggal_brngkt , 'jam_brngkt'=>$jam_brngkt ,'id_transportasi' => $id_transportasi);

		$cekinsert = $this->Admin_model->insertrute($saveinsert);

		if ( $cekinsert == true) {
			redirect('Admin/rute','refresh');
		}else{
			echo "Gagal Meyimpan data";
		}
	}

	public function edit_rute()
	{
		$tujuan        = $this->input->post('tujuan');
		$rute_awal     = $this->input->post('rute_awal');
		$rute_akhir = $this->input->post('rute_akhir');
		$harga     = $this->input->post('harga');
		$tanggal_brngkt     = $this->input->post('tanggal_brngkt');
		$jam_brngkt     = $this->input->post('jam_brngkt');
		$id_transportasi     = $this->input->post('id_transportasi');

		$editinsert = array('tujuan' => $tujuan, 'rute_awal' => $rute_awal, 'rute_akhir' => $rute_akhir, 'harga'=>$harga , 'tanggal_brngkt'=>$tanggal_brngkt , 'jam_brngkt'=>$jam_brngkt , 'id_transportasi' => $id_transportasi);
		
		$cekupdate = $this->Admin_model->updaterute($editinsert);

		if ( $cekupdate == true) {
			redirect('Admin/rute','refresh');
		}else{
			echo "Gagal Meyimpan data";
		}
	}

	public function hapus_rute($id)
	{
		$cekhapus = $this->Admin_model->hapusrute($id);
   		if ($cekhapus == true) {
     	 redirect('Admin/rute','refresh');
  		}else{
     	 echo "gagal";
  		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
