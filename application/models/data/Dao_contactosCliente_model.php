<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//    session_start();

class Dao_contactosCliente_model extends CI_Model {

    protected $session;

    public function __construct() {
        $this->load->model('dto/ClienteModel');
        $this->load->model('dto/ContactosModel');
    }

    public function getAllContactsById($idCliente) {
        try {
            $contacts = new ContactosModel();
            $datos = $contacts->where("k_id_cliente", "=", $idCliente)
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
