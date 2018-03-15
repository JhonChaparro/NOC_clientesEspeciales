<?php

class ContactosModel extends Model {

    protected $k_id_contacto;
    protected $k_id_cliente;
    protected $n_nivel_esc;
    protected $n_nombre_contacto;
    protected $n_cargo;
    protected $n_numero_habil;
    protected $n_numero_no_habil;
    protected $n_correo;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "contactos";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIdContacto($k_id_contacto) {
        $this->k_id_contacto = $k_id_contacto;
    }
    public function getKIdContacto() {
        return $this->k_id_contacto;
    }
    public function setKIdCliente($k_id_cliente) {
        $this->k_id_cliente = $k_id_cliente;
    }
    public function getKIdCliente() {
        return $this->k_id_cliente;
    }
    public function setNNivelEsc($n_nivel_esc) {
        $this->n_nivel_esc = $n_nivel_esc;
    }
    public function getNNivelEsc() {
        return $this->n_nivel_esc;
    }
    public function setNNombreContacto($n_nombre_contacto) {
        $this->n_nombre_contacto = $n_nombre_contacto;
    }
    public function getNNombreContacto() {
        return $this->n_nombre_contacto;
    }
    public function setNCargo($n_cargo) {
        $this->n_cargo = $n_cargo;
    }
    public function getNCargo() {
        return $this->n_cargo;
    }
    public function setNNumeroHabil($n_numero_habil) {
        $this->n_numero_habil = $n_numero_habil;
    }
    public function getNNumeroHabil() {
        return $this->n_numero_habil;
    }
    public function setNNumeroNoHabil($n_numero_no_habil) {
        $this->n_numero_no_habil = $n_numero_no_habil;
    }
    public function getNNumeroNoHabil() {
        return $this->n_numero_no_habil;
    }
    public function setNCorreo($n_correo) {
        $this->n_correo = $n_correo;
    }
    public function getNCorreo() {
        return $this->n_correo;
    }


}

