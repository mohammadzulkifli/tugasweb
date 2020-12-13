<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		$data['data_tabel'] = $this->m_mahasiswa->getAll();
		$this->load->view('index.php',$data);
	}
	public function tambah()
	{
		$this->load->view('index/tambah');

	}
	public function simpan_data()
	{

		$data = array(
			'nim'=>$this->input->post('nim'),
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'));
	//	print_r($data);
		$this->m_mahasiswa->store($data);
		redirect('mahasiswa/index','refresh');
	}
	
}
