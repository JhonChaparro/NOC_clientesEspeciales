<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->load->view('login');
    }

    public function prueba(){
        $this->load->view('index');
    }

    public function insertuser(){
      $dao = new dao_examples_model();
      $res = $dao->insert($this->request);
      $this->json($res);
    }

}
