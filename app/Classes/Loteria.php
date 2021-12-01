<?php

namespace App\Classes;

class Loteria{
  public $nJogos;
  public $nMinimo;
  public $nMaximo;
  public $quantidadeNumeros;
  public $arrayJogos;
  public $tipo;

  private function gerarNs(){
    $range = range($this->nMinimo, $this->nMaximo);
    //$array = [1, 4, 19, 28, 39, 45, 52];
    shuffle($range);

    return $range;
  }

  private function gerarJogo($tipo, $qntNs){

    switch($tipo){
      case 'megasena':
        $this->nMinimo = 1;
        $this->nMaximo = 60;
        $this->quantidadeNumeros = $qntNs;
        break;
      case 'lotofacil':
        $this->nMinimo = 1;
        $this->nMaximo = 25;
        $this->quantidadeNumeros = $qntNs;
        break;
      case 'quina':
        $this->nMinimo = 1;
        $this->nMaximo = 80;
        $this->quantidadeNumeros = $qntNs;
        break;
    }

    $arrayRage = $this->gerarNs();
    $this->arrayJogos = [];

    for($i = 0; $i < $this->quantidadeNumeros; $i++){
      $n = $arrayRage[$i];
      if($n < 10){
        $n = '0'.$n;
      }

      $this->arrayJogos[] = $n;
    }

    sort($this->arrayJogos);
    $nSeparados = implode(' - ', $this->arrayJogos);

    return $nSeparados;
  }

  public function gerarTxt($tipo, $qntNs){
    $txt = '';
    if($this->nJogos <= 100){
      for($i = 0; $i < $this->nJogos; $i++){
        $txt .= '<p>'.$this->gerarJogo($tipo, $qntNs).'</p>';
      }
    }else{
      echo 'Digitou mas de 100.';
    }
    

    return $txt;
  }

  public static function gerarInput($nInicial, $nInputs){
    $inputs = '';
    for($i = $nInicial; $i <= $nInputs; $i++){
      $inputs .= '
      <div class="input-box">
        <label for="n'.$i.'">'.$i.'</label>
        <input type="radio" name="qnt-ns" id="n'.$i.'" value="'.$i.'">
      </div>
      ';
    }

    return $inputs;
  }
}
