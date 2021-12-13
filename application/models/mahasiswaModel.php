<?php

/**
* 
*/
class mahasiswaModel extends CI_Model
{
	public function getMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambah()
	{
		$data = [
		'nim' => $this->input->post('nim',true),
		'nama' => $this->input->post('nama',true),
		'email' => $this->input->post('email',true),
		'email' => $this->input->post('email',true),
		'jurusan' => $this->input->post('jurusan',true),
		];

		$this->db->insert('mahasiswa', $data);
	}

	public function hapus($id)
	{
		return $this->db->delete('mahasiswa', ['id' => $id]);
	}

	public function detail($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}

	public function ubah($id)
	{
		$data = [
		'nim' => $this->input->post('nim',true),
		'nama' => $this->input->post('nama',true),
		'email' => $this->input->post('email',true),
		'email' => $this->input->post('email',true),
		'jurusan' => $this->input->post('jurusan',true),
		];

		$this->db->where('id', $id);
		return $this->db->update('mahasiswa',$data);
	}

	public function cari()
	{
		$keyword = $this->input->post('keyword',true);

		$this->db->like('nim', $keyword);
		$this->db->or_like('nama', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);

		return $this->db->get('mahasiswa')->result_array();
	}
}