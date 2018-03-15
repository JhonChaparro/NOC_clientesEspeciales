<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CclientServices extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function specificClient() {
        $this->load->view('clientService');
    }

    public function getListContacs(){
    	$idCliente = $this->input->post("idCliente");
    	$this->
    }
}

?>
