<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratIndependen extends CI_Controller {
  
	public function index()
	{
		$data['title']      = "APS | Kepala-Surat Independen";
    $data['independen'] = $this->ModelSuratIndependen->getAll();

		$this->load->view('kepala/header', $data);
		$this->load->view('kepala/surat/independen/index', $data);
		$this->load->view('kepala/footer');
	}

  public function create()
  {
		$data['title']  = "APS | Kepala-Tambah Surat Independen";
    
		$this->load->view('kepala/header', $data);
		$this->load->view('kepala/surat/independen/create', $data);
		$this->load->view('kepala/footer');
  }

  public function store()
  {
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('nama_partner', 'Nama Partner', 'required');
    $this->form_validation->set_rules('nama_supervisor', 'Nama Supervisor', 'required');
    $this->form_validation->set_rules('ketua_tim', 'Ketua Tim', 'required');
    $this->form_validation->set_rules('nama_anggota_1', 'Nama Anggota 1', 'required');
    $this->form_validation->set_rules('nama_anggota_2', 'Nama Anggota 2', 'required');
    $this->form_validation->set_rules('nama_klien', 'Nama Klien', 'required');
    $this->form_validation->set_rules('alamat_klien', 'Alamat Klien', 'required');
    $this->form_validation->set_rules('telp', 'Telp', 'required');
    $this->form_validation->set_rules('aktivitas_utama_klien', 'Aktivitas Utama Klien', 'required');
    $this->form_validation->set_rules('jenis_jasa_profesi', 'Jenis Jasa Profesi', 'required');
    $this->form_validation->set_rules('periode_pelaksanaan', 'Periode Pelaksanaan', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $data['tanggal']                = $this->input->post('tanggal');
      $data['nama_partner']           = $this->input->post('nama_partner');
      $data['nama_supervisor']        = $this->input->post('nama_supervisor');
      $data['ketua_tim']              = $this->input->post('ketua_tim');
      $data['nama_anggota_1']         = $this->input->post('nama_anggota_1');
      $data['nama_anggota_2']         = $this->input->post('nama_anggota_2');
      $data['nama_klien']             = $this->input->post('nama_klien');
      $data['alamat_klien']           = $this->input->post('alamat_klien');
      $data['telp']                   = $this->input->post('telp');
      $data['aktivitas_utama_klien']  = $this->input->post('aktivitas_utama_klien');
      $data['jenis_jasa_profesi']     = $this->input->post('jenis_jasa_profesi');
      $data['periode_pelaksanaan']    = $this->input->post('periode_pelaksanaan');
      $data['created_at']             = date('Y-m-d h:i:s');

      $this->ModelSuratIndependen->store($data);

      $this->session->set_flashdata('sukses', 'Berhasil tambah data');
      redirect('kepala/surat_independen');
    } else {
      $this->session->set_flashdata('error', validation_errors());
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function show($id)
  {
    $data           = $this->ModelSuratIndependen->get($id);
		$data['title']  = "APS | Kepala-Detail Surat Independen";
    
		$this->load->view('kepala/header', $data);
		$this->load->view('kepala/surat/independen/show', $data);
		$this->load->view('kepala/footer');
  }
}
