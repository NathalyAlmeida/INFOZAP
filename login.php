<?php
/* Inicia a Sessão */
session_start();

/* Importa a configuração com o PDO */
require('conexao.php');

/* Verifica se o formulário foi enviado */
if(isset($_POST['entrar'])){
  /* pega os dados dos inputs */
  $email = $_POST['email'];
  $password = $_POST['password'];

  /* Valida os campos */
  if (empty($email)) {
    $erro = "É preciso informar o e-mail.";

  } elseif(empty($password)) {
    $erro = "É preciso informar a senha.";

  } else {
    /* Busca no BD se existe esse e-mail e senha */
    $getUser = $pdo->query("SELECT * FROM user WHERE email = '$email' LIMIT 1");

    if ($getUser->rowCount() > 0) {
      /* Se tiver algum resultado pega os dados */
      $usuario = $getUser->fetchObject();

      /* Pega o hash do Banco de Dados */
      $hash = $usuario->password;

      /* Verifica se a senha está correta */
      if(password_verify($password, $hash)) {

        /* Armazena os dados do usuário no Array da $_SESSION */
        $_SESSION['usuario'] = array(
        "id" => $usuario->id_user,
        "email" => $usuario->email,
        "name" => $usuario->name,
        "created_at" => $usuario->created_at
        );

        /* Direciona para a página inicial */
        header("Location: index.php");
      } else {
        $erro = "Não foi possivel realizar o login!";
      }
      
    } else {

      $erro = "Não foi possivel realizar o login!";

    }
  }
 }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ZAP - Login</title>
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body style="backgrund: #fb5d3b !important">
  
  <div class="wrapper" style="background: #fb5d3b">
    <img src="https://revista.zapimoveis.com.br/wp-content/themes/blogzapemcasa/img/logo_zappng.png" alt="Logo">
    <form action="" method="POST" autocomplete="off" style="margin: 99px 0px !important">
      <img src="https://image.flaticon.com/icons/png/512/149/149071.png" alt="" srcset="" id="imagem_usuario">
      <div class="caixa">
      <input type="email" name="email" placeholder="E-mail" autocomplete="false">
      <input type="password" name="password" placeholder="Senha" autocomplete="false">
      <div class="erro">
      <?php 
        if(isset($erro)) 
          echo $erro; 
      ?>
    </div>
      <button type="submit" name="entrar">Entrar</button>
      </div>
    </form>
  </div>
</body>
</html>