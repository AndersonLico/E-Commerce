<?php session_start(); ?>
<html>
    <head>
        <title> Buy Place </title>
        <link rel="stylesheet" href="assets/css/template.css" />

    </head>
    <body>
    <?php
$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
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
            
        <?php

$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
$item=$_GET['id'];

$produtos=mysqli_num_rows(mysqli_query($con,"select * from produtos"));
$flag=0;

for ($i=1; $i <= $produtos; $i++) { 
    $dados=mysqli_fetch_array(mysqli_query($con,"select * from produtos where id = '$i' and id_categoria='$item'"));
    $nome=$dados['nome'];
    $valor=$dados['preco'];
    $imagem=$dados['imagem'];
    if ($flag<4) {    
    if (!empty($nome)) {
    $flag++;    
    echo "      
    <div class='produto'>


    <a href='carrinho.php?id=$i'><p>$nome <br>R$ $valor</p><br>
    
    <img src='assets/images/$imagem' width='180' height='170' border='0'></a>

    </div>
    ";
    }
}

}




?>
                    
        </div>
        <div class="rodape"></div>


    </body>
</html>