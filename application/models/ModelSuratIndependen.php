<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSuratIndependen extends CI_Model {
  
	public function getAll()
	{
		return $this->db->get('surat_independen')->result_array();
	}
}
