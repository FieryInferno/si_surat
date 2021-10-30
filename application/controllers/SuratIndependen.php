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
}