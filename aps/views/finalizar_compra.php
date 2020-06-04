<html>
    <head>
        <title> Buy Place </title>
        <link rel="stylesheet" href="assets/css/template.css" />
        
    </head>
    <body>
    <?php
$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
session_start();
$_SESSION['itens'];
if (isset($_SESSION['itens'])) {
    echo $_SESSION['itens'];
}
?>
<center>
<img class="foto" src="assets/images/logo.png" width="180" height="180" border="0" />
</center>
        <div class="topo"></div>
        <div class="menu">
            <div class="menuint">
            <ul>
                <a href="template.php"><li>home</li></a>
                <a href="empresa.php"><li>empresa</li></a>
                <a href="item.php?id=1"><li>Chinelos</li></a>
                <a href="item.php?id=2"><li>Camisas</li></a>
                <a href="item.php?id=3"><li>Bermudas</li></a>
                <a href="item.php?id=4"><li>Cuecas</li></a>
              

<a href="contato.php"><li>contato</li><a>
                </ul>
               <a href="carrinho.php">
                    <img class="foto" src="assets/images/carrinho.png" width="50" height="50" border="0" />
                <div class="carrinho">
                    Carrinho:<br/>

                    

                    <?php echo (isset($_SESSION['carrinho']))?count($_SESSION['carrinho']):'0'; ?> Itens
                    
                </div>
                </a>
            </div>
        </div>
        
        <div class="container">
            
        <h1>Finalizar Compra</h1>
<form method="POST">
<fieldset>
    <legend>Informações do Usuário</legend>
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    
    Sobrenome:<br/>
    <input type="text" name="sobrenome" /><br/><br/>
    
    RG ou CPF:<br/>
    <input type="text" name="doc" /><br/><br/>

    </fieldset>
    <br/>
    <fieldset>
        <legend>Informações de Endereço</legend>

        <textarea name="endereco"></textarea>


        </fieldset>
        <br/>
        <fieldset>
        <legend>Informações de Pagamento</legend>
        <input type="radio" id="nome" name="pg" value="Grátis">
        <label for="male">Grátis</label><br>
        <input type="radio" id="nome" name="pg" value="Pagseguro">
        <label for="female">Pagseguro</label><br>
        <input type="radio" id="nome" name="pg" value="Paypal">
        <label for="other">Paypal</label><br>
        <input type="radio" id="nome" name="pg" value="Boleto">
        <label for="other">Boleto</label><br>
        <input type="radio" id="nome" name="pg" value="MoIP">
        <label for="other">MoIP</label><br>


        </fieldset>
        <br/>
        <input type="submit" value="Efetuar Pagamento" />
        </form>


                    
        </div>
        <div class="rodape"></div>


    </body>
</html>

