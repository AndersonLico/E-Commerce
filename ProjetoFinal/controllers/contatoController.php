<?php
class contatoController extends controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index() {

        $dados =array('msg' =>'');

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);

            $html = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>
            Mensagem: ".$msg;

            $headers = 'From: suporte@buyplace.com'."\r\n";
            $headers .= 'Reply-To: '.$email."\r\n";
            $headers .= 'X-mailer: PHP/'.phpversion();

            mail("suporte@buyplace.com", "Contato pelo site em ".
            date('s/m/y'), $html, $headers);

            $dados['msg'] = "E-mail enviado com sucesso!";
        }


        $this->loadTemplate("contato", array());



    }
}
?>