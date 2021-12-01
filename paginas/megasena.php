<?php

use App\Classes\Loteria;

$inputs = Loteria::gerarInput(6,15);

$txt = '';
if(isset($_POST['qnt-ns'], $_POST['qnt-jogos'])){
  $qntNs = $_POST['qnt-ns'];
  $megaSena = new Loteria();
  $megaSena->nJogos = $_POST['qnt-jogos'];

  $txt = $megaSena->gerarTxt('megasena', $qntNs);
  
}
?>

<section class="megasena">
  <div class="titulo">
    <h2>Mega-Sena</h2>
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

<!--<script>
  const $labelRadio = document.querySelectorAll('.input-box label');
  const $valor = document.querySelector('.valor-aposta');
  const $qntJogos = document.querySelector('#qnt-jogos');

  $qntJogos.value = 1;
  let j = null;
  for(let i = 0; i < $labelRadio.length; i++){
    $labelRadio[i].addEventListener('click', ()=>{

      /*switch(i){
        case 0:
          $valor.innerHTML = '<p>Valor da aposta: <span>R$ 4,50</span></p>';
          break;
        case 1:
          $valor.innerHTML = 'R$ 31,50';
          break;
      }*/
      
      if(i >= 0 && j === null){
        $labelRadio[i].classList.add('preto');
        j = i;
      }else if(i >= 0 && j != null){
        $labelRadio[j].classList.remove('preto');
        $labelRadio[i].classList.add('preto');
        j = i;
      }
      
    });
  }
</script>-->

