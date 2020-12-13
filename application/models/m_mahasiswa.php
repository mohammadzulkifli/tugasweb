<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model {
	
	public function getAll()
	{ 
		return $this->db->get('mahasiswa')->result();
	}
	public function store($object)
	{
		return $this->db->insert('mahasiswa',$object);
	}
}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */