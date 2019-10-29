<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	public function getlevel()
	{
		return $this->db->get('level');
	}
	public function gettype_transportasi()
	{
		return $this->db->get('type_transportasi');
	}


	public function insertpenumpang($datasimpan){
		return $this->db->insert('penumpang', $datasimpan);
	}

	public function updatepenumpang($dataupdate)
	{
		$this->db->where('id_penumpang', $this->input->post('id_penumpang'));
		return $this->db->update('penumpang', $dataupdate );
	}

	public function hapuspenumpang($id)
	{
		$this->db->where('id_penumpang', $id);
		return $this->db->delete('penumpang');
	}
	
	public function getpenumpang()
	{
		return $this->db->get('penumpang');
	}











	public function getpetugas()
	{
		return $this->db->get('petugas');
	}

	public function insertpetugas($datasimpan){
		return $this->db->insert('petugas', $datasimpan);
	}

	public function updatepetugas($dataupdate)
	{
		$this->db->where('id_petugas', $this->input->post('id_petugas'));
		return $this->db->update('petugas', $dataupdate );
	}

	public function hapuspetugas($id)
	{
		$this->db->where('id_petugas', $id);
		return $this->db->delete('petugas');
	}











	public function gettransportasi()
	{
		return $this->db->get('transportasi');
	}

	public function inserttransportasi($datasimpan){
		return $this->db->insert('transportasi', $datasimpan);
	}

	public function updatetransportasi($dataupdate)
	{
		$this->db->where('id_transportasi', $this->input->post('id_transportasi'));
		return $this->db->update('transportasi', $dataupdate );
	}

	public function hapustransportasi($id)
	{
		$this->db->where('id_transportasi', $id);
		return $this->db->delete('transportasi');
	}













	public function getrute()
	{
		return $this->db->get('rute');
	}

	public function insertrute($datasimpan){
		return $this->db->insert('rute', $datasimpan);
	}

	public function updaterute($dataupdate)
	{
		$this->db->where('id_rute', $this->input->post('id_rute'));
		return $this->db->update('rute', $dataupdate );
	}

	public function hapusrute($id)
	{
		$this->db->where('id_rute', $id);
		return $this->db->delete('rute');
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
