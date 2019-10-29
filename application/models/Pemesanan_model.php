<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pemesanan_model extends CI_Model {

	public function getrute ($id)
	{
		return $this->db->get_where('rute', ['id_rute' => $id])->row_array();
	}

	public function gettransportasi($id)
	{
		return $this->db->get_where('transportasi', ['id_transportasi' => $id])->row_array();
	}

	public function getallpenumpang()
	{
		return $this->db->get('penumpang');
		
	}
                        
                            
                        
}
                        
/* End of file pemesanan.php */
    
                        