<?php

class ServiciosModel extends Model {

    protected $k_id_servicios;
    protected $k_id_cliente;
    protected $n_entidad;
    protected $n_id_servicio;
    protected $n_alias_servicio;
    protected $n_proveedor_um;
    protected $n_noc;
    protected $n_telefono;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "servicios";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIdServicios($k_id_servicios) {
        $this->k_id_servicios = $k_id_servicios;
    }
    public function getKIdServicios() {
        return $this->k_id_servicios;
    }
    public function setKIdCliente($k_id_cliente) {
        $this->k_id_cliente = $k_id_cliente;
    }
    public function getKIdCliente() {
        return $this->k_id_cliente;
    }
    public function setNEntidad($n_entidad) {
        $this->n_entidad = $n_entidad;
    }
    public function getNEntidad() {
        return $this->n_entidad;
    }
    public function setNIdServicio($n_id_servicio) {
        $this->n_id_servicio = $n_id_servicio;
    }
    public function getNIdServicio() {
        return $this->n_id_servicio;
    }
    public function setNAliasServicio($n_alias_servicio) {
        $this->n_alias_servicio = $n_alias_servicio;
    }
    public function getNAliasServicio() {
        return $this->n_alias_servicio;
    }
    public function setNProveedorUm($n_proveedor_um) {
        $this->n_proveedor_um = $n_proveedor_um;
    }
    public function getNProveedorUm() {
        return $this->n_proveedor_um;
    }
    public function setNNoc($n_noc) {
        $this->n_noc = $n_noc;
    }
    public function getNNoc() {
        return $this->n_noc;
    }
    public function setNTelefono($n_telefono) {
        $this->n_telefono = $n_telefono;
    }
    public function getNTelefono() {
        return $this->n_telefono;
    }


}

