<?php
class produtoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function ver($id='') {

        if(!empty($id)) {

            $dados = array();
            $id = addcslashes($id);
            $sql = "SELECT * FROM produtos WHERE id = '$id'";
            $sql = $this->db->query($sql);
            $this->loadTemplate("produto, $dados");

            if($sql->rowCount() > 0) {
                $dados['produtos'] =$sql->fetch();

                $this->loadTemplate("produto", $dados);

            } else {
                header("location: /naoencontrado");

            } else {
            header("location: /naoencontrado");
            }

        }
    }
}

?>