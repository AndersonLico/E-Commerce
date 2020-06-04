<?php 
$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
$email=$_POST['email'];
$senha=$_POST['senha'];
$usuario=mysqli_num_rows(mysqli_query($con,"SELECT * FROM usuario WHERE email ='$email' AND senha='$senha' LIMIT 1"));
if($usuario >= 1){
    header("Location:template.php");
    
}
else{echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=https://buyplace.000webhostapp.com/cadastro.php'>
        <script type='text/javascript'>
        alert('Usuario Invalido');
        </script>";
 header("Location:login.php")   ;
    
    
}
     
?>