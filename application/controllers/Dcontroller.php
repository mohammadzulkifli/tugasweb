<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dcontroller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dmodel');
	}

	public function index()
	{
		$data['data_tabel'] = $this->Dmodel->getAll();
		$this->load->view('Dindex',$data);
	}
	public function tambah()
	{
		$this->load->view('Dtambah');

	}
	public function simpan_data()
	{

		$data = array(
			
			'id_06'=>$this->input->post('id_06'),
			'kolom_kelas'=>$this->input->post('kolom_kelas'),
			'kolom_jurusan'=>$this->input->post('kolom_jurusan'),
			'kolom_isi'=>$this->input->post('kolom_isi'));
	//	print_r($data);
		$this->Dmodel->store($data);
		redirect('Dcontroller/index','refresh');
	}
	
}
