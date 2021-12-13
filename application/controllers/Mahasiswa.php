<?php

/**
* 
*/
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswaModel');
		$this->load->library('form_validation');

	}
	public function index()
	{
		$data['judul'] = 'Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswaModel->getMahasiswa();

		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->mahasiswaModel->cari();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah data mahasiswa';

		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jurusan', 'jurusan', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->mahasiswaModel->tambah();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('mahasiswa/index');
		}
	}

	public function hapus($id)
	{
		$this->mahasiswaModel->hapus($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('mahasiswa/index');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswaModel->detail($id);
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Tambah data mahasiswa';
		$data['mahasiswa'] = $this->mahasiswaModel->detail($id);
		$data['jurusan'] = ['Teknik Informatika','Akutansi','Manajemen'];

		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jurusan', 'jurusan', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/ubah',$data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->mahasiswaModel->ubah($id);
			$this->session->set_flashdata('flash', 'diubah');
			redirect('mahasiswa/index');
		}
	}
}