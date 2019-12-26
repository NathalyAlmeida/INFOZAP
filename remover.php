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
      <?php require('excluir.php');?>
  
  <!-- O conteúdo principal -->
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