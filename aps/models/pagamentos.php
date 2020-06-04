<?php
class pagamentos extends model {
    parent::__construct();
}

public function getPagamentos() {
    $array = array();

    $sql = "SELECT * FROM pagamentos";
    $sql = $this->db->query($sql);
    if($sql->rowCount() > 0) {
        array = $sql->fetchAll();
    }

    return $array;

    
}