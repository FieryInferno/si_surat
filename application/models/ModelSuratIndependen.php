<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelSuratIndependen extends CI_Model {
  
	public function getAll()
	{
		return $this->db->get('surat_independen')->result_array();
	}

  public function store($data)
  {
    $this->db->insert('surat_independen', $data);
  }

  public function get($id)
  {
    return $this->db->get_where('surat_independen', ['id' => $id])->row_array();
  }
}
