<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CclientServices extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function specificClient() {
        //Comprobar si existe una sesión...
        $this->load->view('clientService');
    }
}

?>
