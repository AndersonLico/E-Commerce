<?php session_start();?>
<html>
    <head>
        <title> Buy Place </title>
        <link rel="stylesheet" href="assets/css/template.css" />
        
    </head>
    <body>
    <?php
$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");

$id=$_GET['id'];
if ($id!=0) {
    
$produto=mysqli_fetch_array(mysqli_query($con,"select * from produtos where id= '$id'"));
    
    if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
    
    }
    else{
        $_SESSION["carrinho"][$id]=$id;
    }
}

$_SESSION['itens'];

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
            
        <?php $id=$_GET['id'];


$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
if ($id!=0) {
    
$produto=mysqli_fetch_array(mysqli_query($con,"select * from produtos where id= '$id'"));
    
    if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
    
    }
    else{
        $_SESSION["carrinho"][$id]=$id;
    }
}
?>
<h1>Carrinho de Compras</h1>
<table border="0" width="100%">
    <tr>
        <th align="left">imagem</th>
        <th align="left">Nome do produto</th>
        <th align="left">Valor</th>
        <th align="left">Ações</th>
    </tr>

    <?php $subtotal = 0;
     $_SESSION['itens']=0;
     foreach ($_SESSION['carrinho'] as $prod=>$id){
        $_SESSION['itens']++;
        $dados= mysqli_fetch_array(mysqli_query($con,"select * from produtos where id = '$id'"));
        $nome=$dados['nome'];
        $valor=$dados['preco'];
        $imagem=$dados['imagem'];
        $subtotal+=$valor;
        echo"
            <tr>
                <td><img src='assets/images/$imagem ' border='0' width='60' /></td>
                <td>$nome</td>
                <td>$valor</td>
                <td><a href='remover.php?id=$id'>Remover</a></tb>
            </tr>



        ";

    }

        ?>
    <tr>
        <td colspan="2" align="right">Subtotal:R$<?php echo $subtotal?></td>
        <td align="left"></td>
        <td>
        <a href="finalizar_compra.php">Finalizar Compra</a>
        </td>
        <a href="template.php">Voltar</a>
</table>

                    
        </div>
        <div class="rodape"></div>


    </body>
</html>