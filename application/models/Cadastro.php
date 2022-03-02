<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro extends CI_Model
{

    public function teste()
    {
        $this->db->select('*')
		->from('usuarios_');
		$query = $this->db->get();
		$data = $query->result();
		
        return $data;
    }

    
}
