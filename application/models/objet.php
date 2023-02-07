<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {

	public function getAllObjet($id){
        $data = $this->db->query(sprintf("SELECT * FROM Proprieter WHERE NOT idP='%s'", $id));
        return $data;
    }
}
