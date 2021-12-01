<?php
require ('vendor/autoload.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loteria ver. 1.0</title>

  <link rel="stylesheet" href="css/style.css?<?php echo rand(1, 1000); ?>">
</head>
<body>
  <header class="top-header">
    <nav class="menu">
      <a href="index.php?menuop=mega-sena">mega-sena</a>
      <a href="index.php?menuop=lotofacil">Lotofácil</a>
      <a href="index.php?menuop=quina">Quina</a>
    </nav>
  </header>
  
  <main class="center">
    <?php
    $menuop = (isset($_GET['menuop'])) ? $_GET['menuop'] : 'home';
      switch ($menuop) {
        case 'mega-sena':
          include("paginas/megasena.php");
          break;
        case 'lotofacil':
          include("paginas/lotofacil.php");
          break;
        case 'quina':
          include("paginas/quina.php");
          break;
      }
    ?>
  </main>
  <script src="js/script01.js?<?php echo rand(1, 1000); ?>"></script>
</body>
</html>

