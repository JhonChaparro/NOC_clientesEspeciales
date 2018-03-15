<?php

class ClienteModel extends Model {

    protected $k_id_cliente;
    protected $n_name_cliente;
    
    //Los campos que desea ocultar para que no se reflejen en la vista.    
    protected $table = "cliente";
    //Los campos que desea exculir del modelo.
    protected $exclude = ["hidden", "exclude", "table", "class", "db", "__data"];

    public function __construct($properties = null) {
        parent::__construct($properties);
        $this->class = get_class($this);
    }
    
        public function setKIdCliente($k_id_cliente) {
        $this->k_id_cliente = $k_id_cliente;
    }
    public function getKIdCliente() {
        return $this->k_id_cliente;
    }
    public function setNNameCliente($n_name_cliente) {
        $this->n_name_cliente = $n_name_cliente;
    }
    public function getNNameCliente() {
        return $this->n_name_cliente;
    }


}

