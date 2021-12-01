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