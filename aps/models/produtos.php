<?php
class produtos extends model() {

    public function __construct() {
        parent::__construct();
    }
    
    public function listar($qt = 0) {
        $sql = "SELECT * FROM produtos ORDER BY RAND() ";
        if($qt > 0) {
            $sql .="LIMIT".$qt;
        }

        $sql = $this ->db->query($sql);
        $produtos = array();

        if ($sql->rowCount() > 0) {
            $produtos = $sql->fetchAll();
        }
        return $produtos;

    }
}

?>