<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $this->load->model('categorie');
        $allCategorie = $this->categorie->getAllC();
        $this->load->model('getDb');
        $allUser = $this->getDb->get("Account");
        $allEchange = $this->getDb->get("Echange", "valider", 1);
        $data = array('title'=>'Admin', 'name'=>'Admin', 'categorie'=>$allCategorie, 'user'=>$allUser, 'echange'=>$allEchange);
		$this->load->view('admin', $data);
    }
}
