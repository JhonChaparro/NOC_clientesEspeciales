<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

class Dao_cliente_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('dto/ClienteModel');
    }

    public function getAll() {
        try {
            $clienteModel = new ClienteModel();
            $datos = $clienteModel->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (DeplynException $ex) {
            return $ex;
        }
    }

}

?>
