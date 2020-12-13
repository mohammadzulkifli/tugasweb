<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dmodel extends CI_Model {

	public function getAll()
	{ 
		return $this->db->get('tabel_d')->result();
	}
	public function store($object)
	{
		return $this->db->insert('tabel_d',$object);
	}
}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */