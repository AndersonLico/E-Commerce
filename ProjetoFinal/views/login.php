<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Login - Buy Place</title>
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
      .login-form input[type="submit"]:hover {
        scale: (1.2);
        background-position: right;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }
      .login-form a {
        margin: 5px;
        padding: 5px;
        width: 100%;
        color: #000;
        font-size: 14px;
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
    <div class="login-form">
      <h1>
        Acessar<a href="./login.php"><img class="foto" src="assets/images/logo.png" width="150" height="120" /></a>
      </h1>
      <form action="valida.php" method="POST">
        <input type="text" name="email" placeholder="E-mail" required />
        <input type="password" name="senha" placeholder="Senha" required />
        <input type="submit" />
        <a class="alinks" href="./cadastro.php">Deseja se cadastrar?</a>
        <a class="alinks" data-toggle="modal" data-target="#myModal">Esqueceu a senha?</a>
      </form>
      <form action="">
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  &times;
                </button>
                <h4 class="modal-title">Esqueceu a senha?</h4>
              </div>
              <div class="modal-body">
                <label
                  >E-mail:
                  <input type="email" name="email" id="email" required />
                </label>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default" type="submit">
                  Recuperar senha
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php
      
      function select(){
        try{ 
          $pdo = new PDO($dsn, $dbuser, "");
          $sql = "select * from usuario where email='"+$email+"' AND password='"+$senha+"";
          $sql = $pdo->query($sql);

          return $pdo;
        }catch(PDOException $e){
          echo "Falhou:".$e->getMessage();
        }
      }
      ?>
    </div>
  </body>
</html>
