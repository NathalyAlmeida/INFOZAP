<?php

$rootDir = $_SERVER["DOCUMENT_ROOT"] . '/hotel-lite/';
$uploaddir = $rootDir . 'tmp/avatars/';

/* Importa o cabeçalho */
require('../cabecalho.php');

/* Trata o envio de novo Quarto */
if(isset($_POST['pronto'])){

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];

  if($nome == '' || empty($sobrenome)) {
    $erro = 'Nome e Sobrenome devem ser informados';
  }elseif(!empty($nova) && ($nova != $conf) && !empty($senha)) {
    $erro = 'A nova senha deve ser confirmada';
  }else {

  
  $data = [];

  $upUser = $pdo->prepare("UPDATE user SET name = ?,lastname = ?,email = ?,password=? WHERE id_user = {$usuario->id_user}" );

  $upUser->execute($data);

    if($upUser->rowCount() > 0){
      $mensagem="Seu perfil foi atualizado.";

      $idUser = $_SESSION['usuario']['id'];
      $getUser = $pdo->query("SELECT * FROM user WHERE id_user = '$idUser' LIMIT 1");
      $usuario = $getUser->fetchObject();

    } else{
      $erro="Deu errado.";
    }  
  }
}


?>
<title>Hotel Maré - Adicionar Quarto</title>
</head>
<body>
<?php
/* Importa o Rodapé */
require('../menu-topo.php');
?>

<div class="wrapper">
  <?php
  /* Importa a SideBar */
  require('../sidebar.php');
  ?>
  <!-- Conteúdo da Página -->
  <div class="content">
  
  <!-- O conteúdo principal -->
  <div id="main">

  <h1>Quartos</h1>

  </div>

  <?php
  /* Importa o Rodapé */
  require('../rodape.php');
  ?>
  </div>

</div>

<?php
/* Importa os Scripts JS */
require('../scripts.php');
?>
</body>
</html>