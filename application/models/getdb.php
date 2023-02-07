<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetDb extends CI_Model {
    public function get($tableName){
        $data = $this->db->query("SELECT * FROM ".$tableName);
        return $data;
    }

    public function find($tableName, $col, $val){
        $data = $this->db->query("SELECT * FROM ".$tableName." WHERE ".$col."='".$val."'");
        return $data;
    }
}
