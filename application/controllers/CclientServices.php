<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CclientServices extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('data/Dao_contactosCliente_model');
        $this->load->model('data/Dao_serviciosCliente_model');
    }

    public function specificClient() {
        $this->load->view('clientService');
    }

    public function getListContacs(){
        $idCliente = $this->input->post("idCliente");
        $param = $this->Dao_contactosCliente_model->getAllContactsById($idCliente);
        // echo "holaaa";
        echo json_encode($param->data);
    }

    public function getListServicios(){
        header('Content-Type: text/plain');
        $idCliente = $this->input->post("idCliente");
        $param = $this->Dao_serviciosCliente_model->getAllServicesById($idCliente);
        // print_r($param->data);
        // print_r($param);
        echo json_encode($param->data);
    }


}

?>
