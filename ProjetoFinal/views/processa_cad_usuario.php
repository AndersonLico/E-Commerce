<?php
    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    //echo "$nome_usuario - $email_usuario";
    
    $qunt_email=mysqli_num_rows(mysqli_query($con,"SELECT * FROM usuario WHERE email='$email'"));
    
    
    if($qunt_email==0){
    
    $result_usuario = "INSERT INTO `usuario` ( `nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";
    $resultado_usuario = mysqli_query($con, $result_usuario);
    
    if(mysqli_affected_rows($con) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://buyplace.000webhostapp.com/cadastro.php'>
                    <script type='text/javascript'>
                        alert('Usuario cadastrado com Sucesso.');
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://buyplace.000webhostapp.com/cadastro.php'>
                    <script type='text/javascript'>
                        alert('O Usuario não foi cadastrado com Sucesso.');
                    </script>
                ";    
            }
    }
    else{
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://buyplace.000webhostapp.com/cadastro.php'>
        <script type='text/javascript'>
        alert('Email ja existente');
        </script>
                ";
        
        
    }
?>