<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function __construct() {
		
		parent:: __construct();
		$this->load->database();
		
	}

	public function create_user($id, $username, $email, $password, $jenis_kelamin, $nama_penumpang,$telephone) {
		
		$data = array(
			'id_penumpang'   => $id,
			'username'       => $username,
			'email'          => $email,
			'password'       => $password,
			'nama_penumpang' => $nama_penumpang,
			'jenis_kelamin'  => $jenis_kelamin,
			'telephone'      => $telephone,
			'created_at'     => date('Y-m-j H:i:s'),
			'role_id'        => '2',
		);
		return $this->db->insert('penumpang', $data);
	}

	public function cek_login()
    {
       	$username = $this->input->post('username');
       	$password = $this->input->post('password');
       	$result   = $this->db->where('username',$username)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('penumpang');

       	if ($result->num_rows()>0) {
       		return $result->row();
       	}else{
       		return array();
       	}
    }

	public function insert_mesan($data)
	{
		return $this->db->insert('pemesanan', $data);
	}

	public function get($id)
	{
		return $this->db->get_where('penumpang', ['id_penumpang' => $id])->row_array();
	}
}

/* End of file Model_welcome.php */
/* Location: ./application/models/Model_welcome.php */
