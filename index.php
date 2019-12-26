<?php
/* Importa o cabeçalho */
require('conexao.php');
require('cabecalho.php');
?>
<title>ZAP - Móveis</title>
</head>
<body>
<?php
/* Importa o Rodapé */
require('menu-topo.php');
?>

<div class="wrapper">
  <?php
  /* Importa a SideBar */
  require('sidebar.php');
  ?>
  <!-- Conteúdo da Página -->
  <div class="content">
  
  <!-- O conteúdo principal -->
  <div id="main" style="margin:100px 300px">
    <img src="https://i.pinimg.com/originals/45/d9/8a/45d98aa922bef6b5213b488dc36a8764.png" alt="" style="width:300px">
    Registrado como <b><?php echo $nameUser; ?></b>, seja bem vindo(a)
  <hr>
  </div>

  <?php
  /* Importa o Rodapé */
  require('rodape.php');
  ?>
  </div>

</div>

<?php
/* Importa os Scripts JS */
require('scripts.php');
?>
</body>
</html>