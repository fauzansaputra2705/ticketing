<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get($id)
	{
		return $this->db->get_where('penumpang', ['id_penumpang' => $id])->row_array();
	}

	public function gettransportasi($id)
	{
		return $this->db->get_where('transportasi', ['id_transportasi' => $id])->row_array();
	}

	public function getallrute()
	{
		return $this->db->get('rute');
	}

	public function get_search($gabung,$tanggal_brngkt){
		$this->db->select('*');
		$this->db->from('rute');
		$this->db->like('tujuan',$gabung);
		$this->db->like('tanggal_brngkt',$tanggal_brngkt);
		// $this->db->like('jumlah_kursi' >= $jumlah_kursi);
		return $this->db->get()->result();
	}

	public function get_search_tanggal($tanggal_brngkt1,$transportasi)
	{
		$this->db->select('*');
		$this->db->from('rute');
		$this->db->where('id_transportasi', $transportasi);
		
		$this->db->where('tanggal_brngkt',$tanggal_brngkt1);

		return $this->db->get()->result();
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
