<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemain extends CI_Controller {

	public function index($idKlub)
	{
		$this->load->model('klub_model');		
		$data["pemain_list"] = $this->klub_model->getPemainByKlub($idKlub);
		$this->load->view('pemain', $data);
	}

	public function create($idKlub)
	{
		// idPegawai = 1
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama','trim|required');
		$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');
		//$this->form_validation->set_rules('tanggalKeluar', 'tanggalKeluar', 'trim|required');
		$this->load->model('klub_model');	
		$data["pemain_list"] = $this->klub_model->getPemainByKlub($idKlub);
		if($this->form_validation->run()==FALSE){
			//$this->klub_model->insertPemain($idKlub);
			$this->load->view('tambah_pemain_view',$data);
		}else{
			$this->klub_model->insertPemain($idKlub);
		$this->load->view('tambah_pemain_view',$data);
		}
	}
	

	
	

	public function update($id)
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->load->model('klub_model');
		$data['pemain']=$this->klub_model->getPemain($id);
		if($this->form_validation->run()==FALSE){

			$this->load->view('edit_pemain_view',$data);

		}else{
			$this->klub_model->updateByIdPemain($id);
			$this->load->view('edit_pemain_sukses');          
            

		}

		
	}


	public function delete($id,$idKlub)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('klub_model');
		$data["pemain"] = $this->klub_model->getPemain();
		$this->klub_model->deleteByIdPemain($id);
		if($this->form_validation->run()==FALSE){

	}
		redirect('Pemain/create/'.$idKlub);
	}
}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>