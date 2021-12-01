<?php

use App\Classes\Loteria;

$inputs = Loteria::gerarInput(5,15);

$txt = '';
if(isset($_POST['qnt-ns'], $_POST['qnt-jogos'])){
  $qntNs = $_POST['qnt-ns'];
  $megaSena = new Loteria();
  $megaSena->nJogos = $_POST['qnt-jogos'];

  $txt = $megaSena->gerarTxt('quina', $qntNs);
  
}
?>

<section class="quina">
  <div class="titulo">
    <h2>Quina</h2>
  </div>

  <form action="" method="post">
    
    <div class="inputs">
      <h3>Quantidade de números:</h3>
      <?= $inputs ?>
    </div>

    <div class="inputs2">
      <label for="">Quantidade de jogos:</label>
      <input type="number" name="qnt-jogos" id="qnt-jogos">
      <button type="submit">Gerar</button>
    </div>
    
  </form>

  <div class="valor-aposta">
    
  </div>

  <div class="txt">
    <?= $txt ?>
  </div>
</section>