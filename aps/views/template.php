<?php session_start();?>
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
                    <right></left><img class="foto" src="assets/images/carrinho.png" width="50" height="50" border="0" /></right>
                <div class="carrinho">
                    Carrinho:<br/>
            
                    

                    <?php echo (isset($_SESSION['carrinho']))?count($_SESSION['carrinho']):'0'; ?> Itens
                    
                </div>
                </a>
            </div>
        </div>
        
        <div class="container">
            
        <?php include("home.php") ?>
                    
        </div>
        <div class="rodape"></div>


    </body>
</html>