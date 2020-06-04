<?php
    $servidor = "localhost";
    $usuario = "id13883813_root";
    $senha = "Abcdef-123456";
    $dbname = "id13883813_buyplace";    
    //Criar a conexao
    $con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
    
    if(!$con){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?> 