<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klub_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataKlub()
		{
			$this->db->select("id,nama,logo");
			$query = $this->db->get('klub');
			return $query->result();
		}


		public function getPemainByKlub($idKlub)
		{
			$this->db->select("pemain.id,pemain.nama as namaPemain ,klub.nama as namaKlub, posisi,DATE_FORMAT(tanggal_lahir,'%d-%m-%Y') as tanggalLahir");
			$this->db->where('fk_klub', $idKlub);	
			$this->db->join('klub', 'pemain.id = pemain.fk_klub', 'left');	
			$query = $this->db->get('pemain');
			return $query->result();
		}

		public function insertKlub()
		{
			$object = array(
				'nama' => $this->input->post('nama'), 
				'logo' => $this->upload->data('file_name'),
				);
			$this->db->insert('klub', $object);
		}
		public function insertPemain($idKlub)
		{
			$object = array(
				'nama' => $this->input->post('nama'), 
				'posisi' => $this->input->post('posisi'),
				'tanggal_lahir' => $this->input->post('tanggalLahir'),
				'fk_klub' => $idKlub
				);
			$this->db->insert('pemain', $object);
		}
		public function getKlub($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('klub',1);
			return $query->result();

		}
		public function getPemain($id)
		{
			$this->db->where('id', $id);	
			$query = $this->db->get('pemain',1);
			return $query->result();

		}

		

		public function updateById($id)
		{
			$data = array('nama' => $this->input->post('nama'), 'logo' => $this->upload->data('file_name'));
			$this->db->where('id', $id);
			$this->db->update('klub', $data);
		}
		public function updateByIdPemain($id)
		{
			$data = array('nama' => $this->input->post('nama'),'tanggal_lahir' => $this->input->post('tanggal_lahir'),'posisi' => $this->input->post('posisi'));
			$this->db->where('id', $id);
			$this->db->update('pemain', $data);
		}
		public function deleteById($id)
		{
			$this -> db -> where('id', $id);
  			$this -> db -> delete('klub');
		}
		public function deleteByIdPemain($id)
		{
			$this -> db -> where('id', $id);
  			$this -> db -> delete('pemain');
		}

		// public function insertJabatan($idPegawai)
		// {
		// 	// idPegawai = 1
		// 	$object = array(
		// 		'namaJabatan' => $this->input->post('jabatan'), 
		// 		'tanggalMulai'=>$this->input->post('tanggalMulai'),
		// 		'tanggalSelesai'=>$this->input->post('tanggalSelesai'),
		// 		'fk_pegawai'=> $idPegawai
		// 		);
		// 	$this->db->insert('jabatan_pegawai', $object);
		// }
		
		// public function insertAnak($idPegawai)
		// {
		// 	$object = array(
		// 		'namaAnak' => $this->input->post('nama'), 
		// 		'tanggalLahir'=>$this->input->post('tanggalLahir'),
		// 		//'tanggalSelesai'=>$this->input->post('tanggalSelesai'),
		// 		'fk_pegawai'=> $idPegawai 	
		// 		);
		// 	$this->db->insert('anak', $object);
		// }
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>