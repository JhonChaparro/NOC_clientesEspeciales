<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

class Dao_serviciosCliente_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('dto/ClienteModel');
        $this->load->model('dto/ServiciosModel');
    }

    public function getAllServicesById($idCliente) {
        try {
            $servicios = new ServiciosModel();
            $datos = $servicios->where("k_id_cliente", "=", $idCliente)
                    ->get();
            $response = new Response(EMessages::SUCCESS);
            $response->setData($datos);
            return $response;
        } catch (DeplynException $ex) {
            return $ex;
        }
    }

}

?>
