<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <title>Cadastro - Buy Place</title>
   
    <style>
      .login-form {
        width: 300px;
        margin: 0 auto;
        font-family: Tahoma, Geneva, sans-serif;
      }
      .login-form h1 {
        text-align: center;
        color: #4d4d4d;
        font-size: 24px;
        padding: 20px 0 20px 0;
      }
      .login-form input[type="password"],
      .login-form input[type="text"] {
        width: 100%;
        padding: 15px;
        border: 1px solid #dddddd;
        margin-bottom: 15px;
        box-sizing: border-box;
      }
      
      .login-form input[type="submit"] {
        width: 100%;
        padding: 15px;
        background-color: #535b63;
        border: 0;
        box-sizing: border-box;
        cursor: pointer;
        font-weight: bold;
        color: #ffffff;
        margin-bottom: 15px;
      }
      .login-form input[type="submit"]:hover{
        scale: (1.2);
        background-position: right;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }
      .login-form h1 img{
        cursor:pointer;
      }
      .login-form a{
        margin:5px;
        padding:5px;
        width:100%;
        color: #000;
        font-size:14px;
        text-decoration: none;    
      }
      .login-form .alinks:hover {
        color: #53868fff;
        border-bottom: 1px solid #53768fff;
        border-top: 1px solid #53768fff;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <?php
        $nameErr = $emailErr = $passwordErr = "";
        $name = $email = $password = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name é obrigatorio";
          } else {
            $name = test_input($_POST["name"]);
          }
        
          if (empty($_POST["email"])) {
            $emailErr = "Email é obrigatorio";
          } else {
            $email = test_input($_POST["email"]);
          }
        
          if (empty($_POST["password"])) {
            $passwordErr = "Password é obrigatorio";
          } else {
            $password = test_input($_POST["password"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          $data = addslashes($data);
          return $data;
        }
    ?>
    <div class="login-form">
      <h1>
        Cadastre-se<a href="./login.php"><img class="foto" src="assets/images/logo.png" width="150" height="120" /></a>
      </h1>
     <form method="POST" action="processa_cad_usuario.php">
        <input type="text" name="nome" placeholder="Nome" />
        <input type="text" name="email" placeholder="E-mail" />
        <input type="password" name="password" placeholder="Senha"/>
        <input type="submit"/>
  
    </body>
</html>

 
        <center>
          <a class="alinks" href="./login.php">Já possuo cadastro</a>
        </center>
        
      </form>
    </div>
  </body>
</html>
